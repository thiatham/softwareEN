/*
=============================================================================================
var firebase_hostting:
	true : use from firebase sever
	false : use from local server
==============================================================================================
*/
const firebase_hostting = false;
const express = require('express');
const path = require('path');
const bodyParser = require('body-parser');
const rateLimit = require("express-rate-limit");
const ejsLint = require('ejs-lint');
manageuser = require(path.join(__dirname + '/module/mangerUser.js'));
const app = express();

const apiLimiter = rateLimit({
    windowMs: 1 * 60 * 1000, // หน่วย มิลิเซก
    max: 100, // limit each IP to 100 requests per windowMs
    message: "Too many accounts created from this IP, please try again after an hour"
});

app.use(bodyParser.json({
    limit: '5md'
}));
app.use(bodyParser.urlencoded({
    limit: '50mb',
    extended: true
}));
app.use(express.static('public'));
app.set('view engine', 'ejs');

app.get('/', apiLimiter, (req, res) => {
    rb = req.body;
	res.render("loading");
});

app.post('/adminAPI', apiLimiter,(req, res) => {
    rb = req.body;
    manageuser.getDataformToken(rb.idtoken , userRecord => {
        console.log(userRecord.customClaims.admin);
        if (userRecord.customClaims.admin) {
            console.log(rb.typedata);
            switch (rb.typedata) {
                case 'getAlluser':
                    manageuser.getAlluser( (data) => {
                        res.json(data);
                    });
                    break;

                case 'getRoleUser':
                    manageuser.getRoleUser(rb.idUser, data => {
                        res.send(data);
                    });
                    break;
                case 'setRoleUser':
                    manageuser.setRoleper(rb.idUser, rb.permer, (roleboolean) => {
                        res.json({ setP: roleboolean });
                    });
                    break;

            }
        }
    });
});
app.post('/membersAPI', apiLimiter, (req, res) => {
    rb = req.body;
    switch (rb.typedata) {
        case 'createNewUser':
            manageuser.createNewUser(
                rb.email,
                rb.phoneNumber,
                rb.password,
                rb.displayName,
                (data) => {
                    res.json({ repost: data.Te });
                });
            break;
    }
});
app.post('/GetPages', apiLimiter, (req, res) => {
    rb = req.body;
    switch (rb.typedata) {
        case 'dashboard':
            manageuser.getDataformToken(rb.idtoken , userRecord => {
                console.log(userRecord.customClaims.admin);
                if (userRecord.customClaims.admin) {
                    res.render("dashboard-admin");
                } else if(userRecord.customClaims.admin === false){
                    res.render("dashboard-user");
                } else {
                    res.send("WHY ARE YOU HERE?")
                }
            });
            break;
        case 'login':
            res.render("login");
            break;
        case 'register':
            res.render("register");
            break;
        case 'forgot':
            res.render("forgot-password");
            break;
    }
});

app.get('*', (req, res) => {
    res.status(404).send("หาหน้าไม่เจอ รอเพิ่มหน้า 404")
});

/*
=============================================================================================
TEST ZONE
=============================================================================================
*/
if (typeof require !== undefined && require.main === module) {
    //database.exportBill('IhksSBAH1VWPss6OPwj3EBLGVrm1', 0);
    //sendpost(name_live,long_live,post_live,phone_live,post_num).then(function(result) {
    //    console.log(JSON.parse(result)); // "Some User token"
    //})
}

/*
=============================================================================================
START SERVER FROM LOCAL
COMMAND: node index.js || nodemon index.js
=============================================================================================
START SERVER FROM SERVER FIREBASE
COMMAND: firebase serve --only functions,hosting
=============================================================================================
*/
if (firebase_hostting) {
    const functions = require('firebase-functions');
    exports.app = functions.https.onRequest(app);
} else {
    app.use(express.static('../public'));
    var server = app.listen('8888', function () {
        var host = server.address().address;
        var port = server.address().port;
        console.log("sever success : http://localhost:" + port);
    });
    module.exports = app;

}


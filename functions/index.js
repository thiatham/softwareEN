/*
=============================================================================================
var upload_host:
	true : use from firebase sever
	false : use from local server
==============================================================================================
*/
const upload_host = false;
const express = require('express');
const path = require('path');
const serviceAccount = require(path.join(__dirname + "/secret/" + "sfen-e5e15-firebase-adminsdk-tv7og-bca50a08f8.json"));
const admin = require("firebase-admin");
const functions = require('firebase-functions');
const bodyParser = require('body-parser');
const rateLimit = require("express-rate-limit");
const ejsLint = require('ejs-lint');
admin.initializeApp({
    credential: admin.credential.cert(serviceAccount),
    databaseURL: "https://sfen-e5e15.firebaseio.com"
});

var db = admin.database();

const manageUser = require(path.join(__dirname + '/module/manageUser.js'));
const manageDatabase = require(path.join(__dirname + '/module/manageDatabase.js'));
const app = express();
const apiLimiter = rateLimit({
    windowMs: 1 * 60 * 1000, // หน่วย มิลิเซก
    max: 100, // limit each IP to 100 requests per windowMs
    message: "Too many accounts created from this IP, please try again after an hour"
});
app.use(bodyParser.json({
    limit: '5mb'
}));
app.use(bodyParser.urlencoded({
    limit: '50mb',
    extended: true
}));
app.use(express.static('public'));
app.set('view engine', 'ejs');

app.get('/', apiLimiter, (req, res) => {
    var xl = require('excel4node');
    rb = req.body;
	res.render("loading");
});

app.get('/apitest/:years', apiLimiter,(req, res) => {
    rb = req.params;
    db.ref(rb.years+"/").once("value",function(snapshot) {
        console.log(snapshot.val());
    });
});

app.post('/adminAPI', apiLimiter,(req, res) => {
    rb = req.body;
    manageUser.getDataformToken(rb.idtoken , userRecord => {
        if (userRecord.customClaims.admin === 0) {
            switch (rb.command) {
                //permission command
                case 'getDataUser':
                    manageUser.getDataUser( (data) => {
                        res.json(data);
                    });
                    break;
                case 'getRoleUser':
                    manageUser.getRoleUser(rb.idUser, data => {
                        res.send(data);
                    });
                    break;
                case 'setRoleUser':
                    manageUser.setRoleper(rb.idUser, rb.permer, (roleboolean) => {
                        res.json({ setP: roleboolean });
                    });
                    break;
                //query ข้อมูลใน table ของทุกฝ่ายในตารางออกมา
                case 'getDataAll':
                    manageDatabase.getDataAll(rb.years,(dataQuery) => {
                        res.json(dataQuery);
                    });
                    break;
            }
        }
    });
});

app.post('/membersAPI', apiLimiter, (req, res) => {
    rb = req.body;
    switch (rb.command) {
        case 'createNewUser':
            manageUser.createNewUser(
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
    switch (rb.command) {
        case 'dashboard':
            manageUser.getDataformToken(rb.idtoken , userRecord => {
                if (userRecord.customClaims.admin === 0) {
                    res.render("dashboard-admin");
                } else if(userRecord.customClaims.admin === 1){
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
if (upload_host) {
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


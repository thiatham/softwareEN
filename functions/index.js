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
const app = express();

const apiLimiter = rateLimit({
    windowMs: 1 * 60 * 1000, // หน่วย มิลิเซก
    max: 100, // limit each IP to 100 requests per windowMs
    message: "Too many accounts created from this IP, please try again after an hour"
});

app.use(bodyParser.json({
    limit: '5gb'
}));
app.use(bodyParser.urlencoded({
    limit: '50mb',
    extended: true
}));
app.use(express.static('public'));
app.set('view engine', 'ejs');

app.get('/nan', apiLimiter, (req, res) => {
    rb = req.body;
	res.render("nan");
});

app.get('/nort', apiLimiter, (req, res) => {
    rb = req.body;
	res.render("nort");
});

app.get('/tawan', apiLimiter, (req, res) => {
    rb = req.body;
	res.render("tawan");
});

app.get('/totakun', apiLimiter, (req, res) => {
    rb = req.body;
	res.render("totakun");
});

app.get('/waw', apiLimiter, (req, res) => {
    rb = req.body;
	res.render("waw");
});

app.get('/yong', apiLimiter, (req, res) => {
    rb = req.body;
	res.render("yong");
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


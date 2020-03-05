const path = require('path');
const serviceAccount = require("../secret/" + "sfen-e5e15-firebase-adminsdk-tv7og-bca50a08f8.json");
const admin = require("firebase-admin");
const functions = require('firebase-functions');

admin.initializeApp({
    credential: admin.credential.cert(serviceAccount),
    databaseURL: "https://sfen-e5e15.firebaseio.com"
});

var db = admin.database();

module.exports = {
    ifAdmin: function (idToken, callback) {
        admin.auth().verifyIdToken(idToken).then((claims) => {
            callback(claims.admin);
        }).catch((error) => {

        });
    },
    getUserID: function (idToken, callback) {
        admin.auth().verifyIdToken(idToken).then(function (decodedToken) {
            callback(decodedToken.uid)
        }).catch(function (error) {

        });
    },
    getRoleUser: function (newId, callback) {
        admin.auth().setCustomUserClaims(newId, { admin: false }).then((data) => {
            callback(true)
        });
    },
    getAlluser: function (callback) {
        arraylist = [];
        admin.auth().listUsers(1000).then(function (listUsersResult) {
            listUsersResult.users.forEach(function (userRecord) {
                arraylist.push(userRecord.toJSON());
            });
            callback(arraylist)

        }).catch(function (error) {
            console.log('Error listing users:', error);
        });
    },
    getDataformToken: function (idToken, callback) {
        admin.auth().verifyIdToken(idToken).then(
            function (decodedToken) {
                let uid = decodedToken.uid;
                admin.auth().getUser(uid).then(function (userRecord) {
                    callback(userRecord);
                })
            }).catch(function (error) {
            console.log(error.code);
        });
    },
    //member system
    createNewUser : function (email, phoneNumber, password, displayName , callback) {
        admin.auth().createUser({
            email: email,
            emailVerified: false,
            phoneNumber: phoneNumber,
            password: password,
            displayName: displayName,
            photoURL: 'https://work21-587c7.firebaseapp.com/img/user.png',
            disabled: false
        }).then(function (userRecord) {
            admin.auth().setCustomUserClaims(userRecord.uid, {}).then(() => {
                callback({Te:true,uid:userRecord.uid});
            });
        }).catch(function (error) {
            callback({Te:error});
        });
    },
    //role permission
    setRoleper: function (userid, permer, callback) {
        if (parseInt(permer) === 0) {
            admin.auth().setCustomUserClaims(userid, { admin: true }).then(() => {
                return callback(true);
            });
        } else if (parseInt(permer) === 1) {
            admin.auth().setCustomUserClaims(userid, { admin: false }).then(() => {
                return callback(true);
            });
        } else if (parseInt(permer) === 2) {
            admin.auth().setCustomUserClaims(userid, {}).then(() => {
                return callback(true);
            });
        }
    },
};

//zone test mode
if (typeof require != 'undefined' && require.main == module) {
    admin.auth().setCustomUserClaims('7urOelcBbHTh9vm25RHXUUESiQi1', { admin: true }).then(() => {
    });
}

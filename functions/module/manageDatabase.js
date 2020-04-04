const admin = require("firebase-admin");
var db = admin.database();

module.exports = {
    getDataAll : function (years,callback) {
        db.ref("/2560/").once("value",function(snapshot) {
            callback(snapshot.val());
        });
    }
};

const conn = require('./mysqlconfig')

exports.findAll = function(nomtable,callback){
    let sql = "SELECT * FROM " + nomtable;
    conn.query(sql,function(err,rows){
        callback(rows)
    })
}
const conn = require('./mysqlconfig')

exports.findAll = function(nomtable,callback){
    let sql = "SELECT * FROM " + nomtable;
    conn.query(sql,function(err,rows){
        callback(rows)
    })
}

exports.inBdd = function(nomtable){
    let sql = "INSERT INTO " + nomtable + "column1" + "VALUES (?)"
    conn.query(sql, data, function(rows){
        callback(rows)
    })
}
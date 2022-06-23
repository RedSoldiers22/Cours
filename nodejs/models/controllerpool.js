const conn = require('./mysqlconfig')

exports.findAll = function(nomtable,callback){
    let sql = "SELECT * FROM " + nomtable;
    conn.query(sql,function(err,rows){
        callback(rows)
    })
}

exports.addInBdd = function(datas,callback){
    let sql="INSERT INTO continent (nom) VALUES (?)"
        conn.query(sql,[datas.nom],function(err){
            callback(err);
        })    
    }


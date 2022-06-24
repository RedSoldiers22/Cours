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

exports.addUser = function(datas,callback){
    let sql="INSERT INTO utilisateur (username, password) VALUES (?,?)"
        conn.query(sql,[datas.username, datas.password],function(err){
            callback(err);
        })    
    }

// http://localhost:3000/auth
exports.login = function(datas, callback) {
    console.log(datas);
    let sql = "SELECT * FROM utilisateur WHERE username = ? AND password = ?"
    conn.query(sql,[datas.username,datas.password ],function(err, rows){
        if (rows.length > 0) {
            callback(rows[0]);
        } 
        else {
            callback({message:"no"})
        }
    })
}




<?php

namespace mvcobjet\models\daos;
use mvcobjet\models\Entities\Real;

class RealDao extends BaseDao{

    public function creeObj($fields){
        $reals = new Real();
        $reals->setId($fields['id']);
        $reals->setFirstName($fields['first_name']);
        $reals->setLastName($fields['last_name']);
        return $reals;
    }

    public function findTous(){
        $sql = "SELECT * FROM director";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt;
        
        if($result){
            $reals = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
                array_push($reals,$this->creeObj($row));
            }
            return $reals;
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function getReal($id): Real {
        $stmt = $this->db->prepare("SELECT * FROM director WHERE id=:id");
        $res = $stmt->execute([':id'=>$id]);

        if($res){
            return $stmt->fetchObject(Real::class);
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function create($real){
        $sql = "INSERT INTO director (first_name, last_name) VALUES (?,?)";
        $stmt = $this->db->prepare($sql);
        $p = $real->getFirstName();
        $n = $real->getLastName(); 
        $result = $stmt->execute([$p,$n]);
    }
    
    public function update($reals){
        $firstName = $reals['first_name'];
        $lastName = $reals['last_name'];
        $id = $reals['id'];
        $updReq = "UPDATE director SET first_name=:firstName, last_name=:lastName WHERE id=:id";
        $updSql = $this->db->prepare($updReq);
        $updSql->bindParam(':id',$id);
        $updSql->bindParam(':firstName',$firstName);
        $updSql->bindParam(':lastName',$lastName);
        $updSql->execute();
    }

    public function findByMovie($movieId){
        $stmt = $this->db->prepare("
            SELECT director.* 
            FROM director
            INNER JOIN movie ON movie.director_id = director.id
            WHERE movie.id = :movieId");

        $res = $stmt->execute([':movieId' => $movieId]);

        if($res){
            return $stmt->fetchObject(Real::class);
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }
}

?>
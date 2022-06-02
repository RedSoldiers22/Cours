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
        }
    }

    public function getReal($id){
        $stmt = $this->db->prepare("SELECT * FROM director WHERE id=?");
        $res = $stmt->execute([':id'=>$id]);

        if($res){
            return $stmt->fetchObject(Real::class);
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function create($reals){
        $sql = "INSERT INTO director (first_name, last_name) VALUES (?,?)";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$reals['nom'],$reals['prenom']]);
    }
    
    public function update($reals){
        $firstName = $reals['prenom'];
        $lastName = $reals['nom'];
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
            SELECT genre.id, genre.name
            FROM genre
            INNER JOIN movie ON movie.genre_id = genre_id
            WHERE movie.id = :movieId");

        $res = $stmt->execute([':movieId' => $movieId]);

        if($res){
            return $stmt->fetchObject(Actor::class);
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }
}

?>
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
        $sql = "SELECT * FROM director WHERE id=?";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$id]);
        if($result){
            return $stmt->fetchObject(Real::class);
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
}

?>
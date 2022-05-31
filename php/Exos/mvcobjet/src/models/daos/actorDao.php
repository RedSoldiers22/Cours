<?php

namespace mvcobjet\models\daos;
use mvcobjet\models\Entities\Actor;

class ActorDao extends BaseDao{

    public function creeObj($fields){
        $acteur = new Actor();
        $acteur->setId($fields['id']);
        $acteur->setFirstName($fields['first_name']);
        $acteur->setLastName($fields['last_name']);
        return $acteur;
    }

    public function findAll(){
        $sql = "SELECT * FROM actor";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt;
        
        if($result){
            $actors = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
                // $actors = $this->creeObj($row);
                array_push($actors,$this->creeObj($row));
            }
            return $actors;
        }
    }

    public function getActor($id){
        $sql = "SELECT * FROM actor WHERE id=?";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$id]);
        if($result){
            return $stmt->fetchObject(Actor::class);
        }
    }

    public function create($actor){
        $sql = "INSERT INTO actor (first_name, last_name) VALUES (?,?)";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$actor['nom'],$actor['prenom']]);
    }
    
    public function update($actor){
        $sql = "UPDATE actor SET first_name =?, last_name =? WHERE actor.id = $actor";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$actor['nom'],$actor['prenom']]);
    }

}


?>
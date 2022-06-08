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
                array_push($actors,$this->creeObj($row));
            }
            return $actors;
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function getActor($id): Actor {
        $stmt = $this->db->prepare("SELECT * FROM actor WHERE id=:id");
        $res = $stmt->execute([':id'=>$id]);

        if($res){
           return $stmt->fetchObject(Actor::class);
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }   
    }

    public function create(Actor $actor) {
        
        $sql = "INSERT INTO actor (first_name, last_name) VALUES (?,?)";
        $stmt = $this->db->prepare($sql);
        $p = $actor->getFirstName();
        $n = $actor->getLastName(); 
        $result = $stmt->execute([$p,$n]);
    }
    
    public function update($actor){
        $firstName = $actor['first_name'];
        $lastName = $actor['last_name'];
        $id = $actor['id'];
        $updReq = "UPDATE actor SET first_name=:firstName, last_name=:lastName WHERE id=:id";
        $updSql = $this->db->prepare($updReq);
        $updSql->bindParam(':id',$id);
        $updSql->bindParam(':firstName',$firstName);
        $updSql->bindParam(':lastName',$lastName);
        $updSql->execute();
    }

    public function findByMovie($movieId){
        $stmt = $this->db->prepare("
            SELECT actor.* 
            FROM actor 
            INNER JOIN movies_actors ON movies_actors.actor_id = actor.id
            WHERE movies_actors.movie_id = :movieId");

        $res = $stmt->execute([':movieId' => $movieId]);
        if ($res) {
            $actors = [] ;
            while ($row =  $stmt->fetch(\PDO::FETCH_ASSOC)) {
            //    $actors[] =  $this->creeObj($row) ;  
                array_push($actors,$this->creeObj($row));
            }
            return $actors;
        }
    }
}

?>

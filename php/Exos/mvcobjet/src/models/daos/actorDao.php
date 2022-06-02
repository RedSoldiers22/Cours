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

    public function getActor($id): Actor {
        $stmt = $this->db->prepare("SELECT * FROM actor WHERE id=?");
        $res = $stmt->execute([':id'=>$id]);

        if($res){
            return $stmt->fetchObject(Movie::class);
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function create($actor){
        $sql = "INSERT INTO actor (first_name, last_name) VALUES (?,?)";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$actor['prenom'],$actor['nom']]);
    }
    
    public function update($actor){
        $firstName = $actor['prenom'];
        $lastName = $actor['nom'];
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

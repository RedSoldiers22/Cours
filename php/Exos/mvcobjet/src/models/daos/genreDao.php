<?php

namespace mvcobjet\models\daos;
use mvcobjet\models\Entities\Genre;

class GenreDao extends BaseDao{

    public function creeObj($fields){
        $genre = new Genre();
        $genre->setId($fields['id']);
        $genre->setName($fields['name']);
        return $genre;
    }

    public function findTodo(){
        $sql = "SELECT * FROM genre";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt;
        
        if($result){
            $genre = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
                array_push($genre,$this->creeObj($row));
            }
            return $genre;
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function getGenre($id): Genre{
        $stmt = $this->db->prepare("SELECT * FROM genre WHERE id=:id");
        $res = $stmt->execute([':id'=>$id]);

        if($res){
            return $stmt->fetchObject(Genre::class);
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function create($genre){
        $sql = "INSERT INTO genre (name) VALUES (?)";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$genre->getName()]);
    }
    
    public function update($genre){
        $name = $genre['nom'];
        $id = $genre['id'];
        $updReq = "UPDATE genre SET name=:Name WHERE id=:id";
        $updSql = $this->db->prepare($updReq);
        $updSql->bindParam(':id',$id);
        $updSql->bindParam(':Name',$name);
        $updSql->execute();
    }

    public function findByMovie($movieId){
        $stmt = $this->db->prepare("
            SELECT genre.*  
            FROM genre
            INNER JOIN movie ON movie.genre_id = genre.id
            WHERE movie.id = :movieId");

        $res = $stmt->execute([':movieId' => $movieId]);

        if($res){
            return $stmt->fetchObject(Genre::class);
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }
}

?>
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
                // $actors = $this->creeObj($row);
                array_push($genre,$this->creeObj($row));
            }
            return $genre;
        }
    }

    public function getGenre($id){
        $sql = "SELECT * FROM genre WHERE id=?";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$id]);
        if($result){
            return $stmt->fetchObject(Genre::class);
        }
    }

    public function create($genre){
        $sql = "INSERT INTO genre (name) VALUES (?)";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$genre['nom']]);
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
}

?>
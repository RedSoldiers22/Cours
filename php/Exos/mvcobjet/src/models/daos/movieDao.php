<?php

namespace mvcobjet\models\daos;
use mvcobjet\models\Entities\Movie;

class MovieDao extends BaseDao{

    public function creeObj($fields){
        $movie = new Movie();
        $movie->setId($fields['id']);
        $movie->setTitle($fields['title']);
        $movie->setDescription($fields['description']);
        $movie->setDuration($fields['duration']);
        $movie->setDate($fields['date']);
        $movie->setCover_image($fields['cover_image']);
        $movie->setGenre_id($fields['genre_id']);
        $movie->setDirector_id($fields['director_id']);
        return $movie;
    }

    public function findThem(){
        $sql = "SELECT * FROM movie";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt;
        
        if($result){
            $movie = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
                array_push($movie,$this->creeObj($row));
            }
            return $movie;
        }
    }

    public function getMovie($id){
        $sql = "SELECT * FROM movie WHERE id=?";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$id]);
        if($result){
            return $stmt->fetchObject(Movie::class);
        }
    }

    public function create($movie){
        $sql = "INSERT INTO movie (title, description, duration, date, cover_image, genre_id, director_id) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$movie['title'],$movie['description'],$movie['duration'],$movie['date'],$movie['cover_image'],$movie['genre_id'],$movie['director_id']]);
    }
    
    public function update($movie){
        $title = $movie['title'];
        $description = $movie['description'];
        $duration = $movie['duration'];
        $date = $movie['date'];
        $coverImage = $movie['cover_image'];
        $genreId = $movie['genre_id'];
        $directorId = $movie['director_id'];
        $id = $movie['id'];
        // les =:exemple doivent correspondre en bas mais pas obligatoirement en haut
        $updReq = "UPDATE director SET title=:title, description=:description, duration=:duration, date=:date, cover_image=:coverImage, genre_id=:genreId, director_id=:directorId WHERE id=:id";
        $updSql = $this->db->prepare($updReq);
        $updSql->bindParam(':id',$id);
        $updSql->bindParam(':title',$title);
        $updSql->bindParam(':description',$description);
        $updSql->bindParam(':duration',$duration);
        $updSql->bindParam(':date',$date);
        $updSql->bindParam(':coverImage',$coverImage);
        $updSql->bindParam(':genreId',$genreId);
        $updSql->bindParam(':directorId',$directorId);
        $updSql->execute();
    }
}

?>
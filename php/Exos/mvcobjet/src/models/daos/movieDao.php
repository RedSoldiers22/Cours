<?php

namespace mvcobjet\models\daos;
use mvcobjet\models\Entities\Movie;
use mvcobjet\models\Entities\Actor;

use DateTime;

class MovieDao extends BaseDao{

    public function creeObj($fields): Movie {
        $movie = new Movie();
        $movie->setId($fields['id'])
            ->setTitle($fields['title']) 
            ->setDescription($fields['Description']) 
            ->setDate(\DateTime::createFromFormat('Y-m-d', $fields['date'])) 
            ->setCoverImage($fields['cover_image']) 
            ->setDuration($fields['duration']); 
        /*$movie = new Movie();
        $movie->setId($fields['id']);
        $movie->setTitle($fields['title']);
        $movie->setDescription($fields['description']);
        $movie->setDuration($fields['duration']);
        $movie->setDate($fields['date']);
        $movie->setCoverimage($fields['cover_image']);
        $movie->setGenre($fields['genre_id']);
        $movie->setReal($fields['real_id']);*/
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
        $stmt = $this->db->prepare("SELECT * FROM movie WHERE id = :id");
        $res = $stmt->execute([':id'=>$id]);

        if($res){
            return $this->creeObj($stmt->fetch(\PDO::FETCH_ASSOC));
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
        /*$sql = "SELECT * FROM movie WHERE id=?";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$id]);
        if($result){
            return $stmt->fetchObject(Movie::class);*/
        
    }

    public function create($movie){
        $movie = $this->movieDao->creeObj($movie);

        /*$sql = "INSERT INTO movie (title, description, duration, date, cover_image, genre_id, director_id) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$movie['title'],$movie['description'],$movie['duration'],$movie['date'],$movie['cover_image'],$movie['genre_id'],$movie['director_id']]);*/
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
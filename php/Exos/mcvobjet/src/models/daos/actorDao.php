<?php

use mcvobjet\models\entities;

class ActorDao extends BaseDao{
    public function findAll(){
        $sql = "SELECT * FROM Actor";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        if($result){
            $actors = [];
            while ($row = $result->fetch(\PDO::FETCH_ASSOC)){
                // $actors = $this->creeObj($row);
                array_push($actors,$thise->creeObj($row));
            }
            return $actors;
        }
    }

    public function creeObj($row){
        $acteur = new Actor();
        $acteur->setId($fields['id']);
        $acteur->setFirstName($fields['firstName']);
        $acteur->setLasttName($fields['lasttName']);
    }

}


?>
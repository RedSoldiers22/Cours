<?php
use PHPUnit\Framework\TestCase;
use mvcobjet\models\daos\ActorDao; 
use mvcobjet\models\entities\Actor; 


class TestActor extends TestCase{

    private $actorDao;
    private $actor;

    protected function setUp():void{
        $this->actorDao = new ActorDao();
        $this->actor = new Actor();
    }
    
    public function testGetActor():void{
        $result = $this->actorDao->getActor(1);
        $this->assertIsObject($result);
    }

    public function testFindAll():void{
        $result = $this->actorDao->findAll();
        $this->assertIsArray($result);
    }

    public function testCreate():void{
        $actor = $this->actor;
        $actor->setFirstName("test");
        $actor->setLastName("test");

        $result = $this->actorDao->create($actor);
        $this->assertNull($result);
    }

}


?>
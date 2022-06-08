<?php
use PHPUnit\Framework\TestCase;
use mvcobjet\models\daos\RealDao; 
use mvcobjet\models\entities\Real; 


class TestReal extends TestCase{

    private $realDao;
    private $real;

    protected function setUp():void{
        $this->realDao = new RealDao();
        $this->real = new Real();
    }
    
    public function testGetReal():void{
        $result = $this->realDao->getReal(1);
        $this->assertIsObject($result);
    }

    public function testFindAll():void{
        $result = $this->realDao->findTous();
        $this->assertIsArray($result);
    }

    public function testCreate():void{
        $real = $this->real;
        $real->setFirstName("test");
        $real->setLastName("test");

        $result = $this->realDao->create($real);
        $this->assertNull($result);
    }

}


?>
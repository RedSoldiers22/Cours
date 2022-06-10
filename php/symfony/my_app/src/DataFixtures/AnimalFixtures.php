<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $a1 = new Animal();
        $a1->setNom("Chien")
           ->setDescription("Animal domestique")
           ->setImage("chien.jpg")
           ->setPoids("20");
        $manager->persist($a1);  
        $a2 = new Animal();
        $a2->setNom("Cochon")
           ->setDescription("Animal d'élevage")
           ->setImage("cochon.jpg")
           ->setPoids("35");
        $manager->persist($a2);  
        $a3 = new Animal();
        $a3->setNom("Panda Roux")
           ->setDescription("Animal amical")
           ->setImage("panda.jpg")
           ->setPoids("13");
        $manager->persist($a3);  
        $a4 = new Animal();
        $a4->setNom("Chat")
           ->setDescription("Animal indépendant")
           ->setImage("chat.jpg")
           ->setPoids("10");
        $manager->persist($a4);  
        $a4 = new Animal();
        $a4->setNom("Léopard")
           ->setDescription("Animal pressé")
           ->setImage("leopard.jpg")
           ->setPoids("50");
        $manager->persist($a4);  
        
        $manager->flush();
    }
}

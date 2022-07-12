<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Inc;
use App\Entity\Types;
use App\Entity\Pilote;
use App\Entity\Produits;

class ProduitsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
      
        // ------------------------------Inc--------------------------------------------------

        $i1 = new Inc();
        $i1->setNom("Hériados Corp");
        $manager->persist($i1);

        $i2 = new Inc();
        $i2->setNom("Conglomérat Askanien");
        $manager->persist($i2);

        $i3 = new Inc();
        $i3->setNom("ASKAR");
        $manager->persist($i3);

        $i4 = new Inc();
        $i4->setNom("Armée d'Héctélios");
        $manager->persist($i4);

        $i5 = new Inc();
        $i5->setNom("ASKERI Inc");
        $manager->persist($i5);

        $i6 = new Inc();
        $i6->setNom("Compagnies Blanches");
        $manager->persist($i6);

        $i7 = new Inc();
        $i7->setNom("Hekterias Corp");
        $manager->persist($i7);

        $i7 = new Inc();
        $i7->setNom("BARRELIOR Inc");
        $manager->persist($i7);

        $i8 = new Inc();
        $i8->setNom("KOSKO");
        $manager->persist($i8);

        $i9 = new Inc();
        $i9->setNom("Armée Arkonin");
        $manager->persist($i9);

// ------------------------------Types--------------------------------------------------

        $t1 = new Types();
        $t1->setType("Combat");
        $manager->persist($t1);

        $t2 = new Types();
        $t2->setType("Soutien");
        $manager->persist($t2);

        $t3 = new Types();
        $t3->setType("Munitions");
        $manager->persist($t3);

// ------------------------------Pilote--------------------------------------------------

        $p1 = new Pilote();
        $p1->setNombre(1);
        $manager->persist($p1);

        $p2 = new Pilote();
        $p2->setNombre(2);
        $manager->persist($p2);

        $p3 = new Pilote();
        $p3->setNombre(3);
        $manager->persist($p3);
    
        // ------------------------------Produits--------------------------------------------------

        $pr1 = new Produits();
        $pr1->setNom("HEKTOR IV")
           ->setImg("slide1mini.jpg")
           ->setDescription("Lorem")
           ->setPoids(80)
           ->setPrix(147000)
           ->setInc($i1)
           ->setType($t1)
           ->setPilote($p1);
        $manager->persist($pr1);

        $pr2 = new Produits();
        $pr2->setNom("ORSILENT II")
           ->setImg("slide2mini.jpg")
           ->setDescription("Lorem")
           ->setPoids(70)
           ->setPrix(185000)
           ->setInc($i2)
           ->setType($t1)
           ->setPilote($p1);
        $manager->persist($pr2);

        $pr1 = new Produits();
        $pr1->setNom("THUNDORN AC-8")
           ->setImg("slide3mini.jpg")
           ->setDescription("Lorem")
           ->setPoids(60)
           ->setPrix(129000)
           ->setInc($i3)
           ->setType($t1)
           ->setPilote($p2);
        $manager->persist($p3);

        $manager->flush();
    }
}

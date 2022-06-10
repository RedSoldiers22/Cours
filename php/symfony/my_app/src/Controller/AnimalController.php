<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\AnimalType;
use Doctrine\ORM\EntityManagerInterface;

class AnimalController extends AbstractController
{
    #[Route('/', name: 'amimaux')]


    public function index(AnimalRepository $repository)
    {
        $animaux = $repository->findAll();
        return $this->render('animal/index.html.twig', [
            "animaux" => $animaux,
        ]);
    }

    #[Route('/animal/{id}', name: 'unAnimal')]


    public function afficheAnimal($id, AnimalRepository $repository)
    {
        $animaux = $repository->find($id);
        return $this->render('animal/affani.html.twig', [
            "animal" => $animaux,
        ]);
    }

    #[Route('/poids/{poids}', name: 'triPoids')]


    public function triPoids(AnimalRepository $rep, $poids): Response
    {
        $animaux = $rep->findByPoidsUnder($poids);
        return $this->render('animal/index.html.twig', [
            "animaux" => $animaux,
        ]);
    }

    #[Route('/animalcreation', name:'creation')]
    #[Route('/modif/{id}', name: 'modif')]

    public function modifAnimal(Animal $animal=null,Request $request, EntityManagerInterface $om)
    {
        if (!$animal) {
            $animal = new Animal();
        }
        $form = $this->createForm(AnimalType::class,$animal);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $om->persist($animal);
            $om->flush();
            $this->addFlash('success', "L'action a été effectué");
            return $this->redirectToRoute("amimaux");
        }

        return $this->render('animal/modifani.html.twig',[
            "animal" => $animal,
            "form" => $form->createView()
        ]);

    }
}

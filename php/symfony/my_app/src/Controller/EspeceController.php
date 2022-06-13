<?php

namespace App\Controller;

use App\Entity\Espece;
use App\Repository\EspeceRepository;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\EspeceType;
use Doctrine\ORM\EntityManagerInterface;

class AnimalController extends AbstractController
{
    #[Route('/', name: 'amimaux')]


    public function index(EspeceRepository $repository)
    {
        $especes = $repository->findAll();
        return $this->render('espece/index.html.twig', [
            "espece" => $especes,
        ]);
    }

    #[Route('/espece/{id}', name: 'uneEspece')]


    public function afficheEspece($id, EspeceRepository $repository)
    {
        $especes = $repository->find($id);
        return $this->render('espece/affesp.html.twig', [
            "espece" => $especes,
        ]);
    }

    #[Route('/poids/{poids}', name: 'triPoids')]


    public function triPoids(EspeceRepository $rep, $poids): Response
    {
        $especes = $rep->findByPoidsUnder($poids);
        return $this->render('espece/index.html.twig', [
            "espece" => $especes,
        ]);
    }

    #[Route('/espececreation', name:'creation')]
    #[Route('/modif/{id}', name: 'modif')]

    public function modifEspece(Espece $espece=null,Request $request, EntityManagerInterface $om)
    {
        if (!$espece) {
            $espece = new Espece();
        }
        $form = $this->createForm(EspeceType::class,$espece);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $om->persist($espece);
            $om->flush();
            $this->addFlash('success', "L'action a été effectué");
            return $this->redirectToRoute("amimaux");
        }

        return $this->render('espece/modifesp.html.twig',[
            "espece" => $espece,
            "form" => $form->createView()
        ]);

    }
}

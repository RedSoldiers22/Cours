<?php

namespace App\Controller;
use App\Repository\ProduitsRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ProduitType;
use Doctrine\ORM\EntityManagerInterface;

class ProduitsController extends AbstractController
{
    #[Route('/', name: 'produits')]


    public function index(ProduitsRepository $repository)
    {
        $produits = $repository->findAll();
        return $this->render('produits/index.html.twig', [
            'produits' => $produits,
        ]);
    }
}

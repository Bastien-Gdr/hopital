<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/', name: 'app_default_')]
class DefaultController extends AbstractController
{
#[Route('', name: 'home')]
    public function homeAction(): Response
    {
        return  $this->render('base.html.twig');
    }
    #[Route('/formulaire', name: 'formulaire')]
    public function aboutAction(): Response
    {
        return  $this->render('formulaire.html.twig');
    }

    #[Route('/pro', name: 'pro')]
    public function aboutA(): Response
    {
        return  $this->render('pro.html.twig');
    }

    #[Route('/index', name: 'index')]
    public function index(): Response
    {
        return  $this->render('index.html.twig');
    }

}
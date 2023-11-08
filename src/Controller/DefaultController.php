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
    #[Route('/formulaire', name: 'about')]
    public function aboutAction(): Response
    {
        return  $this->render('formulaire.html.twig');
    }

}
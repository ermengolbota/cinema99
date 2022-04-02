<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class PortadaController extends AbstractController
{
/**
* @Route("/Portada")
*/
    public function number(): Response
    {
        $number = random_int(0, 100);
        
        return new Response(
            '<html><body>
            <p>'.$_ENV['DB_HOST'].'
            </p>
            <h1>
            Lucky number: '.$number.'
            </h1></body></html>'
        );
    }
}
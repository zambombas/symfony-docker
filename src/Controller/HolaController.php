<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HolaController
{
    #[Route('/hola')]
    public function index(): Response
    {
        return new Response(
            '<html><body>Bienvenido Hola</body></html>'
        );
    }
}
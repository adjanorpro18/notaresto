<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RestaurantPictureController extends AbstractController
{
    /**
     * @Route("/restaurant/picture", name="restaurant_picture")
     */
    public function index(): Response
    {
        return $this->render('restaurant_picture/index.html.twig', [
            'controller_name' => 'RestaurantPictureController',
        ]);
    }
}

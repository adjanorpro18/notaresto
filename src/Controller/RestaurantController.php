<?php

namespace App\Controller;

use App\Entity\Restaurant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RestaurantController extends AbstractController
{
    /**
     * Affiche la liste des restaurants
     * @Route("/restaurant", name="restaurant_index", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('restaurant/index.html.twig', [
            'controller_name' => 'RestaurantController',
        ]);
    }

    /**
     * Affiche un restaurant
     * @Route("/restaurant/{restaurant}", name="restaurant_show", methods={"GET"}, requirements={"restaurant" = "\d+"})
     * @param restaurant $restaurant
     */
    public function show(restaurant $restaurant)
    {
    }

    /**
     * Affiche le formulaire de creation de restaurant
     * @Route("/restaurant/new", name="restaurant_new", methods={"GET"})
     */
    public function new()
    {
    }


    /**
     * Traite le formulaire de creation de restaurant
     * @Route("/restaurant", name="restaurant_create", methods={"POST"})
     */
    public function create()
    {
    }

    /**
     * Affiche le formulaire d'édition d'une restaurant (GET)
     * Traitele formulaire d'édition d'une restaurant (POST)
     * @Route("/restaurant/{restaurant}/edit", name="restaurant_edit", methods={"GET", "POST"})
     * @param restaurant $restaurant
     */
    public function edit(restaurant $restaurant)
    {
    }

    /**
     * Supprime la ville
     * @Route("/restaurant/{restaurant}", name="restaurant_delete", methods={"DELETE"})
     * @param restaurant $restaurant
     */
    public function delete(restaurant $restaurant)
    {
    }
}

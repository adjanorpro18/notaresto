<?php

namespace App\Controller;

use App\Entity\City;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CityController extends AbstractController
{
    /**
     * Affiche la liste des villes
     * @Route("/city", name="city_index", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('city/index.html.twig', [
            'controller_name' => 'CityController',
        ]);
    }

    /**
     * Affiche une ville
     * @Route("/city/{city}", name="city_show", methods={"GET"}, requirements={"city" = "\d+"})
     * @param City $city
     */
    public function show(City $city)
    {
    }

    /**
     * Affiche le formulaire de creation de la ville
     * @Route("/city/new", name="city_new", methods={"GET"})
     */
    public function new()
    {
    }


    /**
     * Traite le formulaire de creation de la ville
     * @Route("/city", name="city_create", methods={"POST"})
     */
    public function create()
    {
    }

    /**
     * Affiche le formulaire d'édition d'une ville (GET)
     * Traitele formulaire d'édition d'une ville (POST)
     * @Route("/city/{city}/edit", name="city_edit", methods={"GET", "POST"})
     * @param City $City
     */
    public function edit(City $city)
    {
    }

    /**
     * Supprime la ville
     * @Route("/city/{city}", name="city_delete", methods={"DELETE"})
     * @param City $city
     */
    public function delete(City $city)
    {
    }
}

<?php

namespace App\Controller;

use App\Entity\Restaurant;
use App\Entity\Review;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/app", name="app_index", methods={"GET"})
     */
    public function index(): Response
    {
        //dd(
        // $this->getDoctrine()->getRepository(Review::class)->findBestTenRatings()
        //);

        //on recupère les données de notre nouvelle methode array_map

        $tenBestRestaurantsId = $this->getDoctrine()->getRepository(Review::class)->findBestTenRatings();

        $tenBestRestaurants = array_map(function ($data) {
            return $this->getDoctrine()->getRepository(Restaurant::class)->find($data['restaurantId']);
        }, $tenBestRestaurantsId);


        return $this->render('app/index.html.twig', [
            //'restaurants' => $this->getDoctrine()->getRepository(Restaurant::class)->findLastTenRestaurants(),
            'restaurants' => $tenBestRestaurants,
        ]);
    }

    /**
     * @Route ("/search", name="app_search", methods={"GET"})
     * @param Request $request
     */
    public function search(Request $request)
    {
    }
}

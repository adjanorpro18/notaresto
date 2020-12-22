<?php

namespace App\Controller;

use App\Entity\Restaurant;
use App\Form\RestaurantType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RestaurantController extends AbstractController
{
    /**
     * Affiche la liste des restaurants
     * @Route("/restaurant", name="restaurant_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        //Tri qui permet de récuperer les données selon le filtre 

        $restaurants = $this->getDoctrine()->getRepository(Restaurant::class)->findBy([], ['name' => 'ASC']);

        $restaurants = $paginator->paginate($restaurants, $request->query->getInt('page', 1), 10);


        return $this->render('restaurant/index.html.twig', [
            'restaurants' => $restaurants,
        ]);
    }

    /**
     * Affiche un restaurant
     * @Route("/restaurant/{restaurant}", name="restaurant_show", methods={"GET"}, requirements={"restaurant" = "\d+"})
     * @param Restaurant $restaurant
     * @return Response
     */
    public function show(Restaurant $restaurant)
    {
        return $this->render('restaurant/show.html.twig', [
            'restaurant' => $restaurant
        ]);
    }

    /**
     * Affiche le formulaire de creation de restaurant
     * @Route("/restaurant/new", name="restaurant_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityMananger)
    {
        $restaurant = new Restaurant();
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $restaurant = $form->getData();
            // On veut que le user du restaurant soit le user connecté (on l'a grâce à $this->getUser())
            $restaurant->setUser($this->getUser());

            $entityMananger->persist($restaurant);
            $entityMananger->flush();

            return $this->redirectToRoute('restaurant_index');
        }


        return $this->render('restaurant/form.html.twig', [
            'form' => $form->createView()
        ]);
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
     * Supprime le restaurant
     * @Route("/restaurant/{restaurant}", name="restaurant_delete", methods={"DELETE"})
     * @param restaurant $restaurant
     */
    public function delete(restaurant $restaurant)
    {
    }
}

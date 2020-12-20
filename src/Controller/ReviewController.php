<?php

namespace App\Controller;

use App\Entity\Review;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReviewController extends AbstractController
{
    /**
     * @Route("/review", name="review")
     */
    public function index(): Response
    {
        return $this->render('review/index.html.twig', [
            'controller_name' => 'ReviewController',
        ]);
    }
    /**
     * Affiche une review
     * @Route("/review/{review}", name="review_show", methods={"GET"}, requirements={"review" = "\d+"})
     * @param review $review
     */
    public function show(review $review)
    {
    }

    /**
     * Affiche le formulaire de creation de review
     * @Route("/review/new", name="review_new", methods={"GET"})
     */
    public function new()
    {
    }


    /**
     * Traite le formulaire de creation de review
     * @Route("/review", name="review_create", methods={"POST"})
     */
    public function create()
    {
    }

    /**
     * Affiche le formulaire d'édition d'une review (GET)
     * Traitele formulaire d'édition d'une review (POST)
     * @Route("/review/{review}/edit", name="review_edit", methods={"GET", "POST"})
     * @param review $review
     */
    public function edit(review $review)
    {
    }

    /**
     * Supprime la review
     * @Route("/review/{review}", name="review_delete", methods={"DELETE"})
     * @param review $review
     */
    public function delete(review $review)
    {
    }
}

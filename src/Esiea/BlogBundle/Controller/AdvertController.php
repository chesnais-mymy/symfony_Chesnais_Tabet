<?php
/**
 * Created by PhpStorm.
 * User: mimi
 * Date: 17/11/2015
 * Time: 11:23
 */
// src/Esiea/BlogBundle/Controller/AdvertController.php

namespace Esiea\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AdvertController extends Controller
{
    public function indexAction($page)
    {

        // nous avons plus d'une page.
        if ($page < 1) {
            // On déclenche une exception NotFoundHttpException, cela va afficher
            // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
            throw new NotFoundHttpException('Page "' . $page . '" inexistante.');
        }

        // Ici, on récupérera la liste des annonces, puis on la passera au template


        // Mais pour l'instant, on ne fait qu'appeler le template
        return $this->render('EsieaBlogBundle:Advert:index.html.twig', array('nom' => 'mimi'));

        # $content = $this->get('templating')->render('EsieaBlogBundle:Advert:index.html.twig', array('nom'=> 'mimi'));
        #return new Response($content);
    }

    public function viewAction($id)
    {
        //on récupére l'annonce n°id
        $content = $this->get('templating')->render('EsieaBlogBundle:Advert:view.html.twig', array('id' => $id));
        return new Response($content);
    }


    public function addAction(Request $request)
    {

        // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
        if ($request->isMethod('POST')) {
            // Ici, on s'occupera de la création et de la gestion du formulaire

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            // Puis on redirige vers la page de visualisation de cettte annonce
            return $this->redirectToRoute('esiea_blog_view', array('id' => 5));
        }

        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('EsieaBlogBundle:Advert:add.html.twig');


    }

    public function editAction($id, Request $request)
    {


        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

            return $this->redirectToRoute('esiea_blog_view', array('id' => 5));
        }

        return $this->render('EsieaBlogBundle:Advert:edit.html.twig');

    }

    public function deleteAction($id)
    {
        // Ici, on récupérera l'annonce correspondant à $id

        // Ici, on gérera la suppression de l'annonce en question

        return $this->render('EsieaBlogBundle:Advert:delete.html.twig');
    }

}


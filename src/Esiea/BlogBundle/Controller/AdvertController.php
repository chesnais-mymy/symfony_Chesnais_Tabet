<?php
/**
 * Created by PhpStorm.
 * User: mimi
 * Date: 17/11/2015
 * Time: 11:23
 */
// src/Esiea/BlogBundle/Controller/AdvertController.php

namespace Esiea\BlogBundle\Controller;

use Esiea\BlogBundle\Entity\Advert;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AdvertController extends Controller
{
    public function indexAction($page)
    {

        if ($page < 1) {
            throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        // Pour récupérer la liste de toutes les annonces : on utilise findAll()
        $listAdverts = $this->getDoctrine()
            ->getManager()
            ->getRepository('EsieaBlogBundle:Advert')
            ->findAll()
        ;

        // L'appel de la vue ne change pas
        return $this->render('EsieaBlogBundle:Advert:index.html.twig', array(
            'listAdverts' => $listAdverts
        ));


    }


    public function viewAction($id)
    {


        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // Pour récupérer une annonce unique : on utilise find()
        $advert = $em->getRepository('EsieaBlogBundle:Advert')->find($id);

        // On vérifie que l'annonce avec cet id existe bien
        if ($advert === null) {
            throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
        }

        // On récupère la liste des advertSkill pour l'annonce $advert
        $listAdvertSkills = $em->getRepository('EsieaBlogsBundle:AdvertSkill')->findByAdvert($advert);

        // Puis modifiez la ligne du render comme ceci, pour prendre en compte les variables :
        return $this->render('EsieaBlogBundle:Advert:view.html.twig', array(
            'advert'           => $advert,
            'listAdvertSkills' => $listAdvertSkills,
        ));


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


        // On crée un objet Advert
    $advert = new Advert();

    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder('form', $advert);

    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $formBuilder
        ->add('date',      'date')
        ->add('titre',     'text')
        ->add('ingredients', 'text')
        ->add('content',   'text')
        ->add('auteur',    'text')
    ;
    // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard

    // À partir du formBuilder, on génère le formulaire
    $form = $formBuilder->getForm();

    // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule
    return $this->render('EsieaBlogBundle:Advert:add.html.twig', array(
        'form' => $form->createView(),
    ));

    }

    public function editAction($id)
    {

        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // On récupère l'entité correspondant à l'id $id
        $advert = $em->getRepository('EsieaBlogBundle:Advert')->find($id);

        // Si l'annonce n'existe pas, on affiche une erreur 404
        if ($advert == null) {
            throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
        }

        // Ici, on s'occupera de la création et de la gestion du formulaire

        return $this->render('EsieaBlogBundle:Advert:edit.html.twig', array(
            'advert' => $advert
        ));


    }

    public function deleteAction($id, Request $request)
    {

        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // On récupère l'entité correspondant à l'id $id
        $advert = $em->getRepository('EsieaBlogBundle:Advert')->find($id);

        // Si l'annonce n'existe pas, on affiche une erreur 404
        if ($advert == null) {
            throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
        }

        if ($request->isMethod('POST')) {
            // Si la requête est en POST, on deletea l'article

            $request->getSession()->getFlashBag()->add('info', 'Annonce bien supprimée.');

            // Puis on redirige vers l'accueil
            return $this->redirect($this->generateUrl('esiea_blog_home'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de delete
        return $this->render('EsieaBlogBundle:Advert:delete.html.twig', array(
            'advert' => $advert
        ));


    }

    public function menuAction($limit = 4)
    {

        $listAdverts = $this->getDoctrine()
            ->getManager()
            ->getRepository('EsieaBlogBundle:Advert')
            ->findBy(
                array(),                 // Pas de critère
                array('date' => 'desc'), // On trie par date décroissante
                $limit,                  // On sélectionne $limit annonces
                0                        // À partir du premier
            );

        return $this->render('EsieaBlogBundle:Advert:menu.html.twig', array(
            'listAdverts' => $listAdverts
        ));

    }

}


<?php
/**
 * Created by PhpStorm.
 * User: mimi
 * Date: 17/11/2015
 * Time: 11:23
 */
// src/Esiea/BlogBundle/Controller/AdvertController.php

namespace Esiea\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('EsieaBlogBundle:Advert:index.html.twig');
        return new Response($content);

    }
}


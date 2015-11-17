<?php

namespace Esiea\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EsieaBlogBundle:Default:index.html.twig');
    }

 public function viewAction($id)
  {
    return $this->render('EsieaBlogBundle:Default:view.html.twig',array('id'  => $id));
  }

 public function editAction($id)
  {
    return $this->render('EsieaBlogBundle:Default:edit.html.twig');
  }


}

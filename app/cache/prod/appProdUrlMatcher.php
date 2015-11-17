<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // esiea_blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esiea_blog_homepage');
            }

            return array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'esiea_blog_homepage',);
        }

        if (0 === strpos($pathinfo, '/hello')) {
            // esiea_blog_view
            if (0 === strpos($pathinfo, '/hello/mimi') && preg_match('#^/hello/mimi/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_blog_view')), array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::viewAction',));
            }

            // esiea_blog_edit
            if (0 === strpos($pathinfo, '/hello/edit') && preg_match('#^/hello/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_blog_edit')), array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::editAction',));
            }

            // esiea_blog_delete
            if (0 === strpos($pathinfo, '/hello/delete') && preg_match('#^/hello/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_blog_delete')), array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::deleteAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

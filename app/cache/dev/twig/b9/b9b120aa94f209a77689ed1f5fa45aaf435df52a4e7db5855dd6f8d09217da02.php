<?php

/* EsieaBlogBundle:Advert:add.html.twig */
class __TwigTemplate_60d2ecb7e3aa8a6cdd578587d028e844b924cb76d69d0bb2fa0c1dc0f500a18d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("EsieaBlogBundle::layout.html.twig", "EsieaBlogBundle:Advert:add.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'esieablog_body' => array($this, 'block_esieablog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EsieaBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cebe6eb3c061783d756e573c531dfd4ca3183af477a8dec9bf59a1188e4d3413 = $this->env->getExtension("native_profiler");
        $__internal_cebe6eb3c061783d756e573c531dfd4ca3183af477a8dec9bf59a1188e4d3413->enter($__internal_cebe6eb3c061783d756e573c531dfd4ca3183af477a8dec9bf59a1188e4d3413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cebe6eb3c061783d756e573c531dfd4ca3183af477a8dec9bf59a1188e4d3413->leave($__internal_cebe6eb3c061783d756e573c531dfd4ca3183af477a8dec9bf59a1188e4d3413_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e56918aeb6b91efd6a1bc348c528b495da2e5f7c8845633126b1a6f9f440fd07 = $this->env->getExtension("native_profiler");
        $__internal_e56918aeb6b91efd6a1bc348c528b495da2e5f7c8845633126b1a6f9f440fd07->enter($__internal_e56918aeb6b91efd6a1bc348c528b495da2e5f7c8845633126b1a6f9f440fd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ajouter une nouvelle annonce ";
        
        $__internal_e56918aeb6b91efd6a1bc348c528b495da2e5f7c8845633126b1a6f9f440fd07->leave($__internal_e56918aeb6b91efd6a1bc348c528b495da2e5f7c8845633126b1a6f9f440fd07_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_9b6e95742f9943b8d3148643852a3806399db647689c1259034cac37b974dfbe = $this->env->getExtension("native_profiler");
        $__internal_9b6e95742f9943b8d3148643852a3806399db647689c1259034cac37b974dfbe->enter($__internal_9b6e95742f9943b8d3148643852a3806399db647689c1259034cac37b974dfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 10
        echo "

    <h2>Ajouter une annonce</h2>

    ";
        // line 14
        echo twig_include($this->env, $context, "EsieaBlogBundle:Advert:formulaire.html.twig");
        echo "

    <p>

        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("esiea_blog_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste des annonces
        </a>

    </p>

";
        
        $__internal_9b6e95742f9943b8d3148643852a3806399db647689c1259034cac37b974dfbe->leave($__internal_9b6e95742f9943b8d3148643852a3806399db647689c1259034cac37b974dfbe_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  59 => 14,  53 => 10,  47 => 9,  35 => 7,  11 => 4,);
    }
}
/* {# src/Esiea/BlogBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* */
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %} Ajouter une nouvelle annonce {% endblock %}*/
/* */
/* {% block esieablog_body %}*/
/* */
/* */
/*     <h2>Ajouter une annonce</h2>*/
/* */
/*     {{ include("EsieaBlogBundle:Advert:formulaire.html.twig") }}*/
/* */
/*     <p>*/
/* */
/*         <a href="{{ path('esiea_blog_home') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste des annonces*/
/*         </a>*/
/* */
/*     </p>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */

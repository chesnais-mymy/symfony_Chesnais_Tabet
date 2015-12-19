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
        $__internal_f72a74ef8c221da65938bf2ab8452dfb90e37801ace1610a38e7bdbb549b0e5b = $this->env->getExtension("native_profiler");
        $__internal_f72a74ef8c221da65938bf2ab8452dfb90e37801ace1610a38e7bdbb549b0e5b->enter($__internal_f72a74ef8c221da65938bf2ab8452dfb90e37801ace1610a38e7bdbb549b0e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f72a74ef8c221da65938bf2ab8452dfb90e37801ace1610a38e7bdbb549b0e5b->leave($__internal_f72a74ef8c221da65938bf2ab8452dfb90e37801ace1610a38e7bdbb549b0e5b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8f361f41d026254360b9642e45a47d6e288c669e1cce19e0c168b175e169467 = $this->env->getExtension("native_profiler");
        $__internal_c8f361f41d026254360b9642e45a47d6e288c669e1cce19e0c168b175e169467->enter($__internal_c8f361f41d026254360b9642e45a47d6e288c669e1cce19e0c168b175e169467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ajouter une nouvelle annonce ";
        
        $__internal_c8f361f41d026254360b9642e45a47d6e288c669e1cce19e0c168b175e169467->leave($__internal_c8f361f41d026254360b9642e45a47d6e288c669e1cce19e0c168b175e169467_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_6750532705f1081f5446c2aa883ac1a8168f336e976afa88ed586e37fc0f4297 = $this->env->getExtension("native_profiler");
        $__internal_6750532705f1081f5446c2aa883ac1a8168f336e976afa88ed586e37fc0f4297->enter($__internal_6750532705f1081f5446c2aa883ac1a8168f336e976afa88ed586e37fc0f4297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 10
        echo "

    <h2>Ajouter une annonce</h2>

    ";
        // line 14
        echo twig_include($this->env, $context, "EsieaBlogBundle:Advert:formulaire.html.twig");
        echo "

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.

        <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("esiea_blog_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste des annonces
        </a>

    </p>

";
        
        $__internal_6750532705f1081f5446c2aa883ac1a8168f336e976afa88ed586e37fc0f4297->leave($__internal_6750532705f1081f5446c2aa883ac1a8168f336e976afa88ed586e37fc0f4297_prof);

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
        return array (  68 => 20,  59 => 14,  53 => 10,  47 => 9,  35 => 7,  11 => 4,);
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
/*         Attention : cette annonce sera ajoutée directement*/
/*         sur la page d'accueil après validation du formulaire.*/
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

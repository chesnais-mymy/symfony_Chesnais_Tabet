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
        $__internal_890e4ea3b656efdc4ac6a963064d4cbbf6c25b52f65ca801697cbad5849d2252 = $this->env->getExtension("native_profiler");
        $__internal_890e4ea3b656efdc4ac6a963064d4cbbf6c25b52f65ca801697cbad5849d2252->enter($__internal_890e4ea3b656efdc4ac6a963064d4cbbf6c25b52f65ca801697cbad5849d2252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_890e4ea3b656efdc4ac6a963064d4cbbf6c25b52f65ca801697cbad5849d2252->leave($__internal_890e4ea3b656efdc4ac6a963064d4cbbf6c25b52f65ca801697cbad5849d2252_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2663fe9fc160d5215c9a78aef5f5aa9f60497f1cc2898c90b4c190e0fd0e91a6 = $this->env->getExtension("native_profiler");
        $__internal_2663fe9fc160d5215c9a78aef5f5aa9f60497f1cc2898c90b4c190e0fd0e91a6->enter($__internal_2663fe9fc160d5215c9a78aef5f5aa9f60497f1cc2898c90b4c190e0fd0e91a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ajouter une nouvelle annonce ";
        
        $__internal_2663fe9fc160d5215c9a78aef5f5aa9f60497f1cc2898c90b4c190e0fd0e91a6->leave($__internal_2663fe9fc160d5215c9a78aef5f5aa9f60497f1cc2898c90b4c190e0fd0e91a6_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_6141508ba68d9c048db0eb6f02fe7331c8a085c72b163d7fda57dc1b33ac121d = $this->env->getExtension("native_profiler");
        $__internal_6141508ba68d9c048db0eb6f02fe7331c8a085c72b163d7fda57dc1b33ac121d->enter($__internal_6141508ba68d9c048db0eb6f02fe7331c8a085c72b163d7fda57dc1b33ac121d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

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
        
        $__internal_6141508ba68d9c048db0eb6f02fe7331c8a085c72b163d7fda57dc1b33ac121d->leave($__internal_6141508ba68d9c048db0eb6f02fe7331c8a085c72b163d7fda57dc1b33ac121d_prof);

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
/*         */
/*     </p>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */

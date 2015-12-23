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
        $__internal_1a36354a9f98e875a9aa6be668b19bc159a69d83e5e36f5af49908a2d068f90d = $this->env->getExtension("native_profiler");
        $__internal_1a36354a9f98e875a9aa6be668b19bc159a69d83e5e36f5af49908a2d068f90d->enter($__internal_1a36354a9f98e875a9aa6be668b19bc159a69d83e5e36f5af49908a2d068f90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a36354a9f98e875a9aa6be668b19bc159a69d83e5e36f5af49908a2d068f90d->leave($__internal_1a36354a9f98e875a9aa6be668b19bc159a69d83e5e36f5af49908a2d068f90d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5563b50348337e8cf1c8242dd629ad33a2a83a62874ddad36084f13f2df7e080 = $this->env->getExtension("native_profiler");
        $__internal_5563b50348337e8cf1c8242dd629ad33a2a83a62874ddad36084f13f2df7e080->enter($__internal_5563b50348337e8cf1c8242dd629ad33a2a83a62874ddad36084f13f2df7e080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ajouter une nouvelle annonce ";
        
        $__internal_5563b50348337e8cf1c8242dd629ad33a2a83a62874ddad36084f13f2df7e080->leave($__internal_5563b50348337e8cf1c8242dd629ad33a2a83a62874ddad36084f13f2df7e080_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_ca1d617e2c66ba8322e9ccd4d8bcae46cf69d4c336e7b5e4c6c23cb958d5de37 = $this->env->getExtension("native_profiler");
        $__internal_ca1d617e2c66ba8322e9ccd4d8bcae46cf69d4c336e7b5e4c6c23cb958d5de37->enter($__internal_ca1d617e2c66ba8322e9ccd4d8bcae46cf69d4c336e7b5e4c6c23cb958d5de37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

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
        
        $__internal_ca1d617e2c66ba8322e9ccd4d8bcae46cf69d4c336e7b5e4c6c23cb958d5de37->leave($__internal_ca1d617e2c66ba8322e9ccd4d8bcae46cf69d4c336e7b5e4c6c23cb958d5de37_prof);

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

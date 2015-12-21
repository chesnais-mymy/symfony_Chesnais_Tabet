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
        $__internal_cd04b8419ec64641a58669bceb67cd31a99bafd7bbd6eada4b86737f121a501f = $this->env->getExtension("native_profiler");
        $__internal_cd04b8419ec64641a58669bceb67cd31a99bafd7bbd6eada4b86737f121a501f->enter($__internal_cd04b8419ec64641a58669bceb67cd31a99bafd7bbd6eada4b86737f121a501f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd04b8419ec64641a58669bceb67cd31a99bafd7bbd6eada4b86737f121a501f->leave($__internal_cd04b8419ec64641a58669bceb67cd31a99bafd7bbd6eada4b86737f121a501f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_13e89d00a363d83c5f0a6f287e5663897d4bd9ed4eacf795fd44717196c6835b = $this->env->getExtension("native_profiler");
        $__internal_13e89d00a363d83c5f0a6f287e5663897d4bd9ed4eacf795fd44717196c6835b->enter($__internal_13e89d00a363d83c5f0a6f287e5663897d4bd9ed4eacf795fd44717196c6835b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ajouter une nouvelle annonce ";
        
        $__internal_13e89d00a363d83c5f0a6f287e5663897d4bd9ed4eacf795fd44717196c6835b->leave($__internal_13e89d00a363d83c5f0a6f287e5663897d4bd9ed4eacf795fd44717196c6835b_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_7b20d15fb5a834fd054d3203ee87d113fc167c3967b32de48b634bb2d098d826 = $this->env->getExtension("native_profiler");
        $__internal_7b20d15fb5a834fd054d3203ee87d113fc167c3967b32de48b634bb2d098d826->enter($__internal_7b20d15fb5a834fd054d3203ee87d113fc167c3967b32de48b634bb2d098d826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

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
        
        $__internal_7b20d15fb5a834fd054d3203ee87d113fc167c3967b32de48b634bb2d098d826->leave($__internal_7b20d15fb5a834fd054d3203ee87d113fc167c3967b32de48b634bb2d098d826_prof);

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

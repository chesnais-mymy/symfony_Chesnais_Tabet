<?php

/* EsieaBlogBundle::layout.html.twig */
class __TwigTemplate_6c0e9b6f36cae8a07ddacbb9ed3c3256285b4e706452df1883d9a39c43485a40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::layout.html.twig", "EsieaBlogBundle::layout.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'esieablog_body' => array($this, 'block_esieablog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42b0b5e2c3bfc5852086dd2e37f373e63a7fcd12b5860b48277aa139cf66cfca = $this->env->getExtension("native_profiler");
        $__internal_42b0b5e2c3bfc5852086dd2e37f373e63a7fcd12b5860b48277aa139cf66cfca->enter($__internal_42b0b5e2c3bfc5852086dd2e37f373e63a7fcd12b5860b48277aa139cf66cfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42b0b5e2c3bfc5852086dd2e37f373e63a7fcd12b5860b48277aa139cf66cfca->leave($__internal_42b0b5e2c3bfc5852086dd2e37f373e63a7fcd12b5860b48277aa139cf66cfca_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7ae1b8357775f2257a42c23179a29324e6e07ef0174c69ccd150b315632c65d = $this->env->getExtension("native_profiler");
        $__internal_f7ae1b8357775f2257a42c23179a29324e6e07ef0174c69ccd150b315632c65d->enter($__internal_f7ae1b8357775f2257a42c23179a29324e6e07ef0174c69ccd150b315632c65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f7ae1b8357775f2257a42c23179a29324e6e07ef0174c69ccd150b315632c65d->leave($__internal_f7ae1b8357775f2257a42c23179a29324e6e07ef0174c69ccd150b315632c65d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b418810984d008d22c34a44a497dceddb2418f8419f862542f49ad08477c23c0 = $this->env->getExtension("native_profiler");
        $__internal_b418810984d008d22c34a44a497dceddb2418f8419f862542f49ad08477c23c0->enter($__internal_b418810984d008d22c34a44a497dceddb2418f8419f862542f49ad08477c23c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    ";
        // line 13
        echo "    <h1>Cuisine d'ici et d'ailleurs</h1>

    <hr>
 

    ";
        // line 19
        echo "    ";
        $this->displayBlock('esieablog_body', $context, $blocks);
        // line 21
        echo "
";
        
        $__internal_b418810984d008d22c34a44a497dceddb2418f8419f862542f49ad08477c23c0->leave($__internal_b418810984d008d22c34a44a497dceddb2418f8419f862542f49ad08477c23c0_prof);

    }

    // line 19
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_57f6698e0b2e0d88c8b67e77a6e47c099907bc9f2e53a4a9a805a5fdc240d838 = $this->env->getExtension("native_profiler");
        $__internal_57f6698e0b2e0d88c8b67e77a6e47c099907bc9f2e53a4a9a805a5fdc240d838->enter($__internal_57f6698e0b2e0d88c8b67e77a6e47c099907bc9f2e53a4a9a805a5fdc240d838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 20
        echo "    ";
        
        $__internal_57f6698e0b2e0d88c8b67e77a6e47c099907bc9f2e53a4a9a805a5fdc240d838->leave($__internal_57f6698e0b2e0d88c8b67e77a6e47c099907bc9f2e53a4a9a805a5fdc240d838_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  79 => 19,  71 => 21,  68 => 19,  61 => 13,  58 => 11,  52 => 10,  42 => 7,  36 => 6,  11 => 4,);
    }
}
/* {# src/Esiea/BlocBundle/Resources/views/layout.html.twig #}*/
/* */
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {# sous-titre commun à toutes les pages #}*/
/*     <h1>Cuisine d'ici et d'ailleurs</h1>*/
/* */
/*     <hr>*/
/*  */
/* */
/*     {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*     {% block esieablog_body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/* */

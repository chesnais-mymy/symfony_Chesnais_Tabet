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
        $__internal_e7366dbf083405f4975a75f7fbe3615e00773ef181c5292188cfc0c423a26e31 = $this->env->getExtension("native_profiler");
        $__internal_e7366dbf083405f4975a75f7fbe3615e00773ef181c5292188cfc0c423a26e31->enter($__internal_e7366dbf083405f4975a75f7fbe3615e00773ef181c5292188cfc0c423a26e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7366dbf083405f4975a75f7fbe3615e00773ef181c5292188cfc0c423a26e31->leave($__internal_e7366dbf083405f4975a75f7fbe3615e00773ef181c5292188cfc0c423a26e31_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ceb9f07d1464927a77d2b4716325f2e706983f222b0788e5e43e44e36a5987e = $this->env->getExtension("native_profiler");
        $__internal_7ceb9f07d1464927a77d2b4716325f2e706983f222b0788e5e43e44e36a5987e->enter($__internal_7ceb9f07d1464927a77d2b4716325f2e706983f222b0788e5e43e44e36a5987e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7ceb9f07d1464927a77d2b4716325f2e706983f222b0788e5e43e44e36a5987e->leave($__internal_7ceb9f07d1464927a77d2b4716325f2e706983f222b0788e5e43e44e36a5987e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3f5291f2b84968681a95ad5bf838bc6461cee93104aee81f14f4b6bb31219b5 = $this->env->getExtension("native_profiler");
        $__internal_f3f5291f2b84968681a95ad5bf838bc6461cee93104aee81f14f4b6bb31219b5->enter($__internal_f3f5291f2b84968681a95ad5bf838bc6461cee93104aee81f14f4b6bb31219b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    ";
        // line 13
        echo "    <h1>Cuisine d'ici et d'ailleurs</h1>

    ";
        // line 16
        echo "    ";
        $this->displayBlock('esieablog_body', $context, $blocks);
        // line 18
        echo "
";
        
        $__internal_f3f5291f2b84968681a95ad5bf838bc6461cee93104aee81f14f4b6bb31219b5->leave($__internal_f3f5291f2b84968681a95ad5bf838bc6461cee93104aee81f14f4b6bb31219b5_prof);

    }

    // line 16
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_24ae777ebc675a842c1fd641b6b40d112ef0c4fe7d15dc3122fdc2b057db1a60 = $this->env->getExtension("native_profiler");
        $__internal_24ae777ebc675a842c1fd641b6b40d112ef0c4fe7d15dc3122fdc2b057db1a60->enter($__internal_24ae777ebc675a842c1fd641b6b40d112ef0c4fe7d15dc3122fdc2b057db1a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 17
        echo "    ";
        
        $__internal_24ae777ebc675a842c1fd641b6b40d112ef0c4fe7d15dc3122fdc2b057db1a60->leave($__internal_24ae777ebc675a842c1fd641b6b40d112ef0c4fe7d15dc3122fdc2b057db1a60_prof);

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
        return array (  82 => 17,  76 => 16,  68 => 18,  65 => 16,  61 => 13,  58 => 11,  52 => 10,  42 => 7,  36 => 6,  11 => 4,);
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
/*     {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*     <h1>Cuisine d'ici et d'ailleurs</h1>*/
/* */
/*     {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*     {% block esieablog_body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/* */

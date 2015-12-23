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
        $__internal_860f4234c1b367822e2be43e6fd154461e0a5bb04864765f30b8e3a03e4da9ce = $this->env->getExtension("native_profiler");
        $__internal_860f4234c1b367822e2be43e6fd154461e0a5bb04864765f30b8e3a03e4da9ce->enter($__internal_860f4234c1b367822e2be43e6fd154461e0a5bb04864765f30b8e3a03e4da9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_860f4234c1b367822e2be43e6fd154461e0a5bb04864765f30b8e3a03e4da9ce->leave($__internal_860f4234c1b367822e2be43e6fd154461e0a5bb04864765f30b8e3a03e4da9ce_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_71fc7f8dc54ec579b0f64fe811db4ac229e61f0c408eb533c2bc132820212dd9 = $this->env->getExtension("native_profiler");
        $__internal_71fc7f8dc54ec579b0f64fe811db4ac229e61f0c408eb533c2bc132820212dd9->enter($__internal_71fc7f8dc54ec579b0f64fe811db4ac229e61f0c408eb533c2bc132820212dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_71fc7f8dc54ec579b0f64fe811db4ac229e61f0c408eb533c2bc132820212dd9->leave($__internal_71fc7f8dc54ec579b0f64fe811db4ac229e61f0c408eb533c2bc132820212dd9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5f42ce5608a7393425ef6c30bab9d454d0d72c00bceba399d694e0b498aef34 = $this->env->getExtension("native_profiler");
        $__internal_b5f42ce5608a7393425ef6c30bab9d454d0d72c00bceba399d694e0b498aef34->enter($__internal_b5f42ce5608a7393425ef6c30bab9d454d0d72c00bceba399d694e0b498aef34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b5f42ce5608a7393425ef6c30bab9d454d0d72c00bceba399d694e0b498aef34->leave($__internal_b5f42ce5608a7393425ef6c30bab9d454d0d72c00bceba399d694e0b498aef34_prof);

    }

    // line 19
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_96d7f495275fac5f8d1b0c1b80cbc080597c6333a3775e32809a58a7e904e52f = $this->env->getExtension("native_profiler");
        $__internal_96d7f495275fac5f8d1b0c1b80cbc080597c6333a3775e32809a58a7e904e52f->enter($__internal_96d7f495275fac5f8d1b0c1b80cbc080597c6333a3775e32809a58a7e904e52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 20
        echo "    ";
        
        $__internal_96d7f495275fac5f8d1b0c1b80cbc080597c6333a3775e32809a58a7e904e52f->leave($__internal_96d7f495275fac5f8d1b0c1b80cbc080597c6333a3775e32809a58a7e904e52f_prof);

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

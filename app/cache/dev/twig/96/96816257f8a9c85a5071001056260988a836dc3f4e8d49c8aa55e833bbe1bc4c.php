<?php

/* EsieaBlogBundle:Advert:edit.html.twig */
class __TwigTemplate_2b32ca0c5883d57db79b75a6a5ac4c3c53eaa1044e7a9198b4b9270f7a2e8a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("EsieaBlogBundle::layout.html.twig", "EsieaBlogBundle:Advert:edit.html.twig", 3);
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
        $__internal_58247dd241c58823ee84dc30589456a1a1a16fae97b62ff9ce5ba2d3711e2117 = $this->env->getExtension("native_profiler");
        $__internal_58247dd241c58823ee84dc30589456a1a1a16fae97b62ff9ce5ba2d3711e2117->enter($__internal_58247dd241c58823ee84dc30589456a1a1a16fae97b62ff9ce5ba2d3711e2117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58247dd241c58823ee84dc30589456a1a1a16fae97b62ff9ce5ba2d3711e2117->leave($__internal_58247dd241c58823ee84dc30589456a1a1a16fae97b62ff9ce5ba2d3711e2117_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd19fbf6c8dff47a48896961e4e3b8b887e245a7df96284daa73b940d15f9d3e = $this->env->getExtension("native_profiler");
        $__internal_fd19fbf6c8dff47a48896961e4e3b8b887e245a7df96284daa73b940d15f9d3e->enter($__internal_fd19fbf6c8dff47a48896961e4e3b8b887e245a7df96284daa73b940d15f9d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une recette - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fd19fbf6c8dff47a48896961e4e3b8b887e245a7df96284daa73b940d15f9d3e->leave($__internal_fd19fbf6c8dff47a48896961e4e3b8b887e245a7df96284daa73b940d15f9d3e_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_194e59035543418325fe660eeb415c5b84ffce281ef5aeea45525cc43b47e51e = $this->env->getExtension("native_profiler");
        $__internal_194e59035543418325fe660eeb415c5b84ffce281ef5aeea45525cc43b47e51e->enter($__internal_194e59035543418325fe660eeb415c5b84ffce281ef5aeea45525cc43b47e51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 10
        echo "
  <h2>Modifier votre recette</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "EsieaBlogBundle:Advert:formulaire.html.twig");
        echo "


  <p>
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>

    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("esiea_blog_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste des annonces
    </a>

  </p>

";
        
        $__internal_194e59035543418325fe660eeb415c5b84ffce281ef5aeea45525cc43b47e51e->leave($__internal_194e59035543418325fe660eeb415c5b84ffce281ef5aeea45525cc43b47e51e_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  69 => 17,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/Esiea/BlogBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une recette - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block esieablog_body %}*/
/* */
/*   <h2>Modifier votre recette</h2>*/
/* */
/*   {{ include("EsieaBlogBundle:Advert:formulaire.html.twig") }}*/
/* */
/* */
/*   <p>*/
/*     <a href="{{ path('esiea_blog_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/* */
/*     <a href="{{ path('esiea_blog_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste des annonces*/
/*     </a>*/
/* */
/*   </p>*/
/* */
/* {% endblock %}*/

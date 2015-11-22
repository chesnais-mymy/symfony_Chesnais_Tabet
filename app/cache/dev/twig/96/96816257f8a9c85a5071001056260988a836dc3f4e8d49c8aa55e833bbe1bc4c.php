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
        $__internal_5b3f2ca07bcd1a9c6cbd19b2097757934e1f56d58de250f4553099e6a09a3885 = $this->env->getExtension("native_profiler");
        $__internal_5b3f2ca07bcd1a9c6cbd19b2097757934e1f56d58de250f4553099e6a09a3885->enter($__internal_5b3f2ca07bcd1a9c6cbd19b2097757934e1f56d58de250f4553099e6a09a3885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b3f2ca07bcd1a9c6cbd19b2097757934e1f56d58de250f4553099e6a09a3885->leave($__internal_5b3f2ca07bcd1a9c6cbd19b2097757934e1f56d58de250f4553099e6a09a3885_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d11a23ab708de8b7c2743e704d2759e531fd3e7dea247ee609cfee25188aae6 = $this->env->getExtension("native_profiler");
        $__internal_5d11a23ab708de8b7c2743e704d2759e531fd3e7dea247ee609cfee25188aae6->enter($__internal_5d11a23ab708de8b7c2743e704d2759e531fd3e7dea247ee609cfee25188aae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5d11a23ab708de8b7c2743e704d2759e531fd3e7dea247ee609cfee25188aae6->leave($__internal_5d11a23ab708de8b7c2743e704d2759e531fd3e7dea247ee609cfee25188aae6_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_e229c9cbd73c0aa397a90690e2f82eb2e1d83c02e416a51c84fa80e5afc87d89 = $this->env->getExtension("native_profiler");
        $__internal_e229c9cbd73c0aa397a90690e2f82eb2e1d83c02e416a51c84fa80e5afc87d89->enter($__internal_e229c9cbd73c0aa397a90690e2f82eb2e1d83c02e416a51c84fa80e5afc87d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "EsieaBlogBundle:Advert:formulaire.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>

    <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("esiea_blog_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste des annonces
    </a>

  </p>

";
        
        $__internal_e229c9cbd73c0aa397a90690e2f82eb2e1d83c02e416a51c84fa80e5afc87d89->leave($__internal_e229c9cbd73c0aa397a90690e2f82eb2e1d83c02e416a51c84fa80e5afc87d89_prof);

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
        return array (  81 => 26,  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/Esiea/BlogBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block esieablog_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("EsieaBlogBundle:Advert:formulaire.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
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

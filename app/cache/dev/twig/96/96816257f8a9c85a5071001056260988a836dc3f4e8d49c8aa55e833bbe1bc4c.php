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
        $__internal_d6424087cc4cd4c5f1bd3ebeae5008fabcb192e75fdb37e53b7a0b714b0c998c = $this->env->getExtension("native_profiler");
        $__internal_d6424087cc4cd4c5f1bd3ebeae5008fabcb192e75fdb37e53b7a0b714b0c998c->enter($__internal_d6424087cc4cd4c5f1bd3ebeae5008fabcb192e75fdb37e53b7a0b714b0c998c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6424087cc4cd4c5f1bd3ebeae5008fabcb192e75fdb37e53b7a0b714b0c998c->leave($__internal_d6424087cc4cd4c5f1bd3ebeae5008fabcb192e75fdb37e53b7a0b714b0c998c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7033cf73d510e169de752b5259426beb094cee98c8f1b4846ada3b000adb996 = $this->env->getExtension("native_profiler");
        $__internal_a7033cf73d510e169de752b5259426beb094cee98c8f1b4846ada3b000adb996->enter($__internal_a7033cf73d510e169de752b5259426beb094cee98c8f1b4846ada3b000adb996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a7033cf73d510e169de752b5259426beb094cee98c8f1b4846ada3b000adb996->leave($__internal_a7033cf73d510e169de752b5259426beb094cee98c8f1b4846ada3b000adb996_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_b5ae283de5f18a91f952bdbcee2ab49563b2b27d9414ca957a5973abc4df19da = $this->env->getExtension("native_profiler");
        $__internal_b5ae283de5f18a91f952bdbcee2ab49563b2b27d9414ca957a5973abc4df19da->enter($__internal_b5ae283de5f18a91f952bdbcee2ab49563b2b27d9414ca957a5973abc4df19da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

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
        
        $__internal_b5ae283de5f18a91f952bdbcee2ab49563b2b27d9414ca957a5973abc4df19da->leave($__internal_b5ae283de5f18a91f952bdbcee2ab49563b2b27d9414ca957a5973abc4df19da_prof);

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

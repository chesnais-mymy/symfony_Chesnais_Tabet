<?php

/* EsieaBlogBundle:Advert:view.html.twig */
class __TwigTemplate_e102ee43d8ebb234c22ffacca39634f71058b94476c4a8315d401e3a9b6d1b28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("EsieaBlogBundle::layout.html.twig", "EsieaBlogBundle:Advert:view.html.twig", 3);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'esieablog_body' => array($this, 'block_esieablog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EsieaBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6171b23ca9278041c97527d035ccab4bff118364649fdbf4d03f69c4426c0235 = $this->env->getExtension("native_profiler");
        $__internal_6171b23ca9278041c97527d035ccab4bff118364649fdbf4d03f69c4426c0235->enter($__internal_6171b23ca9278041c97527d035ccab4bff118364649fdbf4d03f69c4426c0235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6171b23ca9278041c97527d035ccab4bff118364649fdbf4d03f69c4426c0235->leave($__internal_6171b23ca9278041c97527d035ccab4bff118364649fdbf4d03f69c4426c0235_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_89668afa3e2deb5d197d764afd983d1d18456abf6925eed8ec803856a9ee332f = $this->env->getExtension("native_profiler");
        $__internal_89668afa3e2deb5d197d764afd983d1d18456abf6925eed8ec803856a9ee332f->enter($__internal_89668afa3e2deb5d197d764afd983d1d18456abf6925eed8ec803856a9ee332f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "  Lecture d'une recette - ";
        $this->displayParentBlock("titre", $context, $blocks);
        echo "
";
        
        $__internal_89668afa3e2deb5d197d764afd983d1d18456abf6925eed8ec803856a9ee332f->leave($__internal_89668afa3e2deb5d197d764afd983d1d18456abf6925eed8ec803856a9ee332f_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_1cf04ca0f14e4522984e033e694463e33524989036e876b8d30e24f1646ff6cd = $this->env->getExtension("native_profiler");
        $__internal_1cf04ca0f14e4522984e033e694463e33524989036e876b8d30e24f1646ff6cd->enter($__internal_1cf04ca0f14e4522984e033e694463e33524989036e876b8d30e24f1646ff6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "titre", array()), "html", null, true);
        echo "</h2>
  <i1>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "auteur", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i1>


  <div class=\"well\">

   <i2> Les ingrédients : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "ingredients", array()), "html", null, true);
        echo " </i2>
  </div>

  <div class=\"well\">

   <i3> La préparation : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "preparation", array()), "html", null, true);
        echo " </i3>
  </div>


  <p>
    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("esiea_blog_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste des recettes
    </a>
    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier la recette
    </a>
    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer la recette
    </a>
  </p>

";
        
        $__internal_1cf04ca0f14e4522984e033e694463e33524989036e876b8d30e24f1646ff6cd->leave($__internal_1cf04ca0f14e4522984e033e694463e33524989036e876b8d30e24f1646ff6cd_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  97 => 31,  90 => 27,  82 => 22,  74 => 17,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/esiea/BlogBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* {% block titre %}*/
/*   Lecture d'une recette - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block esieablog_body %}*/
/* */
/*   <h2>{{ advert.titre }}</h2>*/
/*   <i1>Par {{ advert.auteur }}, le {{ advert.date|date('d/m/Y') }}</i1>*/
/* */
/* */
/*   <div class="well">*/
/* */
/*    <i2> Les ingrédients : {{ advert.ingredients }} </i2>*/
/*   </div>*/
/* */
/*   <div class="well">*/
/* */
/*    <i3> La préparation : {{ advert.preparation }} </i3>*/
/*   </div>*/
/* */
/* */
/*   <p>*/
/*     <a href="{{ path('esiea_blog_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste des recettes*/
/*     </a>*/
/*     <a href="{{ path('esiea_blog_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier la recette*/
/*     </a>*/
/*     <a href="{{ path('esiea_blog_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer la recette*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/

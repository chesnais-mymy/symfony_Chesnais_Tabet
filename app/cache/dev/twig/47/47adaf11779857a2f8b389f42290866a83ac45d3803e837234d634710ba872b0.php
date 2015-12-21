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
        $__internal_cdd2e75719e925288b43abbc791512a5f37d86e21973302db415675c71145e7b = $this->env->getExtension("native_profiler");
        $__internal_cdd2e75719e925288b43abbc791512a5f37d86e21973302db415675c71145e7b->enter($__internal_cdd2e75719e925288b43abbc791512a5f37d86e21973302db415675c71145e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdd2e75719e925288b43abbc791512a5f37d86e21973302db415675c71145e7b->leave($__internal_cdd2e75719e925288b43abbc791512a5f37d86e21973302db415675c71145e7b_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_3ac4dbb155cb5776551c5f44c22311565de4a3ead2df787c8c7cb8438b2e915b = $this->env->getExtension("native_profiler");
        $__internal_3ac4dbb155cb5776551c5f44c22311565de4a3ead2df787c8c7cb8438b2e915b->enter($__internal_3ac4dbb155cb5776551c5f44c22311565de4a3ead2df787c8c7cb8438b2e915b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "  Lecture d'une recette - ";
        $this->displayParentBlock("titre", $context, $blocks);
        echo "
";
        
        $__internal_3ac4dbb155cb5776551c5f44c22311565de4a3ead2df787c8c7cb8438b2e915b->leave($__internal_3ac4dbb155cb5776551c5f44c22311565de4a3ead2df787c8c7cb8438b2e915b_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_8591f61e6752128a3de782b6e8b2765bf414e56b967a8715dd8a05dcf365af94 = $this->env->getExtension("native_profiler");
        $__internal_8591f61e6752128a3de782b6e8b2765bf414e56b967a8715dd8a05dcf365af94->enter($__internal_8591f61e6752128a3de782b6e8b2765bf414e56b967a8715dd8a05dcf365af94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "titre", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "auteur", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>


  <div class=\"well\">

   <i> Les ingrédients : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "ingredients", array()), "html", null, true);
        echo " </i>
  </div>

  <div class=\"well\">

   <i> La préparation : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "preparation", array()), "html", null, true);
        echo " </i>
  </div>

<div class=\"well\">

   <i> L'image ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "html", null, true);
        echo " </i>
  </div>

  <p>
    <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("esiea_blog_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste des recettes
    </a>
    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier la recette
    </a>
    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer la recette
    </a>
  </p>

";
        
        $__internal_8591f61e6752128a3de782b6e8b2765bf414e56b967a8715dd8a05dcf365af94->leave($__internal_8591f61e6752128a3de782b6e8b2765bf414e56b967a8715dd8a05dcf365af94_prof);

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
        return array (  111 => 39,  104 => 35,  97 => 31,  90 => 27,  82 => 22,  74 => 17,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
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
/*   <i>Par {{ advert.auteur }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/* */
/*   <div class="well">*/
/* */
/*    <i> Les ingrédients : {{ advert.ingredients }} </i>*/
/*   </div>*/
/* */
/*   <div class="well">*/
/* */
/*    <i> La préparation : {{ advert.preparation }} </i>*/
/*   </div>*/
/* */
/* <div class="well">*/
/* */
/*    <i> L'image {{ advert.image }} </i>*/
/*   </div>*/
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

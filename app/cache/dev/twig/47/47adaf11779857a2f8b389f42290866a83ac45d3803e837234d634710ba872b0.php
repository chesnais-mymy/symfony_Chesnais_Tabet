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
        $__internal_ffcc5f4526cd45faf6e28180e4f6f3b3005994f114ebb4bc06349bee7accd326 = $this->env->getExtension("native_profiler");
        $__internal_ffcc5f4526cd45faf6e28180e4f6f3b3005994f114ebb4bc06349bee7accd326->enter($__internal_ffcc5f4526cd45faf6e28180e4f6f3b3005994f114ebb4bc06349bee7accd326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffcc5f4526cd45faf6e28180e4f6f3b3005994f114ebb4bc06349bee7accd326->leave($__internal_ffcc5f4526cd45faf6e28180e4f6f3b3005994f114ebb4bc06349bee7accd326_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_e721317ae385dfd47ff93ea9d08c8064f3c22f2d92fb3d70d6b48c80388c8653 = $this->env->getExtension("native_profiler");
        $__internal_e721317ae385dfd47ff93ea9d08c8064f3c22f2d92fb3d70d6b48c80388c8653->enter($__internal_e721317ae385dfd47ff93ea9d08c8064f3c22f2d92fb3d70d6b48c80388c8653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("titre", $context, $blocks);
        echo "
";
        
        $__internal_e721317ae385dfd47ff93ea9d08c8064f3c22f2d92fb3d70d6b48c80388c8653->leave($__internal_e721317ae385dfd47ff93ea9d08c8064f3c22f2d92fb3d70d6b48c80388c8653_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_67a88b0abe0319f8360b67440071070688034aba31575285470a6b75b4558df5 = $this->env->getExtension("native_profiler");
        $__internal_67a88b0abe0319f8360b67440071070688034aba31575285470a6b75b4558df5->enter($__internal_67a88b0abe0319f8360b67440071070688034aba31575285470a6b75b4558df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

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
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "preparation", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("esiea_blog_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste des recettes
    </a>
    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier la recette
    </a>
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer la recette
    </a>
  </p>

";
        
        $__internal_67a88b0abe0319f8360b67440071070688034aba31575285470a6b75b4558df5->leave($__internal_67a88b0abe0319f8360b67440071070688034aba31575285470a6b75b4558df5_prof);

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
        return array (  93 => 27,  86 => 23,  79 => 19,  72 => 15,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/esiea/BlogBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* {% block titre %}*/
/*   Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block esieablog_body %}*/
/* */
/*   <h2>{{ advert.titre }}</h2>*/
/*   <i>Par {{ advert.auteur }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/*   <div class="well">*/
/*     {{ advert.preparation }}*/
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

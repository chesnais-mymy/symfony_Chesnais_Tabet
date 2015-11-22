<?php

/* EsieaBlogBundle:Advert:delete.html.twig */
class __TwigTemplate_6d4c8a27950a7fc0380c8585d80115838168bbf311273bd66797356bdf180e65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("EsieaBlogBundle::layout.html.twig", "EsieaBlogBundle:Advert:delete.html.twig", 3);
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
        $__internal_38df915fe11fb402f6f72fda0bbaa9cb57f318efecb6bf2b1e6ec8ce26cad048 = $this->env->getExtension("native_profiler");
        $__internal_38df915fe11fb402f6f72fda0bbaa9cb57f318efecb6bf2b1e6ec8ce26cad048->enter($__internal_38df915fe11fb402f6f72fda0bbaa9cb57f318efecb6bf2b1e6ec8ce26cad048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38df915fe11fb402f6f72fda0bbaa9cb57f318efecb6bf2b1e6ec8ce26cad048->leave($__internal_38df915fe11fb402f6f72fda0bbaa9cb57f318efecb6bf2b1e6ec8ce26cad048_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_368c1f20411ecf35def76059c8a9c8428b2f3a2fe4a221d3f85b0054d513aa09 = $this->env->getExtension("native_profiler");
        $__internal_368c1f20411ecf35def76059c8a9c8428b2f3a2fe4a221d3f85b0054d513aa09->enter($__internal_368c1f20411ecf35def76059c8a9c8428b2f3a2fe4a221d3f85b0054d513aa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_368c1f20411ecf35def76059c8a9c8428b2f3a2fe4a221d3f85b0054d513aa09->leave($__internal_368c1f20411ecf35def76059c8a9c8428b2f3a2fe4a221d3f85b0054d513aa09_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_9262e61f88dc56633fa256b78de8ced26cca7af9b08bb9641c45abc888bea3f5 = $this->env->getExtension("native_profiler");
        $__internal_9262e61f88dc56633fa256b78de8ced26cca7af9b08bb9641c45abc888bea3f5->enter($__internal_9262e61f88dc56633fa256b78de8ced26cca7af9b08bb9641c45abc888bea3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 10
        echo "
    <h2>Supprimer une annonce</h2>

    ";
        // line 13
        echo twig_include($this->env, $context, "EsieaBlogBundle:Advert:formulaire.html.twig");
        echo "

    <p>
      Vous allez supprimer définitivement votre annonce
    </p>

    <p>
        <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("esiea_blog_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste des annonces
        </a>

        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>

    </p>

";
        
        $__internal_9262e61f88dc56633fa256b78de8ced26cca7af9b08bb9641c45abc888bea3f5->leave($__internal_9262e61f88dc56633fa256b78de8ced26cca7af9b08bb9641c45abc888bea3f5_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  72 => 20,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/Esiea/BlogBundle/Resources/views/Advert/delete.html.twig #}*/
/* */
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block esieablog_body %}*/
/* */
/*     <h2>Supprimer une annonce</h2>*/
/* */
/*     {{ include("EsieaBlogBundle:Advert:formulaire.html.twig") }}*/
/* */
/*     <p>*/
/*       Vous allez supprimer définitivement votre annonce*/
/*     </p>*/
/* */
/*     <p>*/
/*         <a href="{{ path('esiea_blog_home') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste des annonces*/
/*         </a>*/
/* */
/*         <a href="{{ path('esiea_blog_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à l'annonce*/
/*         </a>*/
/* */
/*     </p>*/
/* */
/* {% endblock %}*/

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
        $__internal_08eee1263063b9a77cec2a8fdac5279cd2ad89811316c9b05b1dc0fd2b29c145 = $this->env->getExtension("native_profiler");
        $__internal_08eee1263063b9a77cec2a8fdac5279cd2ad89811316c9b05b1dc0fd2b29c145->enter($__internal_08eee1263063b9a77cec2a8fdac5279cd2ad89811316c9b05b1dc0fd2b29c145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08eee1263063b9a77cec2a8fdac5279cd2ad89811316c9b05b1dc0fd2b29c145->leave($__internal_08eee1263063b9a77cec2a8fdac5279cd2ad89811316c9b05b1dc0fd2b29c145_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_63b3b446a50cb083039feb6cf9be824b8cd37b903cc342ab71492cead9e28cdd = $this->env->getExtension("native_profiler");
        $__internal_63b3b446a50cb083039feb6cf9be824b8cd37b903cc342ab71492cead9e28cdd->enter($__internal_63b3b446a50cb083039feb6cf9be824b8cd37b903cc342ab71492cead9e28cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_63b3b446a50cb083039feb6cf9be824b8cd37b903cc342ab71492cead9e28cdd->leave($__internal_63b3b446a50cb083039feb6cf9be824b8cd37b903cc342ab71492cead9e28cdd_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_fc61b6aee055c21ebc7c33ad07ddc93a3a6a3c0ad938606b85f612430bfb3f55 = $this->env->getExtension("native_profiler");
        $__internal_fc61b6aee055c21ebc7c33ad07ddc93a3a6a3c0ad938606b85f612430bfb3f55->enter($__internal_fc61b6aee055c21ebc7c33ad07ddc93a3a6a3c0ad938606b85f612430bfb3f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

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
        
        $__internal_fc61b6aee055c21ebc7c33ad07ddc93a3a6a3c0ad938606b85f612430bfb3f55->leave($__internal_fc61b6aee055c21ebc7c33ad07ddc93a3a6a3c0ad938606b85f612430bfb3f55_prof);

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
/*     Supprimer une annonce - {{ parent() }}*/
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

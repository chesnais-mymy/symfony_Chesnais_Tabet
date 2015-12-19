<?php

/* EsieaBlogBundle:Advert:formulaire.html.twig */
class __TwigTemplate_2d444963dd4fb96cc9bf467b4c3e8d43a38abb7813e92d76d224bfc1e7a0bdda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_764bec0f92aec002318c23c250e1f7220d9e1006293f4d3578ac56f084921878 = $this->env->getExtension("native_profiler");
        $__internal_764bec0f92aec002318c23c250e1f7220d9e1006293f4d3578ac56f084921878->enter($__internal_764bec0f92aec002318c23c250e1f7220d9e1006293f4d3578ac56f084921878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:formulaire.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "

<h3>Formulaire d'annonce</h3>

<div class=\"well\">
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>";
        
        $__internal_764bec0f92aec002318c23c250e1f7220d9e1006293f4d3578ac56f084921878->leave($__internal_764bec0f92aec002318c23c250e1f7220d9e1006293f4d3578ac56f084921878_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  25 => 6,  22 => 2,);
    }
}
/* {# src/Esiea/BlogBundle/Resources/views/Advert/formulaire.html.twig #}*/
/* */
/* {# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,*/
/*    elles, hériteront probablement du layout. Je dis « probablement » car,*/
/*    ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}*/
/* */
/* */
/* <h3>Formulaire d'annonce</h3>*/
/* */
/* <div class="well">*/
/*     {{ form(form) }}*/
/* </div>*/

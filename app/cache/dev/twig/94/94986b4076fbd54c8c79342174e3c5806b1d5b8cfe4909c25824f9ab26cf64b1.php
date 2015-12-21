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
        $__internal_b8c6f19f9197864eee21d3a078c92a03db614ef4bd68cfdaca35e898d8ee7961 = $this->env->getExtension("native_profiler");
        $__internal_b8c6f19f9197864eee21d3a078c92a03db614ef4bd68cfdaca35e898d8ee7961->enter($__internal_b8c6f19f9197864eee21d3a078c92a03db614ef4bd68cfdaca35e898d8ee7961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8c6f19f9197864eee21d3a078c92a03db614ef4bd68cfdaca35e898d8ee7961->leave($__internal_b8c6f19f9197864eee21d3a078c92a03db614ef4bd68cfdaca35e898d8ee7961_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a26ed95e9a03e23d40cea6940ef83f012877b9cb71e57b0f32970dc964c30859 = $this->env->getExtension("native_profiler");
        $__internal_a26ed95e9a03e23d40cea6940ef83f012877b9cb71e57b0f32970dc964c30859->enter($__internal_a26ed95e9a03e23d40cea6940ef83f012877b9cb71e57b0f32970dc964c30859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a26ed95e9a03e23d40cea6940ef83f012877b9cb71e57b0f32970dc964c30859->leave($__internal_a26ed95e9a03e23d40cea6940ef83f012877b9cb71e57b0f32970dc964c30859_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_1fc30c666c37303699a33996ed9d86040069a072d08fa95c72422a580af2b919 = $this->env->getExtension("native_profiler");
        $__internal_1fc30c666c37303699a33996ed9d86040069a072d08fa95c72422a580af2b919->enter($__internal_1fc30c666c37303699a33996ed9d86040069a072d08fa95c72422a580af2b919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 10
        echo "
    <h2>Supprimer votre annonce</h2>

    <p>
    Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "titre", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

    <p>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("esiea_blog_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste des annonces
        </a>

        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>

        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 33
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>


    </p>

";
        
        $__internal_1fc30c666c37303699a33996ed9d86040069a072d08fa95c72422a580af2b919->leave($__internal_1fc30c666c37303699a33996ed9d86040069a072d08fa95c72422a580af2b919_prof);

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
        return array (  93 => 33,  84 => 26,  76 => 21,  69 => 18,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
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
/*     <h2>Supprimer votre annonce</h2>*/
/* */
/*     <p>*/
/*     Etes-vous certain de vouloir supprimer l'annonce "{{ advert.titre }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id de l'annonce dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('esiea_blog_delete', {'id': advert.id}) }}" method="post">*/
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
/*         <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* */
/*     </p>*/
/* */
/* {% endblock %}*/

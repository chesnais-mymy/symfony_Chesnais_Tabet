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
        $__internal_57cab3fb4f28efacf1372ba343d3b75ace931084ba4c2d168c4b4dca15c25fe6 = $this->env->getExtension("native_profiler");
        $__internal_57cab3fb4f28efacf1372ba343d3b75ace931084ba4c2d168c4b4dca15c25fe6->enter($__internal_57cab3fb4f28efacf1372ba343d3b75ace931084ba4c2d168c4b4dca15c25fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57cab3fb4f28efacf1372ba343d3b75ace931084ba4c2d168c4b4dca15c25fe6->leave($__internal_57cab3fb4f28efacf1372ba343d3b75ace931084ba4c2d168c4b4dca15c25fe6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2403f9bc9541d13a8fac7ab69eb27b735597abd12e157f17c5a04922b52af0c0 = $this->env->getExtension("native_profiler");
        $__internal_2403f9bc9541d13a8fac7ab69eb27b735597abd12e157f17c5a04922b52af0c0->enter($__internal_2403f9bc9541d13a8fac7ab69eb27b735597abd12e157f17c5a04922b52af0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2403f9bc9541d13a8fac7ab69eb27b735597abd12e157f17c5a04922b52af0c0->leave($__internal_2403f9bc9541d13a8fac7ab69eb27b735597abd12e157f17c5a04922b52af0c0_prof);

    }

    // line 9
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_0b5f261f163eb009915926defe2f8a9bf7736e43c58b7274b6afc0bedcbe5465 = $this->env->getExtension("native_profiler");
        $__internal_0b5f261f163eb009915926defe2f8a9bf7736e43c58b7274b6afc0bedcbe5465->enter($__internal_0b5f261f163eb009915926defe2f8a9bf7736e43c58b7274b6afc0bedcbe5465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

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
        
        $__internal_0b5f261f163eb009915926defe2f8a9bf7736e43c58b7274b6afc0bedcbe5465->leave($__internal_0b5f261f163eb009915926defe2f8a9bf7736e43c58b7274b6afc0bedcbe5465_prof);

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

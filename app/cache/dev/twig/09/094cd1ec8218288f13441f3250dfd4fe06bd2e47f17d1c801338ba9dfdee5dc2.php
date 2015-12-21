<?php

/* EsieaBlogBundle::layout.html.twig */
class __TwigTemplate_6c0e9b6f36cae8a07ddacbb9ed3c3256285b4e706452df1883d9a39c43485a40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::layout.html.twig", "EsieaBlogBundle::layout.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'esieablog_body' => array($this, 'block_esieablog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7d48b9e895d2825e5933198ede3390f96b689d6fa7c8a367b40a4d1b2a9fd6d = $this->env->getExtension("native_profiler");
        $__internal_d7d48b9e895d2825e5933198ede3390f96b689d6fa7c8a367b40a4d1b2a9fd6d->enter($__internal_d7d48b9e895d2825e5933198ede3390f96b689d6fa7c8a367b40a4d1b2a9fd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7d48b9e895d2825e5933198ede3390f96b689d6fa7c8a367b40a4d1b2a9fd6d->leave($__internal_d7d48b9e895d2825e5933198ede3390f96b689d6fa7c8a367b40a4d1b2a9fd6d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_706d2bcf89e66cb940273c26c74140ce2a05852b026cfa6d422fc5dec84219c5 = $this->env->getExtension("native_profiler");
        $__internal_706d2bcf89e66cb940273c26c74140ce2a05852b026cfa6d422fc5dec84219c5->enter($__internal_706d2bcf89e66cb940273c26c74140ce2a05852b026cfa6d422fc5dec84219c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_706d2bcf89e66cb940273c26c74140ce2a05852b026cfa6d422fc5dec84219c5->leave($__internal_706d2bcf89e66cb940273c26c74140ce2a05852b026cfa6d422fc5dec84219c5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_926f1b36f272c7480e7843fc4f9c4a3afc92a6ddc30b7c41471091ddf9c8755b = $this->env->getExtension("native_profiler");
        $__internal_926f1b36f272c7480e7843fc4f9c4a3afc92a6ddc30b7c41471091ddf9c8755b->enter($__internal_926f1b36f272c7480e7843fc4f9c4a3afc92a6ddc30b7c41471091ddf9c8755b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    ";
        // line 13
        echo "    <h1>Les recettes de cuisine</h1>

    <hr>

    ";
        // line 18
        echo "    ";
        $this->displayBlock('esieablog_body', $context, $blocks);
        // line 20
        echo "
";
        
        $__internal_926f1b36f272c7480e7843fc4f9c4a3afc92a6ddc30b7c41471091ddf9c8755b->leave($__internal_926f1b36f272c7480e7843fc4f9c4a3afc92a6ddc30b7c41471091ddf9c8755b_prof);

    }

    // line 18
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_191e65694260d9c47ed84eebebc4ee7ccd48f49a3178d7e718fbfd0bc803a462 = $this->env->getExtension("native_profiler");
        $__internal_191e65694260d9c47ed84eebebc4ee7ccd48f49a3178d7e718fbfd0bc803a462->enter($__internal_191e65694260d9c47ed84eebebc4ee7ccd48f49a3178d7e718fbfd0bc803a462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 19
        echo "    ";
        
        $__internal_191e65694260d9c47ed84eebebc4ee7ccd48f49a3178d7e718fbfd0bc803a462->leave($__internal_191e65694260d9c47ed84eebebc4ee7ccd48f49a3178d7e718fbfd0bc803a462_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  78 => 18,  70 => 20,  67 => 18,  61 => 13,  58 => 11,  52 => 10,  42 => 7,  36 => 6,  11 => 4,);
    }
}
/* {# src/Esiea/BlocBundle/Resources/views/layout.html.twig #}*/
/* */
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*     <h1>Les recettes de cuisine</h1>*/
/* */
/*     <hr>*/
/* */
/*     {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*     {% block esieablog_body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/* */

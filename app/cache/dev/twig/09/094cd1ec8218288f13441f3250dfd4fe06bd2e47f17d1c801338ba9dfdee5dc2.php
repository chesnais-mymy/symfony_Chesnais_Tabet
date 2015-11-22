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
        $__internal_767f56f2f3bbe02ad888640080ea55e3f115efea523ccabf233b546b48815741 = $this->env->getExtension("native_profiler");
        $__internal_767f56f2f3bbe02ad888640080ea55e3f115efea523ccabf233b546b48815741->enter($__internal_767f56f2f3bbe02ad888640080ea55e3f115efea523ccabf233b546b48815741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_767f56f2f3bbe02ad888640080ea55e3f115efea523ccabf233b546b48815741->leave($__internal_767f56f2f3bbe02ad888640080ea55e3f115efea523ccabf233b546b48815741_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e80a4cd99b0e01ba9ba13f12f5a484af159270d2b7053ecd159aec912bd06c9 = $this->env->getExtension("native_profiler");
        $__internal_1e80a4cd99b0e01ba9ba13f12f5a484af159270d2b7053ecd159aec912bd06c9->enter($__internal_1e80a4cd99b0e01ba9ba13f12f5a484af159270d2b7053ecd159aec912bd06c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1e80a4cd99b0e01ba9ba13f12f5a484af159270d2b7053ecd159aec912bd06c9->leave($__internal_1e80a4cd99b0e01ba9ba13f12f5a484af159270d2b7053ecd159aec912bd06c9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8abf512dc070f181cf2c5eca8bf16d88d51be9c674286cc412f1e1b1b60026de = $this->env->getExtension("native_profiler");
        $__internal_8abf512dc070f181cf2c5eca8bf16d88d51be9c674286cc412f1e1b1b60026de->enter($__internal_8abf512dc070f181cf2c5eca8bf16d88d51be9c674286cc412f1e1b1b60026de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    ";
        // line 13
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 18
        echo "    ";
        $this->displayBlock('esieablog_body', $context, $blocks);
        // line 20
        echo "
";
        
        $__internal_8abf512dc070f181cf2c5eca8bf16d88d51be9c674286cc412f1e1b1b60026de->leave($__internal_8abf512dc070f181cf2c5eca8bf16d88d51be9c674286cc412f1e1b1b60026de_prof);

    }

    // line 18
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_fd9b7b528a070a8d621a5b50519f1f6da112865774e6ae4d601608d5b91dc50f = $this->env->getExtension("native_profiler");
        $__internal_fd9b7b528a070a8d621a5b50519f1f6da112865774e6ae4d601608d5b91dc50f->enter($__internal_fd9b7b528a070a8d621a5b50519f1f6da112865774e6ae4d601608d5b91dc50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 19
        echo "    ";
        
        $__internal_fd9b7b528a070a8d621a5b50519f1f6da112865774e6ae4d601608d5b91dc50f->leave($__internal_fd9b7b528a070a8d621a5b50519f1f6da112865774e6ae4d601608d5b91dc50f_prof);

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
/*     <h1>Annonces</h1>*/
/* */
/*     <hr>*/
/* */
/*     {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*     {% block esieablog_body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/* */

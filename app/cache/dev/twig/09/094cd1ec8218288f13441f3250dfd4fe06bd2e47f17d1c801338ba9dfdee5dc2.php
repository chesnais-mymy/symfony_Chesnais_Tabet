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
        $__internal_224f09c9b089de89d74c16b9d6987b20d20248343d2b7d50f01eb0a2a08fe7e6 = $this->env->getExtension("native_profiler");
        $__internal_224f09c9b089de89d74c16b9d6987b20d20248343d2b7d50f01eb0a2a08fe7e6->enter($__internal_224f09c9b089de89d74c16b9d6987b20d20248343d2b7d50f01eb0a2a08fe7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_224f09c9b089de89d74c16b9d6987b20d20248343d2b7d50f01eb0a2a08fe7e6->leave($__internal_224f09c9b089de89d74c16b9d6987b20d20248343d2b7d50f01eb0a2a08fe7e6_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3deef7c125fe42040731f16ee2eed4c4deac44fd6aeb62a64173bfe60f36393c = $this->env->getExtension("native_profiler");
        $__internal_3deef7c125fe42040731f16ee2eed4c4deac44fd6aeb62a64173bfe60f36393c->enter($__internal_3deef7c125fe42040731f16ee2eed4c4deac44fd6aeb62a64173bfe60f36393c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3deef7c125fe42040731f16ee2eed4c4deac44fd6aeb62a64173bfe60f36393c->leave($__internal_3deef7c125fe42040731f16ee2eed4c4deac44fd6aeb62a64173bfe60f36393c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ceaaa617c280fa66f9e66cc67866d59e02610085abc9952676eef1b268a6e26 = $this->env->getExtension("native_profiler");
        $__internal_9ceaaa617c280fa66f9e66cc67866d59e02610085abc9952676eef1b268a6e26->enter($__internal_9ceaaa617c280fa66f9e66cc67866d59e02610085abc9952676eef1b268a6e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9ceaaa617c280fa66f9e66cc67866d59e02610085abc9952676eef1b268a6e26->leave($__internal_9ceaaa617c280fa66f9e66cc67866d59e02610085abc9952676eef1b268a6e26_prof);

    }

    // line 18
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_a7c24de52946e4748de76829a95e7cc01aaba769247e0e1cd8da26cc41784002 = $this->env->getExtension("native_profiler");
        $__internal_a7c24de52946e4748de76829a95e7cc01aaba769247e0e1cd8da26cc41784002->enter($__internal_a7c24de52946e4748de76829a95e7cc01aaba769247e0e1cd8da26cc41784002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 19
        echo "    ";
        
        $__internal_a7c24de52946e4748de76829a95e7cc01aaba769247e0e1cd8da26cc41784002->leave($__internal_a7c24de52946e4748de76829a95e7cc01aaba769247e0e1cd8da26cc41784002_prof);

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

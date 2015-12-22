<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_ae7f698ad398b51333e3783b496c05634b20700450595a114555ba654b6b4da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df08d85753d247a556f050af5df90598f0057768cd98ab1f68416c5334ed8766 = $this->env->getExtension("native_profiler");
        $__internal_df08d85753d247a556f050af5df90598f0057768cd98ab1f68416c5334ed8766->enter($__internal_df08d85753d247a556f050af5df90598f0057768cd98ab1f68416c5334ed8766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df08d85753d247a556f050af5df90598f0057768cd98ab1f68416c5334ed8766->leave($__internal_df08d85753d247a556f050af5df90598f0057768cd98ab1f68416c5334ed8766_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_053b44a45339b2a2fa39e80cb3c1709914c85e769d6872a61e4141d4ed084158 = $this->env->getExtension("native_profiler");
        $__internal_053b44a45339b2a2fa39e80cb3c1709914c85e769d6872a61e4141d4ed084158->enter($__internal_053b44a45339b2a2fa39e80cb3c1709914c85e769d6872a61e4141d4ed084158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_053b44a45339b2a2fa39e80cb3c1709914c85e769d6872a61e4141d4ed084158->leave($__internal_053b44a45339b2a2fa39e80cb3c1709914c85e769d6872a61e4141d4ed084158_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5220618191f4083a4439010a27a06b61a7b6cc714050ade9d290aa866de50c75 = $this->env->getExtension("native_profiler");
        $__internal_5220618191f4083a4439010a27a06b61a7b6cc714050ade9d290aa866de50c75->enter($__internal_5220618191f4083a4439010a27a06b61a7b6cc714050ade9d290aa866de50c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_5220618191f4083a4439010a27a06b61a7b6cc714050ade9d290aa866de50c75->leave($__internal_5220618191f4083a4439010a27a06b61a7b6cc714050ade9d290aa866de50c75_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_95077b2190c68b0c8234f566aa54c31835143b6b17ef72780c09190e46dfb504 = $this->env->getExtension("native_profiler");
        $__internal_95077b2190c68b0c8234f566aa54c31835143b6b17ef72780c09190e46dfb504->enter($__internal_95077b2190c68b0c8234f566aa54c31835143b6b17ef72780c09190e46dfb504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_95077b2190c68b0c8234f566aa54c31835143b6b17ef72780c09190e46dfb504->leave($__internal_95077b2190c68b0c8234f566aa54c31835143b6b17ef72780c09190e46dfb504_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_69c5f519d34f078168e192af0e5524f458ea7053b088eaef48d365280eb4673a = $this->env->getExtension("native_profiler");
        $__internal_69c5f519d34f078168e192af0e5524f458ea7053b088eaef48d365280eb4673a->enter($__internal_69c5f519d34f078168e192af0e5524f458ea7053b088eaef48d365280eb4673a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_69c5f519d34f078168e192af0e5524f458ea7053b088eaef48d365280eb4673a->leave($__internal_69c5f519d34f078168e192af0e5524f458ea7053b088eaef48d365280eb4673a_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */

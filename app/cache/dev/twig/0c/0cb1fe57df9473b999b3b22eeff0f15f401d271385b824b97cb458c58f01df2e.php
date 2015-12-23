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
        $__internal_ca8c2d47ba9ed9d1eed2db737c7c4044225917326c53ed1f497c9014c8a7e73d = $this->env->getExtension("native_profiler");
        $__internal_ca8c2d47ba9ed9d1eed2db737c7c4044225917326c53ed1f497c9014c8a7e73d->enter($__internal_ca8c2d47ba9ed9d1eed2db737c7c4044225917326c53ed1f497c9014c8a7e73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca8c2d47ba9ed9d1eed2db737c7c4044225917326c53ed1f497c9014c8a7e73d->leave($__internal_ca8c2d47ba9ed9d1eed2db737c7c4044225917326c53ed1f497c9014c8a7e73d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e2247ecb991cb71e3024aaecf89e9403e4eabee396ef79eabce180d61364c35 = $this->env->getExtension("native_profiler");
        $__internal_0e2247ecb991cb71e3024aaecf89e9403e4eabee396ef79eabce180d61364c35->enter($__internal_0e2247ecb991cb71e3024aaecf89e9403e4eabee396ef79eabce180d61364c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_0e2247ecb991cb71e3024aaecf89e9403e4eabee396ef79eabce180d61364c35->leave($__internal_0e2247ecb991cb71e3024aaecf89e9403e4eabee396ef79eabce180d61364c35_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4e6c073303af92797fe58576f3fa81d1ce345e7ed1a14dcb8de9150c8cb912e = $this->env->getExtension("native_profiler");
        $__internal_e4e6c073303af92797fe58576f3fa81d1ce345e7ed1a14dcb8de9150c8cb912e->enter($__internal_e4e6c073303af92797fe58576f3fa81d1ce345e7ed1a14dcb8de9150c8cb912e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_e4e6c073303af92797fe58576f3fa81d1ce345e7ed1a14dcb8de9150c8cb912e->leave($__internal_e4e6c073303af92797fe58576f3fa81d1ce345e7ed1a14dcb8de9150c8cb912e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8438cfc5d433a4ad23dccdf05a35820059824d9b525b940c30d04a11c91d5bde = $this->env->getExtension("native_profiler");
        $__internal_8438cfc5d433a4ad23dccdf05a35820059824d9b525b940c30d04a11c91d5bde->enter($__internal_8438cfc5d433a4ad23dccdf05a35820059824d9b525b940c30d04a11c91d5bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8438cfc5d433a4ad23dccdf05a35820059824d9b525b940c30d04a11c91d5bde->leave($__internal_8438cfc5d433a4ad23dccdf05a35820059824d9b525b940c30d04a11c91d5bde_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_e1de16b282e92ea48e2b956dc468d8c98554521ff416f906764c7607f9fdcc6c = $this->env->getExtension("native_profiler");
        $__internal_e1de16b282e92ea48e2b956dc468d8c98554521ff416f906764c7607f9fdcc6c->enter($__internal_e1de16b282e92ea48e2b956dc468d8c98554521ff416f906764c7607f9fdcc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e1de16b282e92ea48e2b956dc468d8c98554521ff416f906764c7607f9fdcc6c->leave($__internal_e1de16b282e92ea48e2b956dc468d8c98554521ff416f906764c7607f9fdcc6c_prof);

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

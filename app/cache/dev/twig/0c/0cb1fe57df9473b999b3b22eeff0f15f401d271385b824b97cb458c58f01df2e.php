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
        $__internal_d3905ef14ba0bb9d7305f72e0c66863e04dbf8c4d97c41e8b3bf9902b6efa485 = $this->env->getExtension("native_profiler");
        $__internal_d3905ef14ba0bb9d7305f72e0c66863e04dbf8c4d97c41e8b3bf9902b6efa485->enter($__internal_d3905ef14ba0bb9d7305f72e0c66863e04dbf8c4d97c41e8b3bf9902b6efa485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3905ef14ba0bb9d7305f72e0c66863e04dbf8c4d97c41e8b3bf9902b6efa485->leave($__internal_d3905ef14ba0bb9d7305f72e0c66863e04dbf8c4d97c41e8b3bf9902b6efa485_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_77f877fed10026b08583dc0b78e3a9de8d59b5b5a964b1d1559bf14cd629c962 = $this->env->getExtension("native_profiler");
        $__internal_77f877fed10026b08583dc0b78e3a9de8d59b5b5a964b1d1559bf14cd629c962->enter($__internal_77f877fed10026b08583dc0b78e3a9de8d59b5b5a964b1d1559bf14cd629c962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_77f877fed10026b08583dc0b78e3a9de8d59b5b5a964b1d1559bf14cd629c962->leave($__internal_77f877fed10026b08583dc0b78e3a9de8d59b5b5a964b1d1559bf14cd629c962_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5afe2506148cb288acff77e029323cf6d54ffd336e30bb27faeb484f06e2780f = $this->env->getExtension("native_profiler");
        $__internal_5afe2506148cb288acff77e029323cf6d54ffd336e30bb27faeb484f06e2780f->enter($__internal_5afe2506148cb288acff77e029323cf6d54ffd336e30bb27faeb484f06e2780f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_5afe2506148cb288acff77e029323cf6d54ffd336e30bb27faeb484f06e2780f->leave($__internal_5afe2506148cb288acff77e029323cf6d54ffd336e30bb27faeb484f06e2780f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3e9bac8b25ceb8f494456ce01be70e49db461ad384a1783c8ba63c1b562d2af = $this->env->getExtension("native_profiler");
        $__internal_e3e9bac8b25ceb8f494456ce01be70e49db461ad384a1783c8ba63c1b562d2af->enter($__internal_e3e9bac8b25ceb8f494456ce01be70e49db461ad384a1783c8ba63c1b562d2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e3e9bac8b25ceb8f494456ce01be70e49db461ad384a1783c8ba63c1b562d2af->leave($__internal_e3e9bac8b25ceb8f494456ce01be70e49db461ad384a1783c8ba63c1b562d2af_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2aa4b595447f0608cb6b727f4e1a7877929a0e8cc2585898550bee843745706b = $this->env->getExtension("native_profiler");
        $__internal_2aa4b595447f0608cb6b727f4e1a7877929a0e8cc2585898550bee843745706b->enter($__internal_2aa4b595447f0608cb6b727f4e1a7877929a0e8cc2585898550bee843745706b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2aa4b595447f0608cb6b727f4e1a7877929a0e8cc2585898550bee843745706b->leave($__internal_2aa4b595447f0608cb6b727f4e1a7877929a0e8cc2585898550bee843745706b_prof);

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

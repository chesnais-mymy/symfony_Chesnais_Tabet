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
        $__internal_4134e7d85cdbb840d7d0166f9a815946dff316a7a1330dff7a372e39def46d2a = $this->env->getExtension("native_profiler");
        $__internal_4134e7d85cdbb840d7d0166f9a815946dff316a7a1330dff7a372e39def46d2a->enter($__internal_4134e7d85cdbb840d7d0166f9a815946dff316a7a1330dff7a372e39def46d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4134e7d85cdbb840d7d0166f9a815946dff316a7a1330dff7a372e39def46d2a->leave($__internal_4134e7d85cdbb840d7d0166f9a815946dff316a7a1330dff7a372e39def46d2a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d29edae3d7e3552cc5befb606acb488fb393b70002803e709c1e276c280a1e4 = $this->env->getExtension("native_profiler");
        $__internal_8d29edae3d7e3552cc5befb606acb488fb393b70002803e709c1e276c280a1e4->enter($__internal_8d29edae3d7e3552cc5befb606acb488fb393b70002803e709c1e276c280a1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_8d29edae3d7e3552cc5befb606acb488fb393b70002803e709c1e276c280a1e4->leave($__internal_8d29edae3d7e3552cc5befb606acb488fb393b70002803e709c1e276c280a1e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_80f12e4552fe2ad6d57512ad9adbebbf9b351f87ffa2151b808bac04ee4ad27e = $this->env->getExtension("native_profiler");
        $__internal_80f12e4552fe2ad6d57512ad9adbebbf9b351f87ffa2151b808bac04ee4ad27e->enter($__internal_80f12e4552fe2ad6d57512ad9adbebbf9b351f87ffa2151b808bac04ee4ad27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_80f12e4552fe2ad6d57512ad9adbebbf9b351f87ffa2151b808bac04ee4ad27e->leave($__internal_80f12e4552fe2ad6d57512ad9adbebbf9b351f87ffa2151b808bac04ee4ad27e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1a403b83c4213ed939323f692d3d15c728f949a1ab0107519a679201118d063 = $this->env->getExtension("native_profiler");
        $__internal_e1a403b83c4213ed939323f692d3d15c728f949a1ab0107519a679201118d063->enter($__internal_e1a403b83c4213ed939323f692d3d15c728f949a1ab0107519a679201118d063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e1a403b83c4213ed939323f692d3d15c728f949a1ab0107519a679201118d063->leave($__internal_e1a403b83c4213ed939323f692d3d15c728f949a1ab0107519a679201118d063_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_045120455c9b9bae3e105be10a3ef4953561218f0f6c92758c959df3afe0bfd1 = $this->env->getExtension("native_profiler");
        $__internal_045120455c9b9bae3e105be10a3ef4953561218f0f6c92758c959df3afe0bfd1->enter($__internal_045120455c9b9bae3e105be10a3ef4953561218f0f6c92758c959df3afe0bfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_045120455c9b9bae3e105be10a3ef4953561218f0f6c92758c959df3afe0bfd1->leave($__internal_045120455c9b9bae3e105be10a3ef4953561218f0f6c92758c959df3afe0bfd1_prof);

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

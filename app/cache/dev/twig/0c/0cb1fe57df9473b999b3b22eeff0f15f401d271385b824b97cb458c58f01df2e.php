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
        $__internal_f73b4aa4da9cf8cdefe372f52fa36e228d991329daadfd523fa7909ced3a45ae = $this->env->getExtension("native_profiler");
        $__internal_f73b4aa4da9cf8cdefe372f52fa36e228d991329daadfd523fa7909ced3a45ae->enter($__internal_f73b4aa4da9cf8cdefe372f52fa36e228d991329daadfd523fa7909ced3a45ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f73b4aa4da9cf8cdefe372f52fa36e228d991329daadfd523fa7909ced3a45ae->leave($__internal_f73b4aa4da9cf8cdefe372f52fa36e228d991329daadfd523fa7909ced3a45ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6c4a8b88dbe2c0f1ed2c005862ed9677bfaaf855cde029e99a35ff5a1752c56 = $this->env->getExtension("native_profiler");
        $__internal_d6c4a8b88dbe2c0f1ed2c005862ed9677bfaaf855cde029e99a35ff5a1752c56->enter($__internal_d6c4a8b88dbe2c0f1ed2c005862ed9677bfaaf855cde029e99a35ff5a1752c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d6c4a8b88dbe2c0f1ed2c005862ed9677bfaaf855cde029e99a35ff5a1752c56->leave($__internal_d6c4a8b88dbe2c0f1ed2c005862ed9677bfaaf855cde029e99a35ff5a1752c56_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_975e8061a8e9e0dee061fb2812142aaf8c3287f46dfa4807ef4da722946b6f2f = $this->env->getExtension("native_profiler");
        $__internal_975e8061a8e9e0dee061fb2812142aaf8c3287f46dfa4807ef4da722946b6f2f->enter($__internal_975e8061a8e9e0dee061fb2812142aaf8c3287f46dfa4807ef4da722946b6f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_975e8061a8e9e0dee061fb2812142aaf8c3287f46dfa4807ef4da722946b6f2f->leave($__internal_975e8061a8e9e0dee061fb2812142aaf8c3287f46dfa4807ef4da722946b6f2f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fb92de629a9c203507e3c3d687601e5f71d0085b3e488168b9d1dc58ab8e79b = $this->env->getExtension("native_profiler");
        $__internal_4fb92de629a9c203507e3c3d687601e5f71d0085b3e488168b9d1dc58ab8e79b->enter($__internal_4fb92de629a9c203507e3c3d687601e5f71d0085b3e488168b9d1dc58ab8e79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4fb92de629a9c203507e3c3d687601e5f71d0085b3e488168b9d1dc58ab8e79b->leave($__internal_4fb92de629a9c203507e3c3d687601e5f71d0085b3e488168b9d1dc58ab8e79b_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_fc4a75777b1c7e9dec2d02c57b278e5be81e7203cd7866ba5068d51612d42d8e = $this->env->getExtension("native_profiler");
        $__internal_fc4a75777b1c7e9dec2d02c57b278e5be81e7203cd7866ba5068d51612d42d8e->enter($__internal_fc4a75777b1c7e9dec2d02c57b278e5be81e7203cd7866ba5068d51612d42d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_fc4a75777b1c7e9dec2d02c57b278e5be81e7203cd7866ba5068d51612d42d8e->leave($__internal_fc4a75777b1c7e9dec2d02c57b278e5be81e7203cd7866ba5068d51612d42d8e_prof);

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

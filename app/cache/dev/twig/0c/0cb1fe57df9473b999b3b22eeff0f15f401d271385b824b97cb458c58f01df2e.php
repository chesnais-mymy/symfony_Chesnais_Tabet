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
        $__internal_1731d161e33f56936f08d4c0fdd165d4a5d134f0c29eff9f1b92f4a554a50be5 = $this->env->getExtension("native_profiler");
        $__internal_1731d161e33f56936f08d4c0fdd165d4a5d134f0c29eff9f1b92f4a554a50be5->enter($__internal_1731d161e33f56936f08d4c0fdd165d4a5d134f0c29eff9f1b92f4a554a50be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1731d161e33f56936f08d4c0fdd165d4a5d134f0c29eff9f1b92f4a554a50be5->leave($__internal_1731d161e33f56936f08d4c0fdd165d4a5d134f0c29eff9f1b92f4a554a50be5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf80c432683180a4bd4bb70056b78a58d04ba981ba5d4de0083a2abcf7742e46 = $this->env->getExtension("native_profiler");
        $__internal_cf80c432683180a4bd4bb70056b78a58d04ba981ba5d4de0083a2abcf7742e46->enter($__internal_cf80c432683180a4bd4bb70056b78a58d04ba981ba5d4de0083a2abcf7742e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_cf80c432683180a4bd4bb70056b78a58d04ba981ba5d4de0083a2abcf7742e46->leave($__internal_cf80c432683180a4bd4bb70056b78a58d04ba981ba5d4de0083a2abcf7742e46_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2992b8ab0fe5502629588873a55c65fa2d2a527951931241408ecb1509f34b2 = $this->env->getExtension("native_profiler");
        $__internal_b2992b8ab0fe5502629588873a55c65fa2d2a527951931241408ecb1509f34b2->enter($__internal_b2992b8ab0fe5502629588873a55c65fa2d2a527951931241408ecb1509f34b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_b2992b8ab0fe5502629588873a55c65fa2d2a527951931241408ecb1509f34b2->leave($__internal_b2992b8ab0fe5502629588873a55c65fa2d2a527951931241408ecb1509f34b2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1430942d8609f8b16d990eb932533a7387a12fef2a16ea28d1cd76eaf2c13b30 = $this->env->getExtension("native_profiler");
        $__internal_1430942d8609f8b16d990eb932533a7387a12fef2a16ea28d1cd76eaf2c13b30->enter($__internal_1430942d8609f8b16d990eb932533a7387a12fef2a16ea28d1cd76eaf2c13b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1430942d8609f8b16d990eb932533a7387a12fef2a16ea28d1cd76eaf2c13b30->leave($__internal_1430942d8609f8b16d990eb932533a7387a12fef2a16ea28d1cd76eaf2c13b30_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c779e38d3d7d75c4ff4b8257a72df5931e07a952dcb0a5e51c608334b8e0ecdf = $this->env->getExtension("native_profiler");
        $__internal_c779e38d3d7d75c4ff4b8257a72df5931e07a952dcb0a5e51c608334b8e0ecdf->enter($__internal_c779e38d3d7d75c4ff4b8257a72df5931e07a952dcb0a5e51c608334b8e0ecdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c779e38d3d7d75c4ff4b8257a72df5931e07a952dcb0a5e51c608334b8e0ecdf->leave($__internal_c779e38d3d7d75c4ff4b8257a72df5931e07a952dcb0a5e51c608334b8e0ecdf_prof);

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

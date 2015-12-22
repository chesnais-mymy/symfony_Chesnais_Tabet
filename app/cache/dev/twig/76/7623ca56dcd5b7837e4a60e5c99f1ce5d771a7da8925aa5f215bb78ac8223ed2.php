<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9e901c101465e7094ef7764abaade893f8c38ac277e24c51b60c8e65574d46f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f194cfcf92df3d9422a7b6d574570a0119e1e2df7d2c183b9258a90e3ede268b = $this->env->getExtension("native_profiler");
        $__internal_f194cfcf92df3d9422a7b6d574570a0119e1e2df7d2c183b9258a90e3ede268b->enter($__internal_f194cfcf92df3d9422a7b6d574570a0119e1e2df7d2c183b9258a90e3ede268b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f194cfcf92df3d9422a7b6d574570a0119e1e2df7d2c183b9258a90e3ede268b->leave($__internal_f194cfcf92df3d9422a7b6d574570a0119e1e2df7d2c183b9258a90e3ede268b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_46fbdff7a2917acc57803a3ee5c0a96c66872017e91f538c0c59a2b48ec1909a = $this->env->getExtension("native_profiler");
        $__internal_46fbdff7a2917acc57803a3ee5c0a96c66872017e91f538c0c59a2b48ec1909a->enter($__internal_46fbdff7a2917acc57803a3ee5c0a96c66872017e91f538c0c59a2b48ec1909a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_46fbdff7a2917acc57803a3ee5c0a96c66872017e91f538c0c59a2b48ec1909a->leave($__internal_46fbdff7a2917acc57803a3ee5c0a96c66872017e91f538c0c59a2b48ec1909a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

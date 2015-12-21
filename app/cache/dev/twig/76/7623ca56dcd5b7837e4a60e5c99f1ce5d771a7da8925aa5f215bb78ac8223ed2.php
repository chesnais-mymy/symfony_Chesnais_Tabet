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
        $__internal_f8589a8ba055e479eabae587d8330c228574af61b74ea793eac903a1f7296c2e = $this->env->getExtension("native_profiler");
        $__internal_f8589a8ba055e479eabae587d8330c228574af61b74ea793eac903a1f7296c2e->enter($__internal_f8589a8ba055e479eabae587d8330c228574af61b74ea793eac903a1f7296c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f8589a8ba055e479eabae587d8330c228574af61b74ea793eac903a1f7296c2e->leave($__internal_f8589a8ba055e479eabae587d8330c228574af61b74ea793eac903a1f7296c2e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4d4a782652aa4c2035befbfb866e210fa3684e9c17a16b8b07e38ff3b79d104 = $this->env->getExtension("native_profiler");
        $__internal_a4d4a782652aa4c2035befbfb866e210fa3684e9c17a16b8b07e38ff3b79d104->enter($__internal_a4d4a782652aa4c2035befbfb866e210fa3684e9c17a16b8b07e38ff3b79d104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a4d4a782652aa4c2035befbfb866e210fa3684e9c17a16b8b07e38ff3b79d104->leave($__internal_a4d4a782652aa4c2035befbfb866e210fa3684e9c17a16b8b07e38ff3b79d104_prof);

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

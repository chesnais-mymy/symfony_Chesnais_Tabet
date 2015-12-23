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
        $__internal_ec005610a21fb80a2c1b1c3e7ad53d7a6a9bffe00c26b0008ab638d19d9a38c3 = $this->env->getExtension("native_profiler");
        $__internal_ec005610a21fb80a2c1b1c3e7ad53d7a6a9bffe00c26b0008ab638d19d9a38c3->enter($__internal_ec005610a21fb80a2c1b1c3e7ad53d7a6a9bffe00c26b0008ab638d19d9a38c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ec005610a21fb80a2c1b1c3e7ad53d7a6a9bffe00c26b0008ab638d19d9a38c3->leave($__internal_ec005610a21fb80a2c1b1c3e7ad53d7a6a9bffe00c26b0008ab638d19d9a38c3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_49565a6f05039bb0bd8133f00b11fd04b219838d9a927f3266676cb0d0dc4434 = $this->env->getExtension("native_profiler");
        $__internal_49565a6f05039bb0bd8133f00b11fd04b219838d9a927f3266676cb0d0dc4434->enter($__internal_49565a6f05039bb0bd8133f00b11fd04b219838d9a927f3266676cb0d0dc4434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_49565a6f05039bb0bd8133f00b11fd04b219838d9a927f3266676cb0d0dc4434->leave($__internal_49565a6f05039bb0bd8133f00b11fd04b219838d9a927f3266676cb0d0dc4434_prof);

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

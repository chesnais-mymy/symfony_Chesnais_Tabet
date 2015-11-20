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
        $__internal_01d7797855b7c9858aea97e69b4d2722998549d37feb6945c5ea424924727d7e = $this->env->getExtension("native_profiler");
        $__internal_01d7797855b7c9858aea97e69b4d2722998549d37feb6945c5ea424924727d7e->enter($__internal_01d7797855b7c9858aea97e69b4d2722998549d37feb6945c5ea424924727d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_01d7797855b7c9858aea97e69b4d2722998549d37feb6945c5ea424924727d7e->leave($__internal_01d7797855b7c9858aea97e69b4d2722998549d37feb6945c5ea424924727d7e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dff9b535420f693133d6bf427a330af08000006f1da5b31d6e347bf9075e7ac1 = $this->env->getExtension("native_profiler");
        $__internal_dff9b535420f693133d6bf427a330af08000006f1da5b31d6e347bf9075e7ac1->enter($__internal_dff9b535420f693133d6bf427a330af08000006f1da5b31d6e347bf9075e7ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dff9b535420f693133d6bf427a330af08000006f1da5b31d6e347bf9075e7ac1->leave($__internal_dff9b535420f693133d6bf427a330af08000006f1da5b31d6e347bf9075e7ac1_prof);

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

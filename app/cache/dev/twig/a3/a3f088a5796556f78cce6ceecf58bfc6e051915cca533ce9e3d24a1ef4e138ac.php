<?php

/* EsieaBlogBundle:Default:index.html.twig */
class __TwigTemplate_e6ae9ae3f05cb720ed53d4df59f21c04892299d5ce004c5735f99507ff55939e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cff68c8975f742dc0ab85d5830ad3d173b56a6d07ebb1870b7438a5ecac041b0 = $this->env->getExtension("native_profiler");
        $__internal_cff68c8975f742dc0ab85d5830ad3d173b56a6d07ebb1870b7438a5ecac041b0->enter($__internal_cff68c8975f742dc0ab85d5830ad3d173b56a6d07ebb1870b7438a5ecac041b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_cff68c8975f742dc0ab85d5830ad3d173b56a6d07ebb1870b7438a5ecac041b0->leave($__internal_cff68c8975f742dc0ab85d5830ad3d173b56a6d07ebb1870b7438a5ecac041b0_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */

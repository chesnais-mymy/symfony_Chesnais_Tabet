<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5099d25cdb0b4e23e018d467dff8c2348f621323b6e5b15892f6617bcd9cfe50 extends Twig_Template
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
        $__internal_459e28a02c394b8b02ebb5cf83e7a88d0bb31d31d92757cd2955ed698a1abe29 = $this->env->getExtension("native_profiler");
        $__internal_459e28a02c394b8b02ebb5cf83e7a88d0bb31d31d92757cd2955ed698a1abe29->enter($__internal_459e28a02c394b8b02ebb5cf83e7a88d0bb31d31d92757cd2955ed698a1abe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_459e28a02c394b8b02ebb5cf83e7a88d0bb31d31d92757cd2955ed698a1abe29->leave($__internal_459e28a02c394b8b02ebb5cf83e7a88d0bb31d31d92757cd2955ed698a1abe29_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

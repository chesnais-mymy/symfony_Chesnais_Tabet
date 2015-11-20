<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_20030189485c3759504efe6860150ebcf5c70aa013dc6b9be528b1fc4443e991 extends Twig_Template
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
        $__internal_48d94dfca5f43601247f420267c5486fce2c68d1a82577c370ccefd24c72fedd = $this->env->getExtension("native_profiler");
        $__internal_48d94dfca5f43601247f420267c5486fce2c68d1a82577c370ccefd24c72fedd->enter($__internal_48d94dfca5f43601247f420267c5486fce2c68d1a82577c370ccefd24c72fedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_48d94dfca5f43601247f420267c5486fce2c68d1a82577c370ccefd24c72fedd->leave($__internal_48d94dfca5f43601247f420267c5486fce2c68d1a82577c370ccefd24c72fedd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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

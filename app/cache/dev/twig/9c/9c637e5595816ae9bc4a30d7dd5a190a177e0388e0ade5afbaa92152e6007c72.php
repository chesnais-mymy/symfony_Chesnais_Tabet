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
        $__internal_948d8f51dffa977f13e4624e8c1ea19d6f1899e57d00fd531103aeaa7ad6694d = $this->env->getExtension("native_profiler");
        $__internal_948d8f51dffa977f13e4624e8c1ea19d6f1899e57d00fd531103aeaa7ad6694d->enter($__internal_948d8f51dffa977f13e4624e8c1ea19d6f1899e57d00fd531103aeaa7ad6694d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_948d8f51dffa977f13e4624e8c1ea19d6f1899e57d00fd531103aeaa7ad6694d->leave($__internal_948d8f51dffa977f13e4624e8c1ea19d6f1899e57d00fd531103aeaa7ad6694d_prof);

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

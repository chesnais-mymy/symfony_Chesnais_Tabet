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
        $__internal_843dec868c5cc39935784b1dfde84df83f82bd4d34a475f5f277de69b4c2441f = $this->env->getExtension("native_profiler");
        $__internal_843dec868c5cc39935784b1dfde84df83f82bd4d34a475f5f277de69b4c2441f->enter($__internal_843dec868c5cc39935784b1dfde84df83f82bd4d34a475f5f277de69b4c2441f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_843dec868c5cc39935784b1dfde84df83f82bd4d34a475f5f277de69b4c2441f->leave($__internal_843dec868c5cc39935784b1dfde84df83f82bd4d34a475f5f277de69b4c2441f_prof);

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

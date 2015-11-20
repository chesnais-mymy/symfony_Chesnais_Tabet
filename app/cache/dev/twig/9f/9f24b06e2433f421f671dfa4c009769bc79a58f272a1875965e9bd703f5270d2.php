<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_905c1a6a18317a70c781c95d5cb773b285057af325101058dddd534d97303940 extends Twig_Template
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
        $__internal_5123a9b9ee287aa36079979053886d3e501ce4a1f3e0ef8004353998fd758421 = $this->env->getExtension("native_profiler");
        $__internal_5123a9b9ee287aa36079979053886d3e501ce4a1f3e0ef8004353998fd758421->enter($__internal_5123a9b9ee287aa36079979053886d3e501ce4a1f3e0ef8004353998fd758421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5123a9b9ee287aa36079979053886d3e501ce4a1f3e0ef8004353998fd758421->leave($__internal_5123a9b9ee287aa36079979053886d3e501ce4a1f3e0ef8004353998fd758421_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */

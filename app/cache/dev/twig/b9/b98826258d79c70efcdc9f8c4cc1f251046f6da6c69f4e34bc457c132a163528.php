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
        $__internal_ed69d27ca66a9296a4433c31dff7266eccd5fb06b062bd3fd15bfd9f8603c1fa = $this->env->getExtension("native_profiler");
        $__internal_ed69d27ca66a9296a4433c31dff7266eccd5fb06b062bd3fd15bfd9f8603c1fa->enter($__internal_ed69d27ca66a9296a4433c31dff7266eccd5fb06b062bd3fd15bfd9f8603c1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ed69d27ca66a9296a4433c31dff7266eccd5fb06b062bd3fd15bfd9f8603c1fa->leave($__internal_ed69d27ca66a9296a4433c31dff7266eccd5fb06b062bd3fd15bfd9f8603c1fa_prof);

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

<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_a02a2bec97026f4d802a37d0498ff959a50c5eb698460b84c5a82431e785f8f0 extends Twig_Template
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
        $__internal_8c34a0d67b76adcbbc73bf93437c9dc554d3b390d4ecf9282e54f07778fca524 = $this->env->getExtension("native_profiler");
        $__internal_8c34a0d67b76adcbbc73bf93437c9dc554d3b390d4ecf9282e54f07778fca524->enter($__internal_8c34a0d67b76adcbbc73bf93437c9dc554d3b390d4ecf9282e54f07778fca524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8c34a0d67b76adcbbc73bf93437c9dc554d3b390d4ecf9282e54f07778fca524->leave($__internal_8c34a0d67b76adcbbc73bf93437c9dc554d3b390d4ecf9282e54f07778fca524_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
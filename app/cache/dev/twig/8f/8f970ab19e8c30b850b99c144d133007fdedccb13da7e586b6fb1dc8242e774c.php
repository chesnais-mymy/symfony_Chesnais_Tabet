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
        $__internal_a93ac9cd817b3b8f0759f1ec058f1a3c4a7f845abab7e0ffc195c426a86a40fd = $this->env->getExtension("native_profiler");
        $__internal_a93ac9cd817b3b8f0759f1ec058f1a3c4a7f845abab7e0ffc195c426a86a40fd->enter($__internal_a93ac9cd817b3b8f0759f1ec058f1a3c4a7f845abab7e0ffc195c426a86a40fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_a93ac9cd817b3b8f0759f1ec058f1a3c4a7f845abab7e0ffc195c426a86a40fd->leave($__internal_a93ac9cd817b3b8f0759f1ec058f1a3c4a7f845abab7e0ffc195c426a86a40fd_prof);

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

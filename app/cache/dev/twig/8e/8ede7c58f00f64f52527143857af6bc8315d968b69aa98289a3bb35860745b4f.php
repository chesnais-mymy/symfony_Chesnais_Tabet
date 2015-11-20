<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7bb128e62ad1c97159574c9d028b960f8dd23b2cd574c47e4a52a8dba9a898d8 extends Twig_Template
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
        $__internal_1b11ab65a4575ffcc432c769d0cdbf764cdf6de4388c10cf727460de63555551 = $this->env->getExtension("native_profiler");
        $__internal_1b11ab65a4575ffcc432c769d0cdbf764cdf6de4388c10cf727460de63555551->enter($__internal_1b11ab65a4575ffcc432c769d0cdbf764cdf6de4388c10cf727460de63555551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1b11ab65a4575ffcc432c769d0cdbf764cdf6de4388c10cf727460de63555551->leave($__internal_1b11ab65a4575ffcc432c769d0cdbf764cdf6de4388c10cf727460de63555551_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

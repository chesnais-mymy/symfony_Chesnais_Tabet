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
        $__internal_f5675ab95a4756b27a849f43d95f166a5801e1f2ec862214ba280a8b4a2b09d0 = $this->env->getExtension("native_profiler");
        $__internal_f5675ab95a4756b27a849f43d95f166a5801e1f2ec862214ba280a8b4a2b09d0->enter($__internal_f5675ab95a4756b27a849f43d95f166a5801e1f2ec862214ba280a8b4a2b09d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_f5675ab95a4756b27a849f43d95f166a5801e1f2ec862214ba280a8b4a2b09d0->leave($__internal_f5675ab95a4756b27a849f43d95f166a5801e1f2ec862214ba280a8b4a2b09d0_prof);

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

<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_95a66f37d696a3f74faca71670206e2818aafc07893d521b8b8689bbc1997f58 extends Twig_Template
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
        $__internal_b6f6ae2af4855443ec83ae3b0669390c465733d7e58aa454c8fe4d9c0c348f7d = $this->env->getExtension("native_profiler");
        $__internal_b6f6ae2af4855443ec83ae3b0669390c465733d7e58aa454c8fe4d9c0c348f7d->enter($__internal_b6f6ae2af4855443ec83ae3b0669390c465733d7e58aa454c8fe4d9c0c348f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b6f6ae2af4855443ec83ae3b0669390c465733d7e58aa454c8fe4d9c0c348f7d->leave($__internal_b6f6ae2af4855443ec83ae3b0669390c465733d7e58aa454c8fe4d9c0c348f7d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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

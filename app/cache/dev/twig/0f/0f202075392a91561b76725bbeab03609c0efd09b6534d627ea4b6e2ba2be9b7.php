<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c33ef36fdd8a24a31d50a607bfcce7e7a43e0cc43b5b51597203cf044627d510 extends Twig_Template
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
        $__internal_6c5d471e000edcc566a216d457289ed8fdd8a06908a6c497fc6baa90806fdcf9 = $this->env->getExtension("native_profiler");
        $__internal_6c5d471e000edcc566a216d457289ed8fdd8a06908a6c497fc6baa90806fdcf9->enter($__internal_6c5d471e000edcc566a216d457289ed8fdd8a06908a6c497fc6baa90806fdcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6c5d471e000edcc566a216d457289ed8fdd8a06908a6c497fc6baa90806fdcf9->leave($__internal_6c5d471e000edcc566a216d457289ed8fdd8a06908a6c497fc6baa90806fdcf9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

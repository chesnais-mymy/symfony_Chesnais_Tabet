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
        $__internal_a650779974bde29d0f6a9f5e1eac0d4199a040f4689fb781554eabd3b2fba584 = $this->env->getExtension("native_profiler");
        $__internal_a650779974bde29d0f6a9f5e1eac0d4199a040f4689fb781554eabd3b2fba584->enter($__internal_a650779974bde29d0f6a9f5e1eac0d4199a040f4689fb781554eabd3b2fba584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a650779974bde29d0f6a9f5e1eac0d4199a040f4689fb781554eabd3b2fba584->leave($__internal_a650779974bde29d0f6a9f5e1eac0d4199a040f4689fb781554eabd3b2fba584_prof);

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

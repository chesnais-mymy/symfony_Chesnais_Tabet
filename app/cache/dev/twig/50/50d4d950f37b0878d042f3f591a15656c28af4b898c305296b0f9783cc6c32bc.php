<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_062ebd8b34429e57aa6590c05f72abe03f5340bb85cfebbc3d0c432fd83ef139 extends Twig_Template
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
        $__internal_3650477b7b3e6837f9721f536ad19c875ea1846e750af210b7946b01dcce3429 = $this->env->getExtension("native_profiler");
        $__internal_3650477b7b3e6837f9721f536ad19c875ea1846e750af210b7946b01dcce3429->enter($__internal_3650477b7b3e6837f9721f536ad19c875ea1846e750af210b7946b01dcce3429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3650477b7b3e6837f9721f536ad19c875ea1846e750af210b7946b01dcce3429->leave($__internal_3650477b7b3e6837f9721f536ad19c875ea1846e750af210b7946b01dcce3429_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

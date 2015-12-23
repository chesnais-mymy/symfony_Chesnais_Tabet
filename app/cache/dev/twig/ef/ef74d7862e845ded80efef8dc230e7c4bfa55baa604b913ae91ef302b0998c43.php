<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ca7fd11a0a70deb8d997950d93692f54ab4ed05587150df4929b430092f937a0 extends Twig_Template
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
        $__internal_999271892c978c7e06239d9f142e0a937713ddd773e273bf6b088293f0a53268 = $this->env->getExtension("native_profiler");
        $__internal_999271892c978c7e06239d9f142e0a937713ddd773e273bf6b088293f0a53268->enter($__internal_999271892c978c7e06239d9f142e0a937713ddd773e273bf6b088293f0a53268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_999271892c978c7e06239d9f142e0a937713ddd773e273bf6b088293f0a53268->leave($__internal_999271892c978c7e06239d9f142e0a937713ddd773e273bf6b088293f0a53268_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */

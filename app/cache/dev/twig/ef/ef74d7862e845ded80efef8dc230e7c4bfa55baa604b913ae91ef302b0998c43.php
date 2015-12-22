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
        $__internal_506960eccbd2b117740469cfd299374a8d02014abe721931599ff99a6d0fc0b4 = $this->env->getExtension("native_profiler");
        $__internal_506960eccbd2b117740469cfd299374a8d02014abe721931599ff99a6d0fc0b4->enter($__internal_506960eccbd2b117740469cfd299374a8d02014abe721931599ff99a6d0fc0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_506960eccbd2b117740469cfd299374a8d02014abe721931599ff99a6d0fc0b4->leave($__internal_506960eccbd2b117740469cfd299374a8d02014abe721931599ff99a6d0fc0b4_prof);

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

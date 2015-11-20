<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fc6dc401e430e2047ad554c79db48e57f0c9ed16ff9834247f4a6f98855d91f3 extends Twig_Template
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
        $__internal_c9aaaf1baa400280718847ac1adbb62af4921a8da58c720bfc242a8ee905dc3c = $this->env->getExtension("native_profiler");
        $__internal_c9aaaf1baa400280718847ac1adbb62af4921a8da58c720bfc242a8ee905dc3c->enter($__internal_c9aaaf1baa400280718847ac1adbb62af4921a8da58c720bfc242a8ee905dc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c9aaaf1baa400280718847ac1adbb62af4921a8da58c720bfc242a8ee905dc3c->leave($__internal_c9aaaf1baa400280718847ac1adbb62af4921a8da58c720bfc242a8ee905dc3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */

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
        $__internal_f05e7a35d2e85adf68b1658c781d04583b9f790941c04dc690547058e38a3155 = $this->env->getExtension("native_profiler");
        $__internal_f05e7a35d2e85adf68b1658c781d04583b9f790941c04dc690547058e38a3155->enter($__internal_f05e7a35d2e85adf68b1658c781d04583b9f790941c04dc690547058e38a3155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f05e7a35d2e85adf68b1658c781d04583b9f790941c04dc690547058e38a3155->leave($__internal_f05e7a35d2e85adf68b1658c781d04583b9f790941c04dc690547058e38a3155_prof);

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

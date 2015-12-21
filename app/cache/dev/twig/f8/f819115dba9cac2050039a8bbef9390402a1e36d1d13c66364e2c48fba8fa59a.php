<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_42f176ae15cda6230c4595611df50c6d9479a6739c98e29703a44789f039aed5 extends Twig_Template
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
        $__internal_b0f4067ce1a3cc906faea0ae4f627b4a192c2cb6337a8179ff7d1cce95beaffa = $this->env->getExtension("native_profiler");
        $__internal_b0f4067ce1a3cc906faea0ae4f627b4a192c2cb6337a8179ff7d1cce95beaffa->enter($__internal_b0f4067ce1a3cc906faea0ae4f627b4a192c2cb6337a8179ff7d1cce95beaffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b0f4067ce1a3cc906faea0ae4f627b4a192c2cb6337a8179ff7d1cce95beaffa->leave($__internal_b0f4067ce1a3cc906faea0ae4f627b4a192c2cb6337a8179ff7d1cce95beaffa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */

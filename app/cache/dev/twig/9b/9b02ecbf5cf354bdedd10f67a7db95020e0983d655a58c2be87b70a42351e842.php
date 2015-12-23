<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9811ab563f419172df094f76e04f73e4b730859d749469573ff012c93d4f88f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a22790e0bbc7bfcfc41443b1d96fcd65041880d77f43ea01cdb5c0b3de4ae71c = $this->env->getExtension("native_profiler");
        $__internal_a22790e0bbc7bfcfc41443b1d96fcd65041880d77f43ea01cdb5c0b3de4ae71c->enter($__internal_a22790e0bbc7bfcfc41443b1d96fcd65041880d77f43ea01cdb5c0b3de4ae71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a22790e0bbc7bfcfc41443b1d96fcd65041880d77f43ea01cdb5c0b3de4ae71c->leave($__internal_a22790e0bbc7bfcfc41443b1d96fcd65041880d77f43ea01cdb5c0b3de4ae71c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04b49075b8c2bc46c408945f7a00582083ad577fdab3e8497239f01fcdfde47d = $this->env->getExtension("native_profiler");
        $__internal_04b49075b8c2bc46c408945f7a00582083ad577fdab3e8497239f01fcdfde47d->enter($__internal_04b49075b8c2bc46c408945f7a00582083ad577fdab3e8497239f01fcdfde47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_04b49075b8c2bc46c408945f7a00582083ad577fdab3e8497239f01fcdfde47d->leave($__internal_04b49075b8c2bc46c408945f7a00582083ad577fdab3e8497239f01fcdfde47d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_17e9ea8fb6e9b7bbe6faa940f422d919ecaf7a8259a91a3a21f9017a4db61897 = $this->env->getExtension("native_profiler");
        $__internal_17e9ea8fb6e9b7bbe6faa940f422d919ecaf7a8259a91a3a21f9017a4db61897->enter($__internal_17e9ea8fb6e9b7bbe6faa940f422d919ecaf7a8259a91a3a21f9017a4db61897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_17e9ea8fb6e9b7bbe6faa940f422d919ecaf7a8259a91a3a21f9017a4db61897->leave($__internal_17e9ea8fb6e9b7bbe6faa940f422d919ecaf7a8259a91a3a21f9017a4db61897_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d274dcf97a0b707ff83c95521001dbeaa4e248c4fa6094a52fde1f1bfc41e30 = $this->env->getExtension("native_profiler");
        $__internal_7d274dcf97a0b707ff83c95521001dbeaa4e248c4fa6094a52fde1f1bfc41e30->enter($__internal_7d274dcf97a0b707ff83c95521001dbeaa4e248c4fa6094a52fde1f1bfc41e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7d274dcf97a0b707ff83c95521001dbeaa4e248c4fa6094a52fde1f1bfc41e30->leave($__internal_7d274dcf97a0b707ff83c95521001dbeaa4e248c4fa6094a52fde1f1bfc41e30_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */

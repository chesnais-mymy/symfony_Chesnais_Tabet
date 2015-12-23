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
        $__internal_0d7af5987fcb5f126f613b69d03aefa81ce0e21254ea5ee8b8a106a5b80876a6 = $this->env->getExtension("native_profiler");
        $__internal_0d7af5987fcb5f126f613b69d03aefa81ce0e21254ea5ee8b8a106a5b80876a6->enter($__internal_0d7af5987fcb5f126f613b69d03aefa81ce0e21254ea5ee8b8a106a5b80876a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d7af5987fcb5f126f613b69d03aefa81ce0e21254ea5ee8b8a106a5b80876a6->leave($__internal_0d7af5987fcb5f126f613b69d03aefa81ce0e21254ea5ee8b8a106a5b80876a6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f24c198f195338ec237a87ff5e39f0e79db5cfa228a34f62238c624f9a371961 = $this->env->getExtension("native_profiler");
        $__internal_f24c198f195338ec237a87ff5e39f0e79db5cfa228a34f62238c624f9a371961->enter($__internal_f24c198f195338ec237a87ff5e39f0e79db5cfa228a34f62238c624f9a371961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f24c198f195338ec237a87ff5e39f0e79db5cfa228a34f62238c624f9a371961->leave($__internal_f24c198f195338ec237a87ff5e39f0e79db5cfa228a34f62238c624f9a371961_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b4cca0121007b4d20bf1be9ba227e4bdaa6077eca5d6b923498f7299f598940 = $this->env->getExtension("native_profiler");
        $__internal_4b4cca0121007b4d20bf1be9ba227e4bdaa6077eca5d6b923498f7299f598940->enter($__internal_4b4cca0121007b4d20bf1be9ba227e4bdaa6077eca5d6b923498f7299f598940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b4cca0121007b4d20bf1be9ba227e4bdaa6077eca5d6b923498f7299f598940->leave($__internal_4b4cca0121007b4d20bf1be9ba227e4bdaa6077eca5d6b923498f7299f598940_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_78c1adf090e0157a07b52dfc217e663dae8f41843f31f7c7feeb3cf1ed975713 = $this->env->getExtension("native_profiler");
        $__internal_78c1adf090e0157a07b52dfc217e663dae8f41843f31f7c7feeb3cf1ed975713->enter($__internal_78c1adf090e0157a07b52dfc217e663dae8f41843f31f7c7feeb3cf1ed975713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_78c1adf090e0157a07b52dfc217e663dae8f41843f31f7c7feeb3cf1ed975713->leave($__internal_78c1adf090e0157a07b52dfc217e663dae8f41843f31f7c7feeb3cf1ed975713_prof);

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

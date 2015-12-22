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
        $__internal_b30ec2755d1fb3c01a2e4616e719d54616c7521401d1969e4e54596f2a8029a6 = $this->env->getExtension("native_profiler");
        $__internal_b30ec2755d1fb3c01a2e4616e719d54616c7521401d1969e4e54596f2a8029a6->enter($__internal_b30ec2755d1fb3c01a2e4616e719d54616c7521401d1969e4e54596f2a8029a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b30ec2755d1fb3c01a2e4616e719d54616c7521401d1969e4e54596f2a8029a6->leave($__internal_b30ec2755d1fb3c01a2e4616e719d54616c7521401d1969e4e54596f2a8029a6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4ccd54c4e1b535b3815b8b0200137cfb0f8a60d5da4b5b0e8218b2355568865 = $this->env->getExtension("native_profiler");
        $__internal_b4ccd54c4e1b535b3815b8b0200137cfb0f8a60d5da4b5b0e8218b2355568865->enter($__internal_b4ccd54c4e1b535b3815b8b0200137cfb0f8a60d5da4b5b0e8218b2355568865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b4ccd54c4e1b535b3815b8b0200137cfb0f8a60d5da4b5b0e8218b2355568865->leave($__internal_b4ccd54c4e1b535b3815b8b0200137cfb0f8a60d5da4b5b0e8218b2355568865_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_55bf52fd8b949e6455a4dc419b74874d60ebf4215f69e5ebbb93fa84dfd17245 = $this->env->getExtension("native_profiler");
        $__internal_55bf52fd8b949e6455a4dc419b74874d60ebf4215f69e5ebbb93fa84dfd17245->enter($__internal_55bf52fd8b949e6455a4dc419b74874d60ebf4215f69e5ebbb93fa84dfd17245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_55bf52fd8b949e6455a4dc419b74874d60ebf4215f69e5ebbb93fa84dfd17245->leave($__internal_55bf52fd8b949e6455a4dc419b74874d60ebf4215f69e5ebbb93fa84dfd17245_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d80ac7ebd5c0cecd53f94c1e3e44be96fb211755130d56078530bf701c51d117 = $this->env->getExtension("native_profiler");
        $__internal_d80ac7ebd5c0cecd53f94c1e3e44be96fb211755130d56078530bf701c51d117->enter($__internal_d80ac7ebd5c0cecd53f94c1e3e44be96fb211755130d56078530bf701c51d117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d80ac7ebd5c0cecd53f94c1e3e44be96fb211755130d56078530bf701c51d117->leave($__internal_d80ac7ebd5c0cecd53f94c1e3e44be96fb211755130d56078530bf701c51d117_prof);

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

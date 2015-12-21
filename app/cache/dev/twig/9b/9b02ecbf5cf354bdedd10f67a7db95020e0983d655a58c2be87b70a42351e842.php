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
        $__internal_25b4bb692c179705500570f62ddfb4520113ee26dbbf208f0cffa9c3fd52e70b = $this->env->getExtension("native_profiler");
        $__internal_25b4bb692c179705500570f62ddfb4520113ee26dbbf208f0cffa9c3fd52e70b->enter($__internal_25b4bb692c179705500570f62ddfb4520113ee26dbbf208f0cffa9c3fd52e70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25b4bb692c179705500570f62ddfb4520113ee26dbbf208f0cffa9c3fd52e70b->leave($__internal_25b4bb692c179705500570f62ddfb4520113ee26dbbf208f0cffa9c3fd52e70b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c8671c58ab2e7360fd2acad61431c168df9d8177120cd771d55ca8b4727a9a6 = $this->env->getExtension("native_profiler");
        $__internal_6c8671c58ab2e7360fd2acad61431c168df9d8177120cd771d55ca8b4727a9a6->enter($__internal_6c8671c58ab2e7360fd2acad61431c168df9d8177120cd771d55ca8b4727a9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6c8671c58ab2e7360fd2acad61431c168df9d8177120cd771d55ca8b4727a9a6->leave($__internal_6c8671c58ab2e7360fd2acad61431c168df9d8177120cd771d55ca8b4727a9a6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c8da751468b3e15f7d77f9369ae76e539036da5c2e5861393bded0f5ab63c3e = $this->env->getExtension("native_profiler");
        $__internal_7c8da751468b3e15f7d77f9369ae76e539036da5c2e5861393bded0f5ab63c3e->enter($__internal_7c8da751468b3e15f7d77f9369ae76e539036da5c2e5861393bded0f5ab63c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7c8da751468b3e15f7d77f9369ae76e539036da5c2e5861393bded0f5ab63c3e->leave($__internal_7c8da751468b3e15f7d77f9369ae76e539036da5c2e5861393bded0f5ab63c3e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c64eae91b638d6f0246e9763cf8768347306c9a09d6e24086ea2f55b50ec140a = $this->env->getExtension("native_profiler");
        $__internal_c64eae91b638d6f0246e9763cf8768347306c9a09d6e24086ea2f55b50ec140a->enter($__internal_c64eae91b638d6f0246e9763cf8768347306c9a09d6e24086ea2f55b50ec140a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c64eae91b638d6f0246e9763cf8768347306c9a09d6e24086ea2f55b50ec140a->leave($__internal_c64eae91b638d6f0246e9763cf8768347306c9a09d6e24086ea2f55b50ec140a_prof);

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

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
        $__internal_7aa76e372880bcceed561eeadf94312b0ed1e0cd08beaed13d955b87854f307d = $this->env->getExtension("native_profiler");
        $__internal_7aa76e372880bcceed561eeadf94312b0ed1e0cd08beaed13d955b87854f307d->enter($__internal_7aa76e372880bcceed561eeadf94312b0ed1e0cd08beaed13d955b87854f307d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aa76e372880bcceed561eeadf94312b0ed1e0cd08beaed13d955b87854f307d->leave($__internal_7aa76e372880bcceed561eeadf94312b0ed1e0cd08beaed13d955b87854f307d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1945f12c11deb141f795c3a06567424263c879d1038e9cb0c11b759f6ccba715 = $this->env->getExtension("native_profiler");
        $__internal_1945f12c11deb141f795c3a06567424263c879d1038e9cb0c11b759f6ccba715->enter($__internal_1945f12c11deb141f795c3a06567424263c879d1038e9cb0c11b759f6ccba715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1945f12c11deb141f795c3a06567424263c879d1038e9cb0c11b759f6ccba715->leave($__internal_1945f12c11deb141f795c3a06567424263c879d1038e9cb0c11b759f6ccba715_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fac57a4dc3db0449a0b76fc1f6c1b19186a1a73a668e6f4a3b24e52a48939990 = $this->env->getExtension("native_profiler");
        $__internal_fac57a4dc3db0449a0b76fc1f6c1b19186a1a73a668e6f4a3b24e52a48939990->enter($__internal_fac57a4dc3db0449a0b76fc1f6c1b19186a1a73a668e6f4a3b24e52a48939990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fac57a4dc3db0449a0b76fc1f6c1b19186a1a73a668e6f4a3b24e52a48939990->leave($__internal_fac57a4dc3db0449a0b76fc1f6c1b19186a1a73a668e6f4a3b24e52a48939990_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_98408f18d2ff1c55e1c2b22c544fd2b0050788260a342ffe215b493dbc0f464a = $this->env->getExtension("native_profiler");
        $__internal_98408f18d2ff1c55e1c2b22c544fd2b0050788260a342ffe215b493dbc0f464a->enter($__internal_98408f18d2ff1c55e1c2b22c544fd2b0050788260a342ffe215b493dbc0f464a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_98408f18d2ff1c55e1c2b22c544fd2b0050788260a342ffe215b493dbc0f464a->leave($__internal_98408f18d2ff1c55e1c2b22c544fd2b0050788260a342ffe215b493dbc0f464a_prof);

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

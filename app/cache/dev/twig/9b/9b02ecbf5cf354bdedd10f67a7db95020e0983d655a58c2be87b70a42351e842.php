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
        $__internal_8eff304ef090864b476354d25695ccd6097b0312fe432d4ee665e117117ceba1 = $this->env->getExtension("native_profiler");
        $__internal_8eff304ef090864b476354d25695ccd6097b0312fe432d4ee665e117117ceba1->enter($__internal_8eff304ef090864b476354d25695ccd6097b0312fe432d4ee665e117117ceba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eff304ef090864b476354d25695ccd6097b0312fe432d4ee665e117117ceba1->leave($__internal_8eff304ef090864b476354d25695ccd6097b0312fe432d4ee665e117117ceba1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c2160e2e1bd51b9dded35bbc0249d86149beae36244bda835eb73a05625774a = $this->env->getExtension("native_profiler");
        $__internal_7c2160e2e1bd51b9dded35bbc0249d86149beae36244bda835eb73a05625774a->enter($__internal_7c2160e2e1bd51b9dded35bbc0249d86149beae36244bda835eb73a05625774a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7c2160e2e1bd51b9dded35bbc0249d86149beae36244bda835eb73a05625774a->leave($__internal_7c2160e2e1bd51b9dded35bbc0249d86149beae36244bda835eb73a05625774a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f75e4443ff8d3a8e4cb0f32a82acb0930e4209ed5f6ef5385e527aab6e9ab071 = $this->env->getExtension("native_profiler");
        $__internal_f75e4443ff8d3a8e4cb0f32a82acb0930e4209ed5f6ef5385e527aab6e9ab071->enter($__internal_f75e4443ff8d3a8e4cb0f32a82acb0930e4209ed5f6ef5385e527aab6e9ab071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f75e4443ff8d3a8e4cb0f32a82acb0930e4209ed5f6ef5385e527aab6e9ab071->leave($__internal_f75e4443ff8d3a8e4cb0f32a82acb0930e4209ed5f6ef5385e527aab6e9ab071_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d9d17c7aa17aade9bad33d073d8f6150ef2bd0bf14bc79d3795df948e659131 = $this->env->getExtension("native_profiler");
        $__internal_1d9d17c7aa17aade9bad33d073d8f6150ef2bd0bf14bc79d3795df948e659131->enter($__internal_1d9d17c7aa17aade9bad33d073d8f6150ef2bd0bf14bc79d3795df948e659131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1d9d17c7aa17aade9bad33d073d8f6150ef2bd0bf14bc79d3795df948e659131->leave($__internal_1d9d17c7aa17aade9bad33d073d8f6150ef2bd0bf14bc79d3795df948e659131_prof);

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

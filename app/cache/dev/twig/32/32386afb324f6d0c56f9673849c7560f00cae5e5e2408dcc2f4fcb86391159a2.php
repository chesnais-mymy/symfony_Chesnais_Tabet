<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a740f5e94a7fe39b3a6f1cb55f7764cbfb3be30c169219b3471eb47971274e22 extends Twig_Template
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
        $__internal_3867447271d18cf7df23200a4acb23801e44cf3ccca828900763e6ff780c1147 = $this->env->getExtension("native_profiler");
        $__internal_3867447271d18cf7df23200a4acb23801e44cf3ccca828900763e6ff780c1147->enter($__internal_3867447271d18cf7df23200a4acb23801e44cf3ccca828900763e6ff780c1147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3867447271d18cf7df23200a4acb23801e44cf3ccca828900763e6ff780c1147->leave($__internal_3867447271d18cf7df23200a4acb23801e44cf3ccca828900763e6ff780c1147_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a75ab91005cad08f19abce9ef4e55766ca2b3726a3b0814d668a430426a093e0 = $this->env->getExtension("native_profiler");
        $__internal_a75ab91005cad08f19abce9ef4e55766ca2b3726a3b0814d668a430426a093e0->enter($__internal_a75ab91005cad08f19abce9ef4e55766ca2b3726a3b0814d668a430426a093e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a75ab91005cad08f19abce9ef4e55766ca2b3726a3b0814d668a430426a093e0->leave($__internal_a75ab91005cad08f19abce9ef4e55766ca2b3726a3b0814d668a430426a093e0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_35b46a1ee01758321e9a52a99d32e664d3e544e772d7cd014ac8ed34d1ff1773 = $this->env->getExtension("native_profiler");
        $__internal_35b46a1ee01758321e9a52a99d32e664d3e544e772d7cd014ac8ed34d1ff1773->enter($__internal_35b46a1ee01758321e9a52a99d32e664d3e544e772d7cd014ac8ed34d1ff1773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_35b46a1ee01758321e9a52a99d32e664d3e544e772d7cd014ac8ed34d1ff1773->leave($__internal_35b46a1ee01758321e9a52a99d32e664d3e544e772d7cd014ac8ed34d1ff1773_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de0be226478fbd47ba5c0a942a7274e6dc24ec2f00bbd8adaa8b4f37ceea1099 = $this->env->getExtension("native_profiler");
        $__internal_de0be226478fbd47ba5c0a942a7274e6dc24ec2f00bbd8adaa8b4f37ceea1099->enter($__internal_de0be226478fbd47ba5c0a942a7274e6dc24ec2f00bbd8adaa8b4f37ceea1099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_de0be226478fbd47ba5c0a942a7274e6dc24ec2f00bbd8adaa8b4f37ceea1099->leave($__internal_de0be226478fbd47ba5c0a942a7274e6dc24ec2f00bbd8adaa8b4f37ceea1099_prof);

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

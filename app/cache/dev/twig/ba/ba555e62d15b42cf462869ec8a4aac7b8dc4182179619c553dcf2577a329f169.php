<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_70b18801889d82c75b708db7a02c5136c715cc8506868a4b52b93dd184af20ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_9b83f5bcf7f1186c8a2f81d8b59f040a09404b909a34ea728301fd5893290994 = $this->env->getExtension("native_profiler");
        $__internal_9b83f5bcf7f1186c8a2f81d8b59f040a09404b909a34ea728301fd5893290994->enter($__internal_9b83f5bcf7f1186c8a2f81d8b59f040a09404b909a34ea728301fd5893290994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b83f5bcf7f1186c8a2f81d8b59f040a09404b909a34ea728301fd5893290994->leave($__internal_9b83f5bcf7f1186c8a2f81d8b59f040a09404b909a34ea728301fd5893290994_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_faf09572a1f0737dbd7ad28bf4ed645e73a5f703c58882fa60299077467294ea = $this->env->getExtension("native_profiler");
        $__internal_faf09572a1f0737dbd7ad28bf4ed645e73a5f703c58882fa60299077467294ea->enter($__internal_faf09572a1f0737dbd7ad28bf4ed645e73a5f703c58882fa60299077467294ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_faf09572a1f0737dbd7ad28bf4ed645e73a5f703c58882fa60299077467294ea->leave($__internal_faf09572a1f0737dbd7ad28bf4ed645e73a5f703c58882fa60299077467294ea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_85a41d780daa87d4db20ffbc4d0bc1f401b73d7accda48960b051d190433aecb = $this->env->getExtension("native_profiler");
        $__internal_85a41d780daa87d4db20ffbc4d0bc1f401b73d7accda48960b051d190433aecb->enter($__internal_85a41d780daa87d4db20ffbc4d0bc1f401b73d7accda48960b051d190433aecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_85a41d780daa87d4db20ffbc4d0bc1f401b73d7accda48960b051d190433aecb->leave($__internal_85a41d780daa87d4db20ffbc4d0bc1f401b73d7accda48960b051d190433aecb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

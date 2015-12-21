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
        $__internal_c374e81130be36a11d94b06ac95b4b0729d11fff88f401ba495b3b9c2c458603 = $this->env->getExtension("native_profiler");
        $__internal_c374e81130be36a11d94b06ac95b4b0729d11fff88f401ba495b3b9c2c458603->enter($__internal_c374e81130be36a11d94b06ac95b4b0729d11fff88f401ba495b3b9c2c458603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c374e81130be36a11d94b06ac95b4b0729d11fff88f401ba495b3b9c2c458603->leave($__internal_c374e81130be36a11d94b06ac95b4b0729d11fff88f401ba495b3b9c2c458603_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e6c68ca49beffca34c32e64fd9fc3700937d8e192753eaab1ac8c6c34760391 = $this->env->getExtension("native_profiler");
        $__internal_5e6c68ca49beffca34c32e64fd9fc3700937d8e192753eaab1ac8c6c34760391->enter($__internal_5e6c68ca49beffca34c32e64fd9fc3700937d8e192753eaab1ac8c6c34760391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5e6c68ca49beffca34c32e64fd9fc3700937d8e192753eaab1ac8c6c34760391->leave($__internal_5e6c68ca49beffca34c32e64fd9fc3700937d8e192753eaab1ac8c6c34760391_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_92451014da2c0acffda998884c49469a4a051e2f7b09668623842a40a9840a69 = $this->env->getExtension("native_profiler");
        $__internal_92451014da2c0acffda998884c49469a4a051e2f7b09668623842a40a9840a69->enter($__internal_92451014da2c0acffda998884c49469a4a051e2f7b09668623842a40a9840a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_92451014da2c0acffda998884c49469a4a051e2f7b09668623842a40a9840a69->leave($__internal_92451014da2c0acffda998884c49469a4a051e2f7b09668623842a40a9840a69_prof);

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

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
        $__internal_e30054e39ca78a67086e5945665726609d472d88df574c962c69713044fcddb1 = $this->env->getExtension("native_profiler");
        $__internal_e30054e39ca78a67086e5945665726609d472d88df574c962c69713044fcddb1->enter($__internal_e30054e39ca78a67086e5945665726609d472d88df574c962c69713044fcddb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e30054e39ca78a67086e5945665726609d472d88df574c962c69713044fcddb1->leave($__internal_e30054e39ca78a67086e5945665726609d472d88df574c962c69713044fcddb1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fadc94c7a3138815f8721b1a13ce36aeedf5f46b91d670f64878b7cfcd96e4e = $this->env->getExtension("native_profiler");
        $__internal_8fadc94c7a3138815f8721b1a13ce36aeedf5f46b91d670f64878b7cfcd96e4e->enter($__internal_8fadc94c7a3138815f8721b1a13ce36aeedf5f46b91d670f64878b7cfcd96e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8fadc94c7a3138815f8721b1a13ce36aeedf5f46b91d670f64878b7cfcd96e4e->leave($__internal_8fadc94c7a3138815f8721b1a13ce36aeedf5f46b91d670f64878b7cfcd96e4e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a39ab26d0ba21f3a8bbd2db893b14df9d4a7bd8f3524139fd9fffbc6b371a32 = $this->env->getExtension("native_profiler");
        $__internal_3a39ab26d0ba21f3a8bbd2db893b14df9d4a7bd8f3524139fd9fffbc6b371a32->enter($__internal_3a39ab26d0ba21f3a8bbd2db893b14df9d4a7bd8f3524139fd9fffbc6b371a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3a39ab26d0ba21f3a8bbd2db893b14df9d4a7bd8f3524139fd9fffbc6b371a32->leave($__internal_3a39ab26d0ba21f3a8bbd2db893b14df9d4a7bd8f3524139fd9fffbc6b371a32_prof);

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

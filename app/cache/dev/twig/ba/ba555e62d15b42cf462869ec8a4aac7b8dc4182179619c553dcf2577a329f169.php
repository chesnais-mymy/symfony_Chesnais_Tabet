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
        $__internal_0570631278d19c3a13182a5e99674d84eb2205c45db1402bd8763c29d9863623 = $this->env->getExtension("native_profiler");
        $__internal_0570631278d19c3a13182a5e99674d84eb2205c45db1402bd8763c29d9863623->enter($__internal_0570631278d19c3a13182a5e99674d84eb2205c45db1402bd8763c29d9863623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0570631278d19c3a13182a5e99674d84eb2205c45db1402bd8763c29d9863623->leave($__internal_0570631278d19c3a13182a5e99674d84eb2205c45db1402bd8763c29d9863623_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a2b11490038616f0df7b62629e123d39b185f4a98135fc0054c29f483b9a4d8 = $this->env->getExtension("native_profiler");
        $__internal_8a2b11490038616f0df7b62629e123d39b185f4a98135fc0054c29f483b9a4d8->enter($__internal_8a2b11490038616f0df7b62629e123d39b185f4a98135fc0054c29f483b9a4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8a2b11490038616f0df7b62629e123d39b185f4a98135fc0054c29f483b9a4d8->leave($__internal_8a2b11490038616f0df7b62629e123d39b185f4a98135fc0054c29f483b9a4d8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce4c66020607816733aa4574e6955adf8931bc1db878bd85dbb498cf80dfbc47 = $this->env->getExtension("native_profiler");
        $__internal_ce4c66020607816733aa4574e6955adf8931bc1db878bd85dbb498cf80dfbc47->enter($__internal_ce4c66020607816733aa4574e6955adf8931bc1db878bd85dbb498cf80dfbc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ce4c66020607816733aa4574e6955adf8931bc1db878bd85dbb498cf80dfbc47->leave($__internal_ce4c66020607816733aa4574e6955adf8931bc1db878bd85dbb498cf80dfbc47_prof);

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

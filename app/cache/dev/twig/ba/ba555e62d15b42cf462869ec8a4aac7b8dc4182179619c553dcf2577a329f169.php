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
        $__internal_5fb0bf3be11c20dd0fc790b9d4b6985a231c4d47f29b21a1e6b94f8715161991 = $this->env->getExtension("native_profiler");
        $__internal_5fb0bf3be11c20dd0fc790b9d4b6985a231c4d47f29b21a1e6b94f8715161991->enter($__internal_5fb0bf3be11c20dd0fc790b9d4b6985a231c4d47f29b21a1e6b94f8715161991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fb0bf3be11c20dd0fc790b9d4b6985a231c4d47f29b21a1e6b94f8715161991->leave($__internal_5fb0bf3be11c20dd0fc790b9d4b6985a231c4d47f29b21a1e6b94f8715161991_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93f17c82b6787270e75f504cf61f22fdda8b4077bbbc17fbf33f84f471cab28e = $this->env->getExtension("native_profiler");
        $__internal_93f17c82b6787270e75f504cf61f22fdda8b4077bbbc17fbf33f84f471cab28e->enter($__internal_93f17c82b6787270e75f504cf61f22fdda8b4077bbbc17fbf33f84f471cab28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_93f17c82b6787270e75f504cf61f22fdda8b4077bbbc17fbf33f84f471cab28e->leave($__internal_93f17c82b6787270e75f504cf61f22fdda8b4077bbbc17fbf33f84f471cab28e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_01eac68c5c2e88c6b11107a8661ad0f96a8da676dcd506388e3f647c1e232e95 = $this->env->getExtension("native_profiler");
        $__internal_01eac68c5c2e88c6b11107a8661ad0f96a8da676dcd506388e3f647c1e232e95->enter($__internal_01eac68c5c2e88c6b11107a8661ad0f96a8da676dcd506388e3f647c1e232e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_01eac68c5c2e88c6b11107a8661ad0f96a8da676dcd506388e3f647c1e232e95->leave($__internal_01eac68c5c2e88c6b11107a8661ad0f96a8da676dcd506388e3f647c1e232e95_prof);

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

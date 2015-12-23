<?php

/* ::base.html.twig */
class __TwigTemplate_7d9d497ef70cdd066a854b793e751b44f79cb68bc5ab0139eb0a4d533904ad4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a38c722d289282a90076365f669e3faa0e5cda11614dc4261846b7780c21b92 = $this->env->getExtension("native_profiler");
        $__internal_3a38c722d289282a90076365f669e3faa0e5cda11614dc4261846b7780c21b92->enter($__internal_3a38c722d289282a90076365f669e3faa0e5cda11614dc4261846b7780c21b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " -Le Blog de Myriam et Hafida</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_3a38c722d289282a90076365f669e3faa0e5cda11614dc4261846b7780c21b92->leave($__internal_3a38c722d289282a90076365f669e3faa0e5cda11614dc4261846b7780c21b92_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1cef78bc7afd1823cbdfd707321cbc067117440049d21f0fe52eadb2c4da0a3 = $this->env->getExtension("native_profiler");
        $__internal_e1cef78bc7afd1823cbdfd707321cbc067117440049d21f0fe52eadb2c4da0a3->enter($__internal_e1cef78bc7afd1823cbdfd707321cbc067117440049d21f0fe52eadb2c4da0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e1cef78bc7afd1823cbdfd707321cbc067117440049d21f0fe52eadb2c4da0a3->leave($__internal_e1cef78bc7afd1823cbdfd707321cbc067117440049d21f0fe52eadb2c4da0a3_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_42dcceac285bbb4c27f623bded2b78d48c84d689484874c6ba1ad72bebb695b6 = $this->env->getExtension("native_profiler");
        $__internal_42dcceac285bbb4c27f623bded2b78d48c84d689484874c6ba1ad72bebb695b6->enter($__internal_42dcceac285bbb4c27f623bded2b78d48c84d689484874c6ba1ad72bebb695b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_42dcceac285bbb4c27f623bded2b78d48c84d689484874c6ba1ad72bebb695b6->leave($__internal_42dcceac285bbb4c27f623bded2b78d48c84d689484874c6ba1ad72bebb695b6_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c005b0790822632c8bc30aff7018809fc63e1c0f71bcf2b5cb1cff5a1f52886e = $this->env->getExtension("native_profiler");
        $__internal_c005b0790822632c8bc30aff7018809fc63e1c0f71bcf2b5cb1cff5a1f52886e->enter($__internal_c005b0790822632c8bc30aff7018809fc63e1c0f71bcf2b5cb1cff5a1f52886e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c005b0790822632c8bc30aff7018809fc63e1c0f71bcf2b5cb1cff5a1f52886e->leave($__internal_c005b0790822632c8bc30aff7018809fc63e1c0f71bcf2b5cb1cff5a1f52886e_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0700cc27425ac84b15b26621c0701557f356af270e0b69351a0eb1773da1eb5 = $this->env->getExtension("native_profiler");
        $__internal_f0700cc27425ac84b15b26621c0701557f356af270e0b69351a0eb1773da1eb5->enter($__internal_f0700cc27425ac84b15b26621c0701557f356af270e0b69351a0eb1773da1eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f0700cc27425ac84b15b26621c0701557f356af270e0b69351a0eb1773da1eb5->leave($__internal_f0700cc27425ac84b15b26621c0701557f356af270e0b69351a0eb1773da1eb5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 13,  86 => 12,  75 => 8,  64 => 5,  55 => 14,  52 => 13,  50 => 12,  43 => 9,  41 => 8,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %} -Le Blog de Myriam et Hafida</title>*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

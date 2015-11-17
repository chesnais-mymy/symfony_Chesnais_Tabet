<?php

/* base.html.twig */
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
        $__internal_94db9c1994e61c476c3de87fbc2eecf7ef249a80a3d84a85d6a789a4c94a91d5 = $this->env->getExtension("native_profiler");
        $__internal_94db9c1994e61c476c3de87fbc2eecf7ef249a80a3d84a85d6a789a4c94a91d5->enter($__internal_94db9c1994e61c476c3de87fbc2eecf7ef249a80a3d84a85d6a789a4c94a91d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_94db9c1994e61c476c3de87fbc2eecf7ef249a80a3d84a85d6a789a4c94a91d5->leave($__internal_94db9c1994e61c476c3de87fbc2eecf7ef249a80a3d84a85d6a789a4c94a91d5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_078b02a28f87a973e6bb31a928031e0a0fda9edd89245650e3ba30ee18a4483f = $this->env->getExtension("native_profiler");
        $__internal_078b02a28f87a973e6bb31a928031e0a0fda9edd89245650e3ba30ee18a4483f->enter($__internal_078b02a28f87a973e6bb31a928031e0a0fda9edd89245650e3ba30ee18a4483f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_078b02a28f87a973e6bb31a928031e0a0fda9edd89245650e3ba30ee18a4483f->leave($__internal_078b02a28f87a973e6bb31a928031e0a0fda9edd89245650e3ba30ee18a4483f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_64f7fab070afe34773914758e18aaf298d458d9c38731b18eec1583f8b911499 = $this->env->getExtension("native_profiler");
        $__internal_64f7fab070afe34773914758e18aaf298d458d9c38731b18eec1583f8b911499->enter($__internal_64f7fab070afe34773914758e18aaf298d458d9c38731b18eec1583f8b911499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_64f7fab070afe34773914758e18aaf298d458d9c38731b18eec1583f8b911499->leave($__internal_64f7fab070afe34773914758e18aaf298d458d9c38731b18eec1583f8b911499_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c79d9d0f53f2cdf8a193acd9b2e48eb89d25e4777413aa1162a4874bbc46613d = $this->env->getExtension("native_profiler");
        $__internal_c79d9d0f53f2cdf8a193acd9b2e48eb89d25e4777413aa1162a4874bbc46613d->enter($__internal_c79d9d0f53f2cdf8a193acd9b2e48eb89d25e4777413aa1162a4874bbc46613d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c79d9d0f53f2cdf8a193acd9b2e48eb89d25e4777413aa1162a4874bbc46613d->leave($__internal_c79d9d0f53f2cdf8a193acd9b2e48eb89d25e4777413aa1162a4874bbc46613d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9738f7145f2b4f4905abf0353bcf7667ef6a7d115729a7c02d1ce758ca06906a = $this->env->getExtension("native_profiler");
        $__internal_9738f7145f2b4f4905abf0353bcf7667ef6a7d115729a7c02d1ce758ca06906a->enter($__internal_9738f7145f2b4f4905abf0353bcf7667ef6a7d115729a7c02d1ce758ca06906a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9738f7145f2b4f4905abf0353bcf7667ef6a7d115729a7c02d1ce758ca06906a->leave($__internal_9738f7145f2b4f4905abf0353bcf7667ef6a7d115729a7c02d1ce758ca06906a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

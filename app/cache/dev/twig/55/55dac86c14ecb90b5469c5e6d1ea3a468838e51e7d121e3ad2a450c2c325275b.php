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
        $__internal_4bbebe496bd68746236cbfef6201d03ce6ff592fefb302b8150fa5e1457bfebc = $this->env->getExtension("native_profiler");
        $__internal_4bbebe496bd68746236cbfef6201d03ce6ff592fefb302b8150fa5e1457bfebc->enter($__internal_4bbebe496bd68746236cbfef6201d03ce6ff592fefb302b8150fa5e1457bfebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4bbebe496bd68746236cbfef6201d03ce6ff592fefb302b8150fa5e1457bfebc->leave($__internal_4bbebe496bd68746236cbfef6201d03ce6ff592fefb302b8150fa5e1457bfebc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_79e954414e7fa7a2c2b6b9583dc9c59efc73c2b60c5d2839da9e8abbb60dc01c = $this->env->getExtension("native_profiler");
        $__internal_79e954414e7fa7a2c2b6b9583dc9c59efc73c2b60c5d2839da9e8abbb60dc01c->enter($__internal_79e954414e7fa7a2c2b6b9583dc9c59efc73c2b60c5d2839da9e8abbb60dc01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_79e954414e7fa7a2c2b6b9583dc9c59efc73c2b60c5d2839da9e8abbb60dc01c->leave($__internal_79e954414e7fa7a2c2b6b9583dc9c59efc73c2b60c5d2839da9e8abbb60dc01c_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_961c831d578587386210447aa8d13f2296d131b20cd508f283b617030b4bd49b = $this->env->getExtension("native_profiler");
        $__internal_961c831d578587386210447aa8d13f2296d131b20cd508f283b617030b4bd49b->enter($__internal_961c831d578587386210447aa8d13f2296d131b20cd508f283b617030b4bd49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_961c831d578587386210447aa8d13f2296d131b20cd508f283b617030b4bd49b->leave($__internal_961c831d578587386210447aa8d13f2296d131b20cd508f283b617030b4bd49b_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e04a8c270c760ce4f7e02c0519aad7847c7f5a01c7e079c2aa6fcb4b7907619 = $this->env->getExtension("native_profiler");
        $__internal_3e04a8c270c760ce4f7e02c0519aad7847c7f5a01c7e079c2aa6fcb4b7907619->enter($__internal_3e04a8c270c760ce4f7e02c0519aad7847c7f5a01c7e079c2aa6fcb4b7907619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3e04a8c270c760ce4f7e02c0519aad7847c7f5a01c7e079c2aa6fcb4b7907619->leave($__internal_3e04a8c270c760ce4f7e02c0519aad7847c7f5a01c7e079c2aa6fcb4b7907619_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c779eb352002a9476bbce2908643f131c7130c0156cb8ede4d46de8f7272f2ad = $this->env->getExtension("native_profiler");
        $__internal_c779eb352002a9476bbce2908643f131c7130c0156cb8ede4d46de8f7272f2ad->enter($__internal_c779eb352002a9476bbce2908643f131c7130c0156cb8ede4d46de8f7272f2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c779eb352002a9476bbce2908643f131c7130c0156cb8ede4d46de8f7272f2ad->leave($__internal_c779eb352002a9476bbce2908643f131c7130c0156cb8ede4d46de8f7272f2ad_prof);

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

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
        $__internal_7de9f731ea71edcc124cced919e7a1621906a0bdb46663912ba63f6d7d52deb6 = $this->env->getExtension("native_profiler");
        $__internal_7de9f731ea71edcc124cced919e7a1621906a0bdb46663912ba63f6d7d52deb6->enter($__internal_7de9f731ea71edcc124cced919e7a1621906a0bdb46663912ba63f6d7d52deb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7de9f731ea71edcc124cced919e7a1621906a0bdb46663912ba63f6d7d52deb6->leave($__internal_7de9f731ea71edcc124cced919e7a1621906a0bdb46663912ba63f6d7d52deb6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebba1bd4229dcb630ccf4cff02d2d4689cc20e3e3ed7fcde65109cd857db064b = $this->env->getExtension("native_profiler");
        $__internal_ebba1bd4229dcb630ccf4cff02d2d4689cc20e3e3ed7fcde65109cd857db064b->enter($__internal_ebba1bd4229dcb630ccf4cff02d2d4689cc20e3e3ed7fcde65109cd857db064b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ebba1bd4229dcb630ccf4cff02d2d4689cc20e3e3ed7fcde65109cd857db064b->leave($__internal_ebba1bd4229dcb630ccf4cff02d2d4689cc20e3e3ed7fcde65109cd857db064b_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57748b78ead373f7f82b8a09d4633ae95a26dd7bab0db8062ea225aa2064b2e5 = $this->env->getExtension("native_profiler");
        $__internal_57748b78ead373f7f82b8a09d4633ae95a26dd7bab0db8062ea225aa2064b2e5->enter($__internal_57748b78ead373f7f82b8a09d4633ae95a26dd7bab0db8062ea225aa2064b2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_57748b78ead373f7f82b8a09d4633ae95a26dd7bab0db8062ea225aa2064b2e5->leave($__internal_57748b78ead373f7f82b8a09d4633ae95a26dd7bab0db8062ea225aa2064b2e5_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c29e4203aefd055b4ab34bff99430364f1b7f9d0e0f0d0f0efc943c251b0ce5 = $this->env->getExtension("native_profiler");
        $__internal_9c29e4203aefd055b4ab34bff99430364f1b7f9d0e0f0d0f0efc943c251b0ce5->enter($__internal_9c29e4203aefd055b4ab34bff99430364f1b7f9d0e0f0d0f0efc943c251b0ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c29e4203aefd055b4ab34bff99430364f1b7f9d0e0f0d0f0efc943c251b0ce5->leave($__internal_9c29e4203aefd055b4ab34bff99430364f1b7f9d0e0f0d0f0efc943c251b0ce5_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5fd72096ce069abfe35d4b527c6524c01c18b3a84c9862686d707c0556265834 = $this->env->getExtension("native_profiler");
        $__internal_5fd72096ce069abfe35d4b527c6524c01c18b3a84c9862686d707c0556265834->enter($__internal_5fd72096ce069abfe35d4b527c6524c01c18b3a84c9862686d707c0556265834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5fd72096ce069abfe35d4b527c6524c01c18b3a84c9862686d707c0556265834->leave($__internal_5fd72096ce069abfe35d4b527c6524c01c18b3a84c9862686d707c0556265834_prof);

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

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
        $__internal_11ab1201fa669b197c8a3fc3e079a991300db1275de7832ec71c0c0ac318aa82 = $this->env->getExtension("native_profiler");
        $__internal_11ab1201fa669b197c8a3fc3e079a991300db1275de7832ec71c0c0ac318aa82->enter($__internal_11ab1201fa669b197c8a3fc3e079a991300db1275de7832ec71c0c0ac318aa82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_11ab1201fa669b197c8a3fc3e079a991300db1275de7832ec71c0c0ac318aa82->leave($__internal_11ab1201fa669b197c8a3fc3e079a991300db1275de7832ec71c0c0ac318aa82_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf02d1905d64843bf80b59e8e2ee1a0ddbc37198d1b35740aa75d4996144ac3a = $this->env->getExtension("native_profiler");
        $__internal_bf02d1905d64843bf80b59e8e2ee1a0ddbc37198d1b35740aa75d4996144ac3a->enter($__internal_bf02d1905d64843bf80b59e8e2ee1a0ddbc37198d1b35740aa75d4996144ac3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bf02d1905d64843bf80b59e8e2ee1a0ddbc37198d1b35740aa75d4996144ac3a->leave($__internal_bf02d1905d64843bf80b59e8e2ee1a0ddbc37198d1b35740aa75d4996144ac3a_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a88b70ac0dc411b6f0db46a4e40cb892e1d595d8581bf95278b1fc31deb07437 = $this->env->getExtension("native_profiler");
        $__internal_a88b70ac0dc411b6f0db46a4e40cb892e1d595d8581bf95278b1fc31deb07437->enter($__internal_a88b70ac0dc411b6f0db46a4e40cb892e1d595d8581bf95278b1fc31deb07437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a88b70ac0dc411b6f0db46a4e40cb892e1d595d8581bf95278b1fc31deb07437->leave($__internal_a88b70ac0dc411b6f0db46a4e40cb892e1d595d8581bf95278b1fc31deb07437_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d628386c0ead346b7add6d290c0fbcdcf269987bec9e7e3551342613517bf615 = $this->env->getExtension("native_profiler");
        $__internal_d628386c0ead346b7add6d290c0fbcdcf269987bec9e7e3551342613517bf615->enter($__internal_d628386c0ead346b7add6d290c0fbcdcf269987bec9e7e3551342613517bf615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d628386c0ead346b7add6d290c0fbcdcf269987bec9e7e3551342613517bf615->leave($__internal_d628386c0ead346b7add6d290c0fbcdcf269987bec9e7e3551342613517bf615_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ba6d53d20dafd413affcb0b087eb530880e20d6a300c1e61b452f659d16513c4 = $this->env->getExtension("native_profiler");
        $__internal_ba6d53d20dafd413affcb0b087eb530880e20d6a300c1e61b452f659d16513c4->enter($__internal_ba6d53d20dafd413affcb0b087eb530880e20d6a300c1e61b452f659d16513c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ba6d53d20dafd413affcb0b087eb530880e20d6a300c1e61b452f659d16513c4->leave($__internal_ba6d53d20dafd413affcb0b087eb530880e20d6a300c1e61b452f659d16513c4_prof);

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

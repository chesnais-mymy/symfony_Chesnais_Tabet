<?php

/* ::layout.html.twig */
class __TwigTemplate_3d71d3da159933a85c3f3364466bba8057127a0e5139d478f07e27da93f922be extends Twig_Template
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
        $__internal_7d8052b0ecd66fab2799bb218ac60fb11ec46b1e347bb01afdfc2dd98296adfc = $this->env->getExtension("native_profiler");
        $__internal_7d8052b0ecd66fab2799bb218ac60fb11ec46b1e347bb01afdfc2dd98296adfc->enter($__internal_7d8052b0ecd66fab2799bb218ac60fb11ec46b1e347bb01afdfc2dd98296adfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Ma plateforme d'annonces</h1>
        <p>
            Ce projet est propulsé par Symfony2,
            et construit grâce au MOOC OpenClassrooms et SensioLabs.
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
                Participer au MOOC »
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les annonces</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("esiea_blog_home");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("esiea_blog_add");
        echo "\">Ajouter une annonce</a></li>
            </ul>

            <h4>Dernières annonces</h4>
            ";
        // line 41
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EsieaBlogBundle:Advert:menu", array("limit" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
</div>

";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "
</body>
</html>";
        
        $__internal_7d8052b0ecd66fab2799bb218ac60fb11ec46b1e347bb01afdfc2dd98296adfc->leave($__internal_7d8052b0ecd66fab2799bb218ac60fb11ec46b1e347bb01afdfc2dd98296adfc_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_90636887a36d4bfc07edf0649075f9193f92e5edbe7656497b7a82054ace70eb = $this->env->getExtension("native_profiler");
        $__internal_90636887a36d4bfc07edf0649075f9193f92e5edbe7656497b7a82054ace70eb->enter($__internal_90636887a36d4bfc07edf0649075f9193f92e5edbe7656497b7a82054ace70eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Le blog de Cuisine de Myriam et hafida";
        
        $__internal_90636887a36d4bfc07edf0649075f9193f92e5edbe7656497b7a82054ace70eb->leave($__internal_90636887a36d4bfc07edf0649075f9193f92e5edbe7656497b7a82054ace70eb_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3d841ffad621f616c81f8cedbed12018cb9c84798cc9ae2caea7e484ad8b681 = $this->env->getExtension("native_profiler");
        $__internal_f3d841ffad621f616c81f8cedbed12018cb9c84798cc9ae2caea7e484ad8b681->enter($__internal_f3d841ffad621f616c81f8cedbed12018cb9c84798cc9ae2caea7e484ad8b681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_f3d841ffad621f616c81f8cedbed12018cb9c84798cc9ae2caea7e484ad8b681->leave($__internal_f3d841ffad621f616c81f8cedbed12018cb9c84798cc9ae2caea7e484ad8b681_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1a8cd32bb4fac5e4efa07c09d1fbb8b6be2b7521878246224a1d02272d7ab60 = $this->env->getExtension("native_profiler");
        $__internal_a1a8cd32bb4fac5e4efa07c09d1fbb8b6be2b7521878246224a1d02272d7ab60->enter($__internal_a1a8cd32bb4fac5e4efa07c09d1fbb8b6be2b7521878246224a1d02272d7ab60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "            ";
        
        $__internal_a1a8cd32bb4fac5e4efa07c09d1fbb8b6be2b7521878246224a1d02272d7ab60->leave($__internal_a1a8cd32bb4fac5e4efa07c09d1fbb8b6be2b7521878246224a1d02272d7ab60_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_85595dd03e71600b1dd6cb0bdaa9db611d0d2ffb33dc1ffbfa8b81229b725b61 = $this->env->getExtension("native_profiler");
        $__internal_85595dd03e71600b1dd6cb0bdaa9db611d0d2ffb33dc1ffbfa8b81229b725b61->enter($__internal_85595dd03e71600b1dd6cb0bdaa9db611d0d2ffb33dc1ffbfa8b81229b725b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_85595dd03e71600b1dd6cb0bdaa9db611d0d2ffb33dc1ffbfa8b81229b725b61->leave($__internal_85595dd03e71600b1dd6cb0bdaa9db611d0d2ffb33dc1ffbfa8b81229b725b61_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 58,  157 => 57,  151 => 56,  144 => 45,  138 => 44,  130 => 13,  128 => 12,  122 => 11,  110 => 9,  101 => 61,  99 => 56,  92 => 52,  84 => 46,  82 => 44,  76 => 41,  69 => 37,  65 => 36,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>{% block title %}Le blog de Cuisine de Myriam et hafida{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*         {# On charge le CSS de bootstrap depuis le site directement #}*/
/*         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*     {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/* <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*         <h1>Ma plateforme d'annonces</h1>*/
/*         <p>*/
/*             Ce projet est propulsé par Symfony2,*/
/*             et construit grâce au MOOC OpenClassrooms et SensioLabs.*/
/*         </p>*/
/*         <p>*/
/*             <a class="btn btn-primary btn-lg" href="http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2">*/
/*                 Participer au MOOC »*/
/*             </a>*/
/*         </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div id="menu" class="col-md-3">*/
/*             <h3>Les annonces</h3>*/
/*             <ul class="nav nav-pills nav-stacked">*/
/*                 <li><a href="{{ path('esiea_blog_home') }}">Accueil</a></li>*/
/*                 <li><a href="{{ path('esiea_blog_add') }}">Ajouter une annonce</a></li>*/
/*             </ul>*/
/* */
/*             <h4>Dernières annonces</h4>*/
/*             {{ render(controller("EsieaBlogBundle:Advert:menu", {'limit': 3})) }}*/
/*         </div>*/
/*         <div id="content" class="col-md-9">*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*         <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>*/
/*     </footer>*/
/* </div>*/
/* */
/* {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/

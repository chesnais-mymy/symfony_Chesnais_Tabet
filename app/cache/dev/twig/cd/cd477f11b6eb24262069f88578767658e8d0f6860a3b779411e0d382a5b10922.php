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
        $__internal_a9b86451c87a096e6127e698688bc393776e3b8fef29d0a493d57178af71f363 = $this->env->getExtension("native_profiler");
        $__internal_a9b86451c87a096e6127e698688bc393776e3b8fef29d0a493d57178af71f363->enter($__internal_a9b86451c87a096e6127e698688bc393776e3b8fef29d0a493d57178af71f363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        <h1>Blog de Cuisine M&H</h1>
        <p>
            Ce blog a été réalisé par Chesnais Myriam et Tabet Hafida
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"https://www.facebook.com/groups/1669608549949358/\">
                Go sur notre page facebook -->
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Menu principal</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("esiea_blog_home");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("esiea_blog_add");
        echo "\">Ajouter une nouvelle recette</a></li>
            </ul>

            <h4>Les dernières recettes</h4>
            ";
        // line 40
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EsieaBlogBundle:Advert:menu", array("limit" => 4)));
        echo "
        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p>Copyright: Chesnais et Tabet</p>
    </footer>
</div>

";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
</body>
</html>";
        
        $__internal_a9b86451c87a096e6127e698688bc393776e3b8fef29d0a493d57178af71f363->leave($__internal_a9b86451c87a096e6127e698688bc393776e3b8fef29d0a493d57178af71f363_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_80f8d172f38a164ce22537303a0f059c81aa06945bf91539f55a019a7e18696c = $this->env->getExtension("native_profiler");
        $__internal_80f8d172f38a164ce22537303a0f059c81aa06945bf91539f55a019a7e18696c->enter($__internal_80f8d172f38a164ce22537303a0f059c81aa06945bf91539f55a019a7e18696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Le blog de Cuisine de Myriam et hafida";
        
        $__internal_80f8d172f38a164ce22537303a0f059c81aa06945bf91539f55a019a7e18696c->leave($__internal_80f8d172f38a164ce22537303a0f059c81aa06945bf91539f55a019a7e18696c_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_057162e1afe0ecc0f072a4141c5492847802b9f0ec9fe938b87f8cd92b10b3f1 = $this->env->getExtension("native_profiler");
        $__internal_057162e1afe0ecc0f072a4141c5492847802b9f0ec9fe938b87f8cd92b10b3f1->enter($__internal_057162e1afe0ecc0f072a4141c5492847802b9f0ec9fe938b87f8cd92b10b3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_057162e1afe0ecc0f072a4141c5492847802b9f0ec9fe938b87f8cd92b10b3f1->leave($__internal_057162e1afe0ecc0f072a4141c5492847802b9f0ec9fe938b87f8cd92b10b3f1_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_b42b9b2c379833317b8aa302491336f555ce455b77a10824810c15ab9f907515 = $this->env->getExtension("native_profiler");
        $__internal_b42b9b2c379833317b8aa302491336f555ce455b77a10824810c15ab9f907515->enter($__internal_b42b9b2c379833317b8aa302491336f555ce455b77a10824810c15ab9f907515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "            ";
        
        $__internal_b42b9b2c379833317b8aa302491336f555ce455b77a10824810c15ab9f907515->leave($__internal_b42b9b2c379833317b8aa302491336f555ce455b77a10824810c15ab9f907515_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbb6a7cf80da939cc62a16e32d8c98162edeccdd01add67b4691ca79fb3f1078 = $this->env->getExtension("native_profiler");
        $__internal_fbb6a7cf80da939cc62a16e32d8c98162edeccdd01add67b4691ca79fb3f1078->enter($__internal_fbb6a7cf80da939cc62a16e32d8c98162edeccdd01add67b4691ca79fb3f1078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_fbb6a7cf80da939cc62a16e32d8c98162edeccdd01add67b4691ca79fb3f1078->leave($__internal_fbb6a7cf80da939cc62a16e32d8c98162edeccdd01add67b4691ca79fb3f1078_prof);

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
        return array (  155 => 57,  153 => 56,  147 => 55,  140 => 44,  134 => 43,  126 => 13,  124 => 12,  118 => 11,  106 => 9,  97 => 60,  95 => 55,  83 => 45,  81 => 43,  75 => 40,  68 => 36,  64 => 35,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
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
/*         <h1>Blog de Cuisine M&H</h1>*/
/*         <p>*/
/*             Ce blog a été réalisé par Chesnais Myriam et Tabet Hafida*/
/*         </p>*/
/*         <p>*/
/*             <a class="btn btn-primary btn-lg" href="https://www.facebook.com/groups/1669608549949358/">*/
/*                 Go sur notre page facebook -->*/
/*             </a>*/
/*         </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div id="menu" class="col-md-3">*/
/*             <h3>Menu principal</h3>*/
/*             <ul class="nav nav-pills nav-stacked">*/
/*                 <li><a href="{{ path('esiea_blog_home') }}">Accueil</a></li>*/
/*                 <li><a href="{{ path('esiea_blog_add') }}">Ajouter une nouvelle recette</a></li>*/
/*             </ul>*/
/* */
/*             <h4>Les dernières recettes</h4>*/
/*             {{ render(controller("EsieaBlogBundle:Advert:menu", {'limit': 4})) }}*/
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
/*         <p>Copyright: Chesnais et Tabet</p>*/
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

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
        $__internal_6441c313c8a7cad87c564a9a59dcb32fd91b3706583aba27eccb97b4a1decd6c = $this->env->getExtension("native_profiler");
        $__internal_6441c313c8a7cad87c564a9a59dcb32fd91b3706583aba27eccb97b4a1decd6c->enter($__internal_6441c313c8a7cad87c564a9a59dcb32fd91b3706583aba27eccb97b4a1decd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_6441c313c8a7cad87c564a9a59dcb32fd91b3706583aba27eccb97b4a1decd6c->leave($__internal_6441c313c8a7cad87c564a9a59dcb32fd91b3706583aba27eccb97b4a1decd6c_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_02092baac3ee42bd1062bd9be13ca7297001c7aad841cbc0fb19068bf0664cb0 = $this->env->getExtension("native_profiler");
        $__internal_02092baac3ee42bd1062bd9be13ca7297001c7aad841cbc0fb19068bf0664cb0->enter($__internal_02092baac3ee42bd1062bd9be13ca7297001c7aad841cbc0fb19068bf0664cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Le blog de Cuisine de Myriam et hafida";
        
        $__internal_02092baac3ee42bd1062bd9be13ca7297001c7aad841cbc0fb19068bf0664cb0->leave($__internal_02092baac3ee42bd1062bd9be13ca7297001c7aad841cbc0fb19068bf0664cb0_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e253c4f7efaab924bfbeed0946c47e5786fc56a78df9dcc25258b68824cafab7 = $this->env->getExtension("native_profiler");
        $__internal_e253c4f7efaab924bfbeed0946c47e5786fc56a78df9dcc25258b68824cafab7->enter($__internal_e253c4f7efaab924bfbeed0946c47e5786fc56a78df9dcc25258b68824cafab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_e253c4f7efaab924bfbeed0946c47e5786fc56a78df9dcc25258b68824cafab7->leave($__internal_e253c4f7efaab924bfbeed0946c47e5786fc56a78df9dcc25258b68824cafab7_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_e02e3264f35ece012a761d8173b6245aa34d328efe2e0abd6503f44c88504fae = $this->env->getExtension("native_profiler");
        $__internal_e02e3264f35ece012a761d8173b6245aa34d328efe2e0abd6503f44c88504fae->enter($__internal_e02e3264f35ece012a761d8173b6245aa34d328efe2e0abd6503f44c88504fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "            ";
        
        $__internal_e02e3264f35ece012a761d8173b6245aa34d328efe2e0abd6503f44c88504fae->leave($__internal_e02e3264f35ece012a761d8173b6245aa34d328efe2e0abd6503f44c88504fae_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79c92e8916fb366fd98412797eca46c8ebb887ea0330ac38563b3b54333a2680 = $this->env->getExtension("native_profiler");
        $__internal_79c92e8916fb366fd98412797eca46c8ebb887ea0330ac38563b3b54333a2680->enter($__internal_79c92e8916fb366fd98412797eca46c8ebb887ea0330ac38563b3b54333a2680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_79c92e8916fb366fd98412797eca46c8ebb887ea0330ac38563b3b54333a2680->leave($__internal_79c92e8916fb366fd98412797eca46c8ebb887ea0330ac38563b3b54333a2680_prof);

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

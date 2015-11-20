<?php

/* EsieaBlogBundle:Advert:index.html.twig */
class __TwigTemplate_c958479f423938efb07a06d38c278b1cfb0d7b48b5e80457d629ce3ab46781d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02d54257abc77399bf6c6615d2abced15c61baabc752c181d2db4664286274cb = $this->env->getExtension("native_profiler");
        $__internal_02d54257abc77399bf6c6615d2abced15c61baabc752c181d2db4664286274cb->enter($__internal_02d54257abc77399bf6c6615d2abced15c61baabc752c181d2db4664286274cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
</head>
<body>
<h1>Hello World ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo "!</h1>

<p>
    Le Hello World est un grand classique en programmation.
    Il signifie énormément, car cela veut dire que vous avez
    réussi à exécuter le programme pour accomplir une tâche simple :
    afficher ce hello world !
</p>
</body>
</html>";
        
        $__internal_02d54257abc77399bf6c6615d2abced15c61baabc752c181d2db4664286274cb->leave($__internal_02d54257abc77399bf6c6615d2abced15c61baabc752c181d2db4664286274cb_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 9,  22 => 2,);
    }
}
/* {# src/Esiea/BlogBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>Bienvenue sur ma première page avec OpenClassrooms !</title>*/
/* </head>*/
/* <body>*/
/* <h1>Hello World {{ nom }}!</h1>*/
/* */
/* <p>*/
/*     Le Hello World est un grand classique en programmation.*/
/*     Il signifie énormément, car cela veut dire que vous avez*/
/*     réussi à exécuter le programme pour accomplir une tâche simple :*/
/*     afficher ce hello world !*/
/* </p>*/
/* </body>*/
/* </html>*/

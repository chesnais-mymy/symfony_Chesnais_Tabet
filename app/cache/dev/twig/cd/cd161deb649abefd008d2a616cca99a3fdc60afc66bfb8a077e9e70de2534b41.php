<?php

/* EsieaBlogBundle:Advert:aurevoir.html.twig */
class __TwigTemplate_eb4cf0d516da1e98d7c45042713b62b68cd414e93056dbd1c9f87288d6c06a52 extends Twig_Template
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
        $__internal_3daf56c63aff281ef17c6143fc85ef4a55906ef56c963e3df0a0d1eb53be1e18 = $this->env->getExtension("native_profiler");
        $__internal_3daf56c63aff281ef17c6143fc85ef4a55906ef56c963e3df0a0d1eb53be1e18->enter($__internal_3daf56c63aff281ef17c6143fc85ef4a55906ef56c963e3df0a0d1eb53be1e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:aurevoir.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
</head>
<body>
<h1>aurevoir ";
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
        
        $__internal_3daf56c63aff281ef17c6143fc85ef4a55906ef56c963e3df0a0d1eb53be1e18->leave($__internal_3daf56c63aff281ef17c6143fc85ef4a55906ef56c963e3df0a0d1eb53be1e18_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:aurevoir.html.twig";
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
/* {# src/esiea/BlogBundle/Resources/views/Advert/aurevoir.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>Bienvenue sur ma première page avec OpenClassrooms !</title>*/
/* </head>*/
/* <body>*/
/* <h1>aurevoir {{ nom }}!</h1>*/
/* */
/* <p>*/
/*     Le Hello World est un grand classique en programmation.*/
/*     Il signifie énormément, car cela veut dire que vous avez*/
/*     réussi à exécuter le programme pour accomplir une tâche simple :*/
/*     afficher ce hello world !*/
/* </p>*/
/* </body>*/
/* </html>*/

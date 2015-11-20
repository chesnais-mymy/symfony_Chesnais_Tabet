<?php

/* EsieaBlogBundle:Advert:view.html.twig */
class __TwigTemplate_3c5e440b1d913a01bc9330663b9be2a2d1379d8bf6f866058bdc946e15267fd1 extends Twig_Template
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
        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Affichage de l'annonce ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "</title>
  </head>
  <body>
    <h1>Les annonces sont n°";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo " !</h1>



  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 9,  25 => 6,  19 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <title>Affichage de l'annonce {{ id }}</title>*/
/*   </head>*/
/*   <body>*/
/*     <h1>Les annonces sont n°{{ id }} !</h1>*/
/* */
/* */
/* */
/*   </body>*/
/* </html>*/
/* */

<?php

/* EsieaBlogBundle:Default:view.html.twig */
class __TwigTemplate_55dc0a6ccef40597644ef9598993c569147007a29999a4d2b98fa0c37fa99fce extends Twig_Template
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
        $__internal_ebb5911d6634a5a6c7227478bb5702ee5ae8b933e0f1a6a49658b0c8508e8a09 = $this->env->getExtension("native_profiler");
        $__internal_ebb5911d6634a5a6c7227478bb5702ee5ae8b933e0f1a6a49658b0c8508e8a09->enter($__internal_ebb5911d6634a5a6c7227478bb5702ee5ae8b933e0f1a6a49658b0c8508e8a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:view.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Affichage de l'annonce ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</title>
  </head>
  <body>
    <h1>Les annonces sont n°";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " !</h1>



  </body>
</html>
";
        
        $__internal_ebb5911d6634a5a6c7227478bb5702ee5ae8b933e0f1a6a49658b0c8508e8a09->leave($__internal_ebb5911d6634a5a6c7227478bb5702ee5ae8b933e0f1a6a49658b0c8508e8a09_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  28 => 6,  22 => 2,);
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

<?php

/* EsieaBlogBundle:Default:view.html.twig */
class __TwigTemplate_2087317ea8b09993535dde49daf1058049578372505fc3b57943e5edaa235a91 extends Twig_Template
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
        $__internal_808155e7a74de69f18820cf6fcb0f02134dd305c5ecfd40b45fcfba45237c7fe = $this->env->getExtension("native_profiler");
        $__internal_808155e7a74de69f18820cf6fcb0f02134dd305c5ecfd40b45fcfba45237c7fe->enter($__internal_808155e7a74de69f18820cf6fcb0f02134dd305c5ecfd40b45fcfba45237c7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:view.html.twig"));

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
        
        $__internal_808155e7a74de69f18820cf6fcb0f02134dd305c5ecfd40b45fcfba45237c7fe->leave($__internal_808155e7a74de69f18820cf6fcb0f02134dd305c5ecfd40b45fcfba45237c7fe_prof);

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

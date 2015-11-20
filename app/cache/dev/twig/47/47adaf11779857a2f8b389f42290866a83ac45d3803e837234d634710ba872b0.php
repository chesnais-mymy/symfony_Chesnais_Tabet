<?php

/* EsieaBlogBundle:Advert:view.html.twig */
class __TwigTemplate_e102ee43d8ebb234c22ffacca39634f71058b94476c4a8315d401e3a9b6d1b28 extends Twig_Template
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
        $__internal_61bb7398389c2b2c2ed720ea3c942a337227686f5b33053c62061e30f888c11a = $this->env->getExtension("native_profiler");
        $__internal_61bb7398389c2b2c2ed720ea3c942a337227686f5b33053c62061e30f888c11a->enter($__internal_61bb7398389c2b2c2ed720ea3c942a337227686f5b33053c62061e30f888c11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:view.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
</head>
<body>
<h1>Affichage d'une annonce</h1>

<p>
  ";
        // line 13
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "<p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</p>

<p>
  Ici nous pourrons lire l'annonce ayant comme id : ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "<br />
  Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !
</p>
</body>
</html>";
        
        $__internal_61bb7398389c2b2c2ed720ea3c942a337227686f5b33053c62061e30f888c11a->leave($__internal_61bb7398389c2b2c2ed720ea3c942a337227686f5b33053c62061e30f888c11a_prof);

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
        return array (  53 => 19,  48 => 16,  39 => 14,  34 => 13,  22 => 2,);
    }
}
/* {# src/esiea/BlogBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <title>Bienvenue sur ma première page avec OpenClassrooms !</title>*/
/* </head>*/
/* <body>*/
/* <h1>Affichage d'une annonce</h1>*/
/* */
/* <p>*/
/*   {# On affiche tous les messages flash dont le nom est « info » #}*/
/*   {% for message in app.session.flashbag.get('info') %}*/
/* <p>Message flash : {{ message }}</p>*/
/* {% endfor %}*/
/* </p>*/
/* */
/* <p>*/
/*   Ici nous pourrons lire l'annonce ayant comme id : {{ id }}<br />*/
/*   Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !*/
/* </p>*/
/* </body>*/
/* </html>*/

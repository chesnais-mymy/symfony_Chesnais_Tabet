<?php

/* EsieaBlogBundle:Advert:add.html.twig */
class __TwigTemplate_60d2ecb7e3aa8a6cdd578587d028e844b924cb76d69d0bb2fa0c1dc0f500a18d extends Twig_Template
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
        $__internal_ef855dc947607aa5b1996bb5870982c8ce6cb9b10c842405ff129b7ff76cc10e = $this->env->getExtension("native_profiler");
        $__internal_ef855dc947607aa5b1996bb5870982c8ce6cb9b10c842405ff129b7ff76cc10e->enter($__internal_ef855dc947607aa5b1996bb5870982c8ce6cb9b10c842405ff129b7ff76cc10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:add.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>ajouter une annonce !</title>
</head>
<body>
<h1>Le formulaire</h1>

<p>
    ";
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "<p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</p>


</body>
</html>";
        
        $__internal_ef855dc947607aa5b1996bb5870982c8ce6cb9b10c842405ff129b7ff76cc10e->leave($__internal_ef855dc947607aa5b1996bb5870982c8ce6cb9b10c842405ff129b7ff76cc10e_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  38 => 12,  33 => 11,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>ajouter une annonce !</title>*/
/* </head>*/
/* <body>*/
/* <h1>Le formulaire</h1>*/
/* */
/* <p>*/
/*     {# On affiche tous les messages flash dont le nom est « info » #}*/
/*     {% for message in app.session.flashbag.get('info') %}*/
/* <p>Message flash : {{ message }}</p>*/
/* {% endfor %}*/
/* </p>*/
/* */
/* */
/* </body>*/
/* </html>*/

<?php

/* EsieaBlogBundle:Advert:index.html.twig */
class __TwigTemplate_c958479f423938efb07a06d38c278b1cfb0d7b48b5e80457d629ce3ab46781d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("EsieaBlogBundle::layout.html.twig", "EsieaBlogBundle:Advert:index.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'esieablog_body' => array($this, 'block_esieablog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EsieaBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e34c499b9da687a365a1e21b230df23a84e2ca8e5fdddd30cad245b06fd3c4e3 = $this->env->getExtension("native_profiler");
        $__internal_e34c499b9da687a365a1e21b230df23a84e2ca8e5fdddd30cad245b06fd3c4e3->enter($__internal_e34c499b9da687a365a1e21b230df23a84e2ca8e5fdddd30cad245b06fd3c4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e34c499b9da687a365a1e21b230df23a84e2ca8e5fdddd30cad245b06fd3c4e3->leave($__internal_e34c499b9da687a365a1e21b230df23a84e2ca8e5fdddd30cad245b06fd3c4e3_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_bda2e42512053b2f1e983353abce3a72b5a0f8f534486abf6cfd9601bbd08b91 = $this->env->getExtension("native_profiler");
        $__internal_bda2e42512053b2f1e983353abce3a72b5a0f8f534486abf6cfd9601bbd08b91->enter($__internal_bda2e42512053b2f1e983353abce3a72b5a0f8f534486abf6cfd9601bbd08b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_bda2e42512053b2f1e983353abce3a72b5a0f8f534486abf6cfd9601bbd08b91->leave($__internal_bda2e42512053b2f1e983353abce3a72b5a0f8f534486abf6cfd9601bbd08b91_prof);

    }

    // line 8
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_4681a0248dc4a498e678941336c703cb07c4f4eacc4a0a6590523c84e1726495 = $this->env->getExtension("native_profiler");
        $__internal_4681a0248dc4a498e678941336c703cb07c4f4eacc4a0a6590523c84e1726495->enter($__internal_4681a0248dc4a498e678941336c703cb07c4f4eacc4a0a6590523c84e1726495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 9
        echo "
    <h2>Liste des recettes</h2>

    <ul>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 14
            echo "            <li>
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "titre", array()), "html", null, true);
            echo "
                </a>
                par ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "auteur", array()), "html", null, true);
            echo ",
                le ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "            <li>Aucune annonce de recette</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>



";
        
        $__internal_4681a0248dc4a498e678941336c703cb07c4f4eacc4a0a6590523c84e1726495->leave($__internal_4681a0248dc4a498e678941336c703cb07c4f4eacc4a0a6590523c84e1726495_prof);

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
        return array (  97 => 24,  90 => 22,  82 => 19,  78 => 18,  73 => 16,  69 => 15,  66 => 14,  61 => 13,  55 => 9,  49 => 8,  35 => 6,  11 => 4,);
    }
}
/* {# src/Esiea/BlogBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* */
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}Accueil {{ parent() }} {% endblock %}*/
/* */
/* {% block esieablog_body %}*/
/* */
/*     <h2>Liste des recettes</h2>*/
/* */
/*     <ul>*/
/*         {% for advert in listAdverts %}*/
/*             <li>*/
/*                 <a href="{{ path('esiea_blog_view', {'id': advert.id}) }}">*/
/*                     {{ advert.titre }}*/
/*                 </a>*/
/*                 par {{ advert.auteur }},*/
/*                 le {{ advert.date|date('d/m/Y') }}*/
/*             </li>*/
/*         {% else %}*/
/*             <li>Aucune annonce de recette</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* */
/* */
/* */
/* {% endblock %}*/

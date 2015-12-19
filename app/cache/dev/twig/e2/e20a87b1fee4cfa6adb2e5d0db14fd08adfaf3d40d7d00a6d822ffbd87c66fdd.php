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
        $__internal_283995b2560db3901190f9179a4a3763ecb9a6376979e1679ae37ba1a232cf79 = $this->env->getExtension("native_profiler");
        $__internal_283995b2560db3901190f9179a4a3763ecb9a6376979e1679ae37ba1a232cf79->enter($__internal_283995b2560db3901190f9179a4a3763ecb9a6376979e1679ae37ba1a232cf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_283995b2560db3901190f9179a4a3763ecb9a6376979e1679ae37ba1a232cf79->leave($__internal_283995b2560db3901190f9179a4a3763ecb9a6376979e1679ae37ba1a232cf79_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b7c47274e7d8eda9e55685d2ac9f192e513e3af2ebcd3d5dfb3064b77d449ea = $this->env->getExtension("native_profiler");
        $__internal_0b7c47274e7d8eda9e55685d2ac9f192e513e3af2ebcd3d5dfb3064b77d449ea->enter($__internal_0b7c47274e7d8eda9e55685d2ac9f192e513e3af2ebcd3d5dfb3064b77d449ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_0b7c47274e7d8eda9e55685d2ac9f192e513e3af2ebcd3d5dfb3064b77d449ea->leave($__internal_0b7c47274e7d8eda9e55685d2ac9f192e513e3af2ebcd3d5dfb3064b77d449ea_prof);

    }

    // line 8
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_9e438ddc56c1f044f4b7b0a29995b48e181eb067a5baabbe15b055be4f762551 = $this->env->getExtension("native_profiler");
        $__internal_9e438ddc56c1f044f4b7b0a29995b48e181eb067a5baabbe15b055be4f762551->enter($__internal_9e438ddc56c1f044f4b7b0a29995b48e181eb067a5baabbe15b055be4f762551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 9
        echo "
    <h2>Liste des annonces</h2>

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
            echo "            <li>Pas (encore !) d'annonces</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>

";
        
        $__internal_9e438ddc56c1f044f4b7b0a29995b48e181eb067a5baabbe15b055be4f762551->leave($__internal_9e438ddc56c1f044f4b7b0a29995b48e181eb067a5baabbe15b055be4f762551_prof);

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
/*     <h2>Liste des annonces</h2>*/
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
/*             <li>Pas (encore !) d'annonces</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* */
/* {% endblock %}*/

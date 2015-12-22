<?php

/* EsieaBlogBundle::layout.html.twig */
class __TwigTemplate_6c0e9b6f36cae8a07ddacbb9ed3c3256285b4e706452df1883d9a39c43485a40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::layout.html.twig", "EsieaBlogBundle::layout.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'esieablog_body' => array($this, 'block_esieablog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ce801f6cf7e0ecdc2431f857844902d2a2acb9ec4d1deeb4ee2dc01ef007192 = $this->env->getExtension("native_profiler");
        $__internal_8ce801f6cf7e0ecdc2431f857844902d2a2acb9ec4d1deeb4ee2dc01ef007192->enter($__internal_8ce801f6cf7e0ecdc2431f857844902d2a2acb9ec4d1deeb4ee2dc01ef007192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ce801f6cf7e0ecdc2431f857844902d2a2acb9ec4d1deeb4ee2dc01ef007192->leave($__internal_8ce801f6cf7e0ecdc2431f857844902d2a2acb9ec4d1deeb4ee2dc01ef007192_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3563b707fcd9d50c94f685e131eb443e4dfbc1ceadd2fb0daf8b0e96a5446572 = $this->env->getExtension("native_profiler");
        $__internal_3563b707fcd9d50c94f685e131eb443e4dfbc1ceadd2fb0daf8b0e96a5446572->enter($__internal_3563b707fcd9d50c94f685e131eb443e4dfbc1ceadd2fb0daf8b0e96a5446572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3563b707fcd9d50c94f685e131eb443e4dfbc1ceadd2fb0daf8b0e96a5446572->leave($__internal_3563b707fcd9d50c94f685e131eb443e4dfbc1ceadd2fb0daf8b0e96a5446572_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_16e3a503fea4d45e513f9072028849c19d6f3241ec5857fb0b0766a34e4037ae = $this->env->getExtension("native_profiler");
        $__internal_16e3a503fea4d45e513f9072028849c19d6f3241ec5857fb0b0766a34e4037ae->enter($__internal_16e3a503fea4d45e513f9072028849c19d6f3241ec5857fb0b0766a34e4037ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    ";
        // line 13
        echo "    <h1>Cuisine d'ici et d'ailleurs</h1>

    <hr>
 

    ";
        // line 19
        echo "    ";
        $this->displayBlock('esieablog_body', $context, $blocks);
        // line 21
        echo "
";
        
        $__internal_16e3a503fea4d45e513f9072028849c19d6f3241ec5857fb0b0766a34e4037ae->leave($__internal_16e3a503fea4d45e513f9072028849c19d6f3241ec5857fb0b0766a34e4037ae_prof);

    }

    // line 19
    public function block_esieablog_body($context, array $blocks = array())
    {
        $__internal_e504689ef9ae4fe449588e3611980a9457c99be017688af90d8fc0faf7805ed1 = $this->env->getExtension("native_profiler");
        $__internal_e504689ef9ae4fe449588e3611980a9457c99be017688af90d8fc0faf7805ed1->enter($__internal_e504689ef9ae4fe449588e3611980a9457c99be017688af90d8fc0faf7805ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieablog_body"));

        // line 20
        echo "    ";
        
        $__internal_e504689ef9ae4fe449588e3611980a9457c99be017688af90d8fc0faf7805ed1->leave($__internal_e504689ef9ae4fe449588e3611980a9457c99be017688af90d8fc0faf7805ed1_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  79 => 19,  71 => 21,  68 => 19,  61 => 13,  58 => 11,  52 => 10,  42 => 7,  36 => 6,  11 => 4,);
    }
}
/* {# src/Esiea/BlocBundle/Resources/views/layout.html.twig #}*/
/* */
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {# sous-titre commun à toutes les pages #}*/
/*     <h1>Cuisine d'ici et d'ailleurs</h1>*/
/* */
/*     <hr>*/
/*  */
/* */
/*     {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*     {% block esieablog_body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/* */

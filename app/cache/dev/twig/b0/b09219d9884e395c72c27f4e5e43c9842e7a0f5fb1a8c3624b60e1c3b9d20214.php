<?php

/* EsieaBlogBundle:Advert:formulaire.html.twig */
class __TwigTemplate_2d444963dd4fb96cc9bf467b4c3e8d43a38abb7813e92d76d224bfc1e7a0bdda extends Twig_Template
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
        $__internal_6e846d6a3b109d2bea53b5d748f53e7221ce8f0e9c31b19856932e2eac6cc4db = $this->env->getExtension("native_profiler");
        $__internal_6e846d6a3b109d2bea53b5d748f53e7221ce8f0e9c31b19856932e2eac6cc4db->enter($__internal_6e846d6a3b109d2bea53b5d748f53e7221ce8f0e9c31b19856932e2eac6cc4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Advert:formulaire.html.twig"));

        // line 2
        echo "
<h3>Formulaire de recettes</h3>

<div class=\"well\">
  ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 9
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  ";
        // line 12
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
        echo "


    <div class=\"form-group\">
      ";
        // line 17
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de l'annonce"));
        echo "

      ";
        // line 20
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "

      <div class=\"col-sm-4\">
        ";
        // line 24
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", array()), 'row');
        echo "

    <div class=\"form-group\">
      ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingredients", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Ingrédients de la recette"));
        echo "
      ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingredients", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preparation", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Préparation de la recette"));
        echo "
      ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preparation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>



  ";
        // line 49
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 54
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  
  ";
        // line 57
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_6e846d6a3b109d2bea53b5d748f53e7221ce8f0e9c31b19856932e2eac6cc4db->leave($__internal_6e846d6a3b109d2bea53b5d748f53e7221ce8f0e9c31b19856932e2eac6cc4db_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Advert:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 57,  115 => 54,  109 => 49,  100 => 42,  95 => 40,  91 => 39,  83 => 34,  78 => 32,  74 => 31,  68 => 28,  60 => 24,  53 => 20,  47 => 17,  39 => 12,  33 => 9,  28 => 6,  22 => 2,);
    }
}
/* {# src/Esiea/BlogBundle/Resources/views/Advert/formulaire.html.twig #}*/
/* */
/* <h3>Formulaire de recettes</h3>*/
/* */
/* <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/* */
/*   {# Génération du label + error + widget pour un champ #}*/
/*   {{ form_row(form.date) }}*/
/* */
/* */
/*     <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.titre, "Titre de l'annonce", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.titre) }}*/
/* */
/*       <div class="col-sm-4">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/* 	{{ form_row(form.auteur) }}*/
/* */
/*     <div class="form-group">*/
/*       {{ form_label(form.ingredients, "Ingrédients de la recette", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.titre) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.ingredients, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       {{ form_label(form.preparation, "Préparation de la recette", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.titre) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.preparation, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/* */
/*   {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/*   {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/*   {# Génération automatique des champs pas encore écrits.*/
/*      Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/*      et tous les champs cachés (type « hidden »). #}*/
/*   {{ form_rest(form) }}*/
/*   */
/*   {# Fermeture de la balise <form> du formulaire HTML #}*/
/*   {{ form_end(form) }}*/
/* </div>*/
/* */

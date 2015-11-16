<?php

/* base.html.twig */
class __TwigTemplate_85962bb4747e00594ccb212e1d2a539b7942eaae2857ce68905e4b58a0bfcf27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_789258800dd92c58d53ae7ee40069bc1ac123d58cf0f7e3fe0827120692b9813 = $this->env->getExtension("native_profiler");
        $__internal_789258800dd92c58d53ae7ee40069bc1ac123d58cf0f7e3fe0827120692b9813->enter($__internal_789258800dd92c58d53ae7ee40069bc1ac123d58cf0f7e3fe0827120692b9813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_789258800dd92c58d53ae7ee40069bc1ac123d58cf0f7e3fe0827120692b9813->leave($__internal_789258800dd92c58d53ae7ee40069bc1ac123d58cf0f7e3fe0827120692b9813_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ee569a3396693f43459708c1fcd745542ebb12d34f11536217bf75d5290eb7c = $this->env->getExtension("native_profiler");
        $__internal_6ee569a3396693f43459708c1fcd745542ebb12d34f11536217bf75d5290eb7c->enter($__internal_6ee569a3396693f43459708c1fcd745542ebb12d34f11536217bf75d5290eb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6ee569a3396693f43459708c1fcd745542ebb12d34f11536217bf75d5290eb7c->leave($__internal_6ee569a3396693f43459708c1fcd745542ebb12d34f11536217bf75d5290eb7c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7f2f846c2c54b8606e84935271150081c5c0f3ea2ec4db21fb5f03064657310 = $this->env->getExtension("native_profiler");
        $__internal_c7f2f846c2c54b8606e84935271150081c5c0f3ea2ec4db21fb5f03064657310->enter($__internal_c7f2f846c2c54b8606e84935271150081c5c0f3ea2ec4db21fb5f03064657310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c7f2f846c2c54b8606e84935271150081c5c0f3ea2ec4db21fb5f03064657310->leave($__internal_c7f2f846c2c54b8606e84935271150081c5c0f3ea2ec4db21fb5f03064657310_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_41548c5c96631e4ba1ed9a6854db10a01108d5ccdfef9768cb4d504613b57059 = $this->env->getExtension("native_profiler");
        $__internal_41548c5c96631e4ba1ed9a6854db10a01108d5ccdfef9768cb4d504613b57059->enter($__internal_41548c5c96631e4ba1ed9a6854db10a01108d5ccdfef9768cb4d504613b57059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_41548c5c96631e4ba1ed9a6854db10a01108d5ccdfef9768cb4d504613b57059->leave($__internal_41548c5c96631e4ba1ed9a6854db10a01108d5ccdfef9768cb4d504613b57059_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5734856ab770d79c9079b83ace12242c6c05401bbeec5251647e28a8f4351de = $this->env->getExtension("native_profiler");
        $__internal_d5734856ab770d79c9079b83ace12242c6c05401bbeec5251647e28a8f4351de->enter($__internal_d5734856ab770d79c9079b83ace12242c6c05401bbeec5251647e28a8f4351de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d5734856ab770d79c9079b83ace12242c6c05401bbeec5251647e28a8f4351de->leave($__internal_d5734856ab770d79c9079b83ace12242c6c05401bbeec5251647e28a8f4351de_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

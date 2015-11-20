<?php

/* base.html.twig */
class __TwigTemplate_7d9d497ef70cdd066a854b793e751b44f79cb68bc5ab0139eb0a4d533904ad4a extends Twig_Template
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
        $__internal_b4c202be1cf1024de473c45e2de159b2ead4f20b22d1bd56dd70f8c7a133df90 = $this->env->getExtension("native_profiler");
        $__internal_b4c202be1cf1024de473c45e2de159b2ead4f20b22d1bd56dd70f8c7a133df90->enter($__internal_b4c202be1cf1024de473c45e2de159b2ead4f20b22d1bd56dd70f8c7a133df90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " -Le Blog de Myriam et Hafida</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_b4c202be1cf1024de473c45e2de159b2ead4f20b22d1bd56dd70f8c7a133df90->leave($__internal_b4c202be1cf1024de473c45e2de159b2ead4f20b22d1bd56dd70f8c7a133df90_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cfb03f6ecfb0fe5d61dff376419622411c067b410602be32e917f38ca035ea0 = $this->env->getExtension("native_profiler");
        $__internal_7cfb03f6ecfb0fe5d61dff376419622411c067b410602be32e917f38ca035ea0->enter($__internal_7cfb03f6ecfb0fe5d61dff376419622411c067b410602be32e917f38ca035ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7cfb03f6ecfb0fe5d61dff376419622411c067b410602be32e917f38ca035ea0->leave($__internal_7cfb03f6ecfb0fe5d61dff376419622411c067b410602be32e917f38ca035ea0_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_44b3d3272da5c1814a1f35a727fcda8304a97ced76f426238b6f6ebefba07389 = $this->env->getExtension("native_profiler");
        $__internal_44b3d3272da5c1814a1f35a727fcda8304a97ced76f426238b6f6ebefba07389->enter($__internal_44b3d3272da5c1814a1f35a727fcda8304a97ced76f426238b6f6ebefba07389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_44b3d3272da5c1814a1f35a727fcda8304a97ced76f426238b6f6ebefba07389->leave($__internal_44b3d3272da5c1814a1f35a727fcda8304a97ced76f426238b6f6ebefba07389_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e96a0c23edade63859ce60234b12a0f7bf54caec910b07cabc330114bf1bd551 = $this->env->getExtension("native_profiler");
        $__internal_e96a0c23edade63859ce60234b12a0f7bf54caec910b07cabc330114bf1bd551->enter($__internal_e96a0c23edade63859ce60234b12a0f7bf54caec910b07cabc330114bf1bd551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e96a0c23edade63859ce60234b12a0f7bf54caec910b07cabc330114bf1bd551->leave($__internal_e96a0c23edade63859ce60234b12a0f7bf54caec910b07cabc330114bf1bd551_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2abb9757b4ca201b7abe8fd1ff51c46c85f3d2e66f9f32c6a7b48424cd7aa780 = $this->env->getExtension("native_profiler");
        $__internal_2abb9757b4ca201b7abe8fd1ff51c46c85f3d2e66f9f32c6a7b48424cd7aa780->enter($__internal_2abb9757b4ca201b7abe8fd1ff51c46c85f3d2e66f9f32c6a7b48424cd7aa780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2abb9757b4ca201b7abe8fd1ff51c46c85f3d2e66f9f32c6a7b48424cd7aa780->leave($__internal_2abb9757b4ca201b7abe8fd1ff51c46c85f3d2e66f9f32c6a7b48424cd7aa780_prof);

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
        return array (  97 => 13,  86 => 12,  75 => 8,  64 => 5,  55 => 14,  52 => 13,  50 => 12,  43 => 9,  41 => 8,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %} -Le Blog de Myriam et Hafida</title>*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

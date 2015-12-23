<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9e901c101465e7094ef7764abaade893f8c38ac277e24c51b60c8e65574d46f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90867711b79ae0562195dcd43b8d219989912dd434f8c08dcc3260a8e39e6424 = $this->env->getExtension("native_profiler");
        $__internal_90867711b79ae0562195dcd43b8d219989912dd434f8c08dcc3260a8e39e6424->enter($__internal_90867711b79ae0562195dcd43b8d219989912dd434f8c08dcc3260a8e39e6424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_90867711b79ae0562195dcd43b8d219989912dd434f8c08dcc3260a8e39e6424->leave($__internal_90867711b79ae0562195dcd43b8d219989912dd434f8c08dcc3260a8e39e6424_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b362f7abc36c140eaecf07cbc7b53ecf4be3258520ce32bcdf58eb26a4d8bbe2 = $this->env->getExtension("native_profiler");
        $__internal_b362f7abc36c140eaecf07cbc7b53ecf4be3258520ce32bcdf58eb26a4d8bbe2->enter($__internal_b362f7abc36c140eaecf07cbc7b53ecf4be3258520ce32bcdf58eb26a4d8bbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b362f7abc36c140eaecf07cbc7b53ecf4be3258520ce32bcdf58eb26a4d8bbe2->leave($__internal_b362f7abc36c140eaecf07cbc7b53ecf4be3258520ce32bcdf58eb26a4d8bbe2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

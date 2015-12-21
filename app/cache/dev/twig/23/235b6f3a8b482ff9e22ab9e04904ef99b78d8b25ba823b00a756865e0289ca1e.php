<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_fa7fbafd3e2b83d5a02d8988172a515595a6e61b18efe22f31eaf51b417b1ea8 extends Twig_Template
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
        $__internal_02f9b5341e6193a46f8715ca86d74ff724ea12dfc8ddafc54338cbca375ee3c4 = $this->env->getExtension("native_profiler");
        $__internal_02f9b5341e6193a46f8715ca86d74ff724ea12dfc8ddafc54338cbca375ee3c4->enter($__internal_02f9b5341e6193a46f8715ca86d74ff724ea12dfc8ddafc54338cbca375ee3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_02f9b5341e6193a46f8715ca86d74ff724ea12dfc8ddafc54338cbca375ee3c4->leave($__internal_02f9b5341e6193a46f8715ca86d74ff724ea12dfc8ddafc54338cbca375ee3c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */

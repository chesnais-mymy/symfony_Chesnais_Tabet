<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_427a13dbbb00f255b03df3f9b9025eb85c89339d9538132b1d83c99db16af8ea extends Twig_Template
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
        $__internal_8f0e5a85bc828cf2ed321068e79253d6e7a741c5e3cd34adc3d6f8f4514d385a = $this->env->getExtension("native_profiler");
        $__internal_8f0e5a85bc828cf2ed321068e79253d6e7a741c5e3cd34adc3d6f8f4514d385a->enter($__internal_8f0e5a85bc828cf2ed321068e79253d6e7a741c5e3cd34adc3d6f8f4514d385a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_8f0e5a85bc828cf2ed321068e79253d6e7a741c5e3cd34adc3d6f8f4514d385a->leave($__internal_8f0e5a85bc828cf2ed321068e79253d6e7a741c5e3cd34adc3d6f8f4514d385a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */

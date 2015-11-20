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
        $__internal_ff85632c369ffa9d4f3eafbb4cfed1db9746e0e641aa398ce50bdc26ca61d996 = $this->env->getExtension("native_profiler");
        $__internal_ff85632c369ffa9d4f3eafbb4cfed1db9746e0e641aa398ce50bdc26ca61d996->enter($__internal_ff85632c369ffa9d4f3eafbb4cfed1db9746e0e641aa398ce50bdc26ca61d996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_ff85632c369ffa9d4f3eafbb4cfed1db9746e0e641aa398ce50bdc26ca61d996->leave($__internal_ff85632c369ffa9d4f3eafbb4cfed1db9746e0e641aa398ce50bdc26ca61d996_prof);

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

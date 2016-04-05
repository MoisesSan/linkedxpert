<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_cf2c3053aed7647040c3e44e52f3943999d05344818fcca0d2dc72ce9ac4a2ec extends Twig_Template
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
        $__internal_e2bf13ac8fe39b05908a4bfdc6a709e87cf2b3b745b8da368b24036fff9e4045 = $this->env->getExtension("native_profiler");
        $__internal_e2bf13ac8fe39b05908a4bfdc6a709e87cf2b3b745b8da368b24036fff9e4045->enter($__internal_e2bf13ac8fe39b05908a4bfdc6a709e87cf2b3b745b8da368b24036fff9e4045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_e2bf13ac8fe39b05908a4bfdc6a709e87cf2b3b745b8da368b24036fff9e4045->leave($__internal_e2bf13ac8fe39b05908a4bfdc6a709e87cf2b3b745b8da368b24036fff9e4045_prof);

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
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */

<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0be69d06fbcab7a2ac7a4326af719ae29e143fa04112aabce25e3004709ef3bb extends Twig_Template
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
        $__internal_220e5f11a474133fa238b3456e920e3b5ad7c70c9a8eaf388d29af98513b4927 = $this->env->getExtension("native_profiler");
        $__internal_220e5f11a474133fa238b3456e920e3b5ad7c70c9a8eaf388d29af98513b4927->enter($__internal_220e5f11a474133fa238b3456e920e3b5ad7c70c9a8eaf388d29af98513b4927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_220e5f11a474133fa238b3456e920e3b5ad7c70c9a8eaf388d29af98513b4927->leave($__internal_220e5f11a474133fa238b3456e920e3b5ad7c70c9a8eaf388d29af98513b4927_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

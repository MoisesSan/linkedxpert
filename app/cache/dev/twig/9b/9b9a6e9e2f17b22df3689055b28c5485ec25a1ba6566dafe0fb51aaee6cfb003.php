<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_77d3778cd08c289364d30ab33e990c6a102d349c92c1a94f8223688dd9464dc5 extends Twig_Template
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
        $__internal_5b37c31c9ab4d09f1563a359db69e94b72a2ace35d0fdaf5fcdcdf3122c4e17c = $this->env->getExtension("native_profiler");
        $__internal_5b37c31c9ab4d09f1563a359db69e94b72a2ace35d0fdaf5fcdcdf3122c4e17c->enter($__internal_5b37c31c9ab4d09f1563a359db69e94b72a2ace35d0fdaf5fcdcdf3122c4e17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5b37c31c9ab4d09f1563a359db69e94b72a2ace35d0fdaf5fcdcdf3122c4e17c->leave($__internal_5b37c31c9ab4d09f1563a359db69e94b72a2ace35d0fdaf5fcdcdf3122c4e17c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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

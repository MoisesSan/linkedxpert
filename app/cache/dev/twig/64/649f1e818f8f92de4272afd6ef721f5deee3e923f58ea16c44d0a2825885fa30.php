<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e568a903661c226254452b0a648101868f68f1c55c2ac0d2fbcce17fd4786bde extends Twig_Template
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
        $__internal_0537a63dcfcd94c9b299554d6abae18e3ad694b13be52ff0f210e820e0664e75 = $this->env->getExtension("native_profiler");
        $__internal_0537a63dcfcd94c9b299554d6abae18e3ad694b13be52ff0f210e820e0664e75->enter($__internal_0537a63dcfcd94c9b299554d6abae18e3ad694b13be52ff0f210e820e0664e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0537a63dcfcd94c9b299554d6abae18e3ad694b13be52ff0f210e820e0664e75->leave($__internal_0537a63dcfcd94c9b299554d6abae18e3ad694b13be52ff0f210e820e0664e75_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

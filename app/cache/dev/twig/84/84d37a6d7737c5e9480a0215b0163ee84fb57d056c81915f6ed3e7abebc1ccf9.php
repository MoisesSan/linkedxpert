<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e065a0c800da0f1922ecc32d2b55006c0f37b0e24cb32ef81876635a376556fd extends Twig_Template
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
        $__internal_4b56d91183dd500c20a8d57beda17f818aeb0a83599e4961c03736e0a58ab1cb = $this->env->getExtension("native_profiler");
        $__internal_4b56d91183dd500c20a8d57beda17f818aeb0a83599e4961c03736e0a58ab1cb->enter($__internal_4b56d91183dd500c20a8d57beda17f818aeb0a83599e4961c03736e0a58ab1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4b56d91183dd500c20a8d57beda17f818aeb0a83599e4961c03736e0a58ab1cb->leave($__internal_4b56d91183dd500c20a8d57beda17f818aeb0a83599e4961c03736e0a58ab1cb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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

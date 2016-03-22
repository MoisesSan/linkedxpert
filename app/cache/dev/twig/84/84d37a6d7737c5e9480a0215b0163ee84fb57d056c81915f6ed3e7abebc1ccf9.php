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
        $__internal_1928de61b33858055a6add7edb8c11ba17426e5adfbd258d94454d97c5b34c96 = $this->env->getExtension("native_profiler");
        $__internal_1928de61b33858055a6add7edb8c11ba17426e5adfbd258d94454d97c5b34c96->enter($__internal_1928de61b33858055a6add7edb8c11ba17426e5adfbd258d94454d97c5b34c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_1928de61b33858055a6add7edb8c11ba17426e5adfbd258d94454d97c5b34c96->leave($__internal_1928de61b33858055a6add7edb8c11ba17426e5adfbd258d94454d97c5b34c96_prof);

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

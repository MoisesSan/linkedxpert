<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_781570d97668124941ee426767ad9a5636f1ea0aaa9dc90e96c8a7faa4998dd3 extends Twig_Template
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
        $__internal_c1da9e95ca78947bff69d9537704ce9112acd0d8d9f897746fa625041678f626 = $this->env->getExtension("native_profiler");
        $__internal_c1da9e95ca78947bff69d9537704ce9112acd0d8d9f897746fa625041678f626->enter($__internal_c1da9e95ca78947bff69d9537704ce9112acd0d8d9f897746fa625041678f626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c1da9e95ca78947bff69d9537704ce9112acd0d8d9f897746fa625041678f626->leave($__internal_c1da9e95ca78947bff69d9537704ce9112acd0d8d9f897746fa625041678f626_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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

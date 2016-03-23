<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8c1208772f2d11c79ca812b3b94ffaf482103140e2ffeb5518e5ca61b9d5447f extends Twig_Template
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
        $__internal_d9c51c8f493bb9a88c0156788d88ead0bc219b735c2f0d8ff012f65cdb78cb7c = $this->env->getExtension("native_profiler");
        $__internal_d9c51c8f493bb9a88c0156788d88ead0bc219b735c2f0d8ff012f65cdb78cb7c->enter($__internal_d9c51c8f493bb9a88c0156788d88ead0bc219b735c2f0d8ff012f65cdb78cb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d9c51c8f493bb9a88c0156788d88ead0bc219b735c2f0d8ff012f65cdb78cb7c->leave($__internal_d9c51c8f493bb9a88c0156788d88ead0bc219b735c2f0d8ff012f65cdb78cb7c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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

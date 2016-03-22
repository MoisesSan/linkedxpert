<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_9fee32b1f25116f782a243ab2a519cff3a48878510db614718c6306c08d8f59c extends Twig_Template
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
        $__internal_9f81ed734c91de87d4cd6cd997754a2d27f8f6b699784e733560426b587a4601 = $this->env->getExtension("native_profiler");
        $__internal_9f81ed734c91de87d4cd6cd997754a2d27f8f6b699784e733560426b587a4601->enter($__internal_9f81ed734c91de87d4cd6cd997754a2d27f8f6b699784e733560426b587a4601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9f81ed734c91de87d4cd6cd997754a2d27f8f6b699784e733560426b587a4601->leave($__internal_9f81ed734c91de87d4cd6cd997754a2d27f8f6b699784e733560426b587a4601_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

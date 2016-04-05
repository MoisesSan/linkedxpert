<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_8f9f0e67e08dfa6ff978fcb4add1b6cc84c32a2524be97be41ac57f005ac8da1 extends Twig_Template
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
        $__internal_b9fdb0b16a696bd4e706b2c5f7a98bf04f77ecc2c094d0f658fee7b59b7d718a = $this->env->getExtension("native_profiler");
        $__internal_b9fdb0b16a696bd4e706b2c5f7a98bf04f77ecc2c094d0f658fee7b59b7d718a->enter($__internal_b9fdb0b16a696bd4e706b2c5f7a98bf04f77ecc2c094d0f658fee7b59b7d718a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b9fdb0b16a696bd4e706b2c5f7a98bf04f77ecc2c094d0f658fee7b59b7d718a->leave($__internal_b9fdb0b16a696bd4e706b2c5f7a98bf04f77ecc2c094d0f658fee7b59b7d718a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */

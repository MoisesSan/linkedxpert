<?php

/* @AcmeDemo/Secured/helloadmin.html.twig */
class __TwigTemplate_7dac8c45366ea5ad9b94fde3d2d5ca593e052d28981df6d4e6805b82c9cbd34b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig", "@AcmeDemo/Secured/helloadmin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f90f0c8213a26533ee123013f5920ab14c4a9cce9633f0f8e301262ec48678ef = $this->env->getExtension("native_profiler");
        $__internal_f90f0c8213a26533ee123013f5920ab14c4a9cce9633f0f8e301262ec48678ef->enter($__internal_f90f0c8213a26533ee123013f5920ab14c4a9cce9633f0f8e301262ec48678ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Secured/helloadmin.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f90f0c8213a26533ee123013f5920ab14c4a9cce9633f0f8e301262ec48678ef->leave($__internal_f90f0c8213a26533ee123013f5920ab14c4a9cce9633f0f8e301262ec48678ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fdad689b2ba594533f9210e3289305e8a4816701e5d7235b6f4989f580b7286 = $this->env->getExtension("native_profiler");
        $__internal_7fdad689b2ba594533f9210e3289305e8a4816701e5d7235b6f4989f580b7286->enter($__internal_7fdad689b2ba594533f9210e3289305e8a4816701e5d7235b6f4989f580b7286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_7fdad689b2ba594533f9210e3289305e8a4816701e5d7235b6f4989f580b7286->leave($__internal_7fdad689b2ba594533f9210e3289305e8a4816701e5d7235b6f4989f580b7286_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a6fb37b84e302baa66c923be3c2611ea97167b8f84f57c1e362d65690ac3e058 = $this->env->getExtension("native_profiler");
        $__internal_a6fb37b84e302baa66c923be3c2611ea97167b8f84f57c1e362d65690ac3e058->enter($__internal_a6fb37b84e302baa66c923be3c2611ea97167b8f84f57c1e362d65690ac3e058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
        
        $__internal_a6fb37b84e302baa66c923be3c2611ea97167b8f84f57c1e362d65690ac3e058->leave($__internal_a6fb37b84e302baa66c923be3c2611ea97167b8f84f57c1e362d65690ac3e058_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Secured/helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  50 => 5,  38 => 3,  31 => 1,  29 => 9,  11 => 1,);
    }
}
/* {% extends "AcmeDemoBundle:Secured:layout.html.twig" %}*/
/* */
/* {% block title "Hello " ~ name %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">Hello {{ name }} secured for Admins only!</h1>*/
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */

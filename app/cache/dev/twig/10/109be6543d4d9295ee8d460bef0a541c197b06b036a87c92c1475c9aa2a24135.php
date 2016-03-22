<?php

/* @AcmeDemo/Secured/hello.html.twig */
class __TwigTemplate_7007fd0c1852222e5c50b2d4a0d9f41f69d9e300ce93d4db134ab3dd5be49b90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig", "@AcmeDemo/Secured/hello.html.twig", 1);
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
        $__internal_25cb46eac8a97b9bf1a6213a7313228144246a717d4e912091322fcad2d701a9 = $this->env->getExtension("native_profiler");
        $__internal_25cb46eac8a97b9bf1a6213a7313228144246a717d4e912091322fcad2d701a9->enter($__internal_25cb46eac8a97b9bf1a6213a7313228144246a717d4e912091322fcad2d701a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Secured/hello.html.twig"));

        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25cb46eac8a97b9bf1a6213a7313228144246a717d4e912091322fcad2d701a9->leave($__internal_25cb46eac8a97b9bf1a6213a7313228144246a717d4e912091322fcad2d701a9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62b44194cab9afab51dea8d7b1c6bb854ff7251e36a3ed5ebddefa474062f18a = $this->env->getExtension("native_profiler");
        $__internal_62b44194cab9afab51dea8d7b1c6bb854ff7251e36a3ed5ebddefa474062f18a->enter($__internal_62b44194cab9afab51dea8d7b1c6bb854ff7251e36a3ed5ebddefa474062f18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_62b44194cab9afab51dea8d7b1c6bb854ff7251e36a3ed5ebddefa474062f18a->leave($__internal_62b44194cab9afab51dea8d7b1c6bb854ff7251e36a3ed5ebddefa474062f18a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_5855ba0adb13f999c31a1f3bc790cfb2dd0d09040726b2992bd408d94af6cec0 = $this->env->getExtension("native_profiler");
        $__internal_5855ba0adb13f999c31a1f3bc790cfb2dd0d09040726b2992bd408d94af6cec0->enter($__internal_5855ba0adb13f999c31a1f3bc790cfb2dd0d09040726b2992bd408d94af6cec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
        
        $__internal_5855ba0adb13f999c31a1f3bc790cfb2dd0d09040726b2992bd408d94af6cec0->leave($__internal_5855ba0adb13f999c31a1f3bc790cfb2dd0d09040726b2992bd408d94af6cec0_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Secured/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  56 => 6,  50 => 5,  38 => 3,  31 => 1,  29 => 11,  11 => 1,);
    }
}
/* {% extends "AcmeDemoBundle:Secured:layout.html.twig" %}*/
/* */
/* {% block title "Hello " ~ name %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">Hello {{ name }}!</h1>*/
/* */
/*     <a href="{{ path('_demo_secured_hello_admin', { 'name': name }) }}">Hello resource secured for <strong>admin</strong> only.</a>*/
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */

<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_a2c264ba125aabcee94e8ee6ce7590cb33dcc4023ba2cdc869360886338bed96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig", "AcmeDemoBundle:Secured:hello.html.twig", 1);
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
        $__internal_a380118db6fc4ef8d7777f2d0a7958d0ec572a04848de88882ca5933461ad9ec = $this->env->getExtension("native_profiler");
        $__internal_a380118db6fc4ef8d7777f2d0a7958d0ec572a04848de88882ca5933461ad9ec->enter($__internal_a380118db6fc4ef8d7777f2d0a7958d0ec572a04848de88882ca5933461ad9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:hello.html.twig"));

        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a380118db6fc4ef8d7777f2d0a7958d0ec572a04848de88882ca5933461ad9ec->leave($__internal_a380118db6fc4ef8d7777f2d0a7958d0ec572a04848de88882ca5933461ad9ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05d7a4c3d10df96a63dba7a28b99bfcabc7e385f3450d15a7591d16f3169de07 = $this->env->getExtension("native_profiler");
        $__internal_05d7a4c3d10df96a63dba7a28b99bfcabc7e385f3450d15a7591d16f3169de07->enter($__internal_05d7a4c3d10df96a63dba7a28b99bfcabc7e385f3450d15a7591d16f3169de07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_05d7a4c3d10df96a63dba7a28b99bfcabc7e385f3450d15a7591d16f3169de07->leave($__internal_05d7a4c3d10df96a63dba7a28b99bfcabc7e385f3450d15a7591d16f3169de07_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_069682945273c46c2ecca6593a7865bafbe345f57b7ee7eaf59078555c990b79 = $this->env->getExtension("native_profiler");
        $__internal_069682945273c46c2ecca6593a7865bafbe345f57b7ee7eaf59078555c990b79->enter($__internal_069682945273c46c2ecca6593a7865bafbe345f57b7ee7eaf59078555c990b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
        
        $__internal_069682945273c46c2ecca6593a7865bafbe345f57b7ee7eaf59078555c990b79->leave($__internal_069682945273c46c2ecca6593a7865bafbe345f57b7ee7eaf59078555c990b79_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
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

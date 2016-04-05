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
        $__internal_132c25c1a53445b4412ae6254f87fb2932fb9a743879fb96711dee9eaf9d8634 = $this->env->getExtension("native_profiler");
        $__internal_132c25c1a53445b4412ae6254f87fb2932fb9a743879fb96711dee9eaf9d8634->enter($__internal_132c25c1a53445b4412ae6254f87fb2932fb9a743879fb96711dee9eaf9d8634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Secured/hello.html.twig"));

        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_132c25c1a53445b4412ae6254f87fb2932fb9a743879fb96711dee9eaf9d8634->leave($__internal_132c25c1a53445b4412ae6254f87fb2932fb9a743879fb96711dee9eaf9d8634_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aaed3a2351a2666f32f6eaeb744adfa56046e07279159e5bc322a54e50cbd2fc = $this->env->getExtension("native_profiler");
        $__internal_aaed3a2351a2666f32f6eaeb744adfa56046e07279159e5bc322a54e50cbd2fc->enter($__internal_aaed3a2351a2666f32f6eaeb744adfa56046e07279159e5bc322a54e50cbd2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_aaed3a2351a2666f32f6eaeb744adfa56046e07279159e5bc322a54e50cbd2fc->leave($__internal_aaed3a2351a2666f32f6eaeb744adfa56046e07279159e5bc322a54e50cbd2fc_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_22258bced2afefa234b9178bc9a9250fc7577f149bebb617e9d002c73e2c267f = $this->env->getExtension("native_profiler");
        $__internal_22258bced2afefa234b9178bc9a9250fc7577f149bebb617e9d002c73e2c267f->enter($__internal_22258bced2afefa234b9178bc9a9250fc7577f149bebb617e9d002c73e2c267f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
        
        $__internal_22258bced2afefa234b9178bc9a9250fc7577f149bebb617e9d002c73e2c267f->leave($__internal_22258bced2afefa234b9178bc9a9250fc7577f149bebb617e9d002c73e2c267f_prof);

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

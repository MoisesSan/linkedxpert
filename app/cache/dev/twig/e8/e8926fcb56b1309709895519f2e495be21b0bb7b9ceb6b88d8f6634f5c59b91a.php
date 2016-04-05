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
        $__internal_2fe4f19c6d5a9ca1635c850617eb50a839a5f88bc3196631cdb71b100297049e = $this->env->getExtension("native_profiler");
        $__internal_2fe4f19c6d5a9ca1635c850617eb50a839a5f88bc3196631cdb71b100297049e->enter($__internal_2fe4f19c6d5a9ca1635c850617eb50a839a5f88bc3196631cdb71b100297049e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:hello.html.twig"));

        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fe4f19c6d5a9ca1635c850617eb50a839a5f88bc3196631cdb71b100297049e->leave($__internal_2fe4f19c6d5a9ca1635c850617eb50a839a5f88bc3196631cdb71b100297049e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75eb9cfb9b2b4fd00a1e329f46b9aa83ab4b4e2b602f779ca176cf81ab08f654 = $this->env->getExtension("native_profiler");
        $__internal_75eb9cfb9b2b4fd00a1e329f46b9aa83ab4b4e2b602f779ca176cf81ab08f654->enter($__internal_75eb9cfb9b2b4fd00a1e329f46b9aa83ab4b4e2b602f779ca176cf81ab08f654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_75eb9cfb9b2b4fd00a1e329f46b9aa83ab4b4e2b602f779ca176cf81ab08f654->leave($__internal_75eb9cfb9b2b4fd00a1e329f46b9aa83ab4b4e2b602f779ca176cf81ab08f654_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_6b52d972947e3014a28e3d9d318e39da30ef8034717857ae0f20d1479e3ceddb = $this->env->getExtension("native_profiler");
        $__internal_6b52d972947e3014a28e3d9d318e39da30ef8034717857ae0f20d1479e3ceddb->enter($__internal_6b52d972947e3014a28e3d9d318e39da30ef8034717857ae0f20d1479e3ceddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
        
        $__internal_6b52d972947e3014a28e3d9d318e39da30ef8034717857ae0f20d1479e3ceddb->leave($__internal_6b52d972947e3014a28e3d9d318e39da30ef8034717857ae0f20d1479e3ceddb_prof);

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

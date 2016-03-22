<?php

/* @AcmeDemo/Demo/index.html.twig */
class __TwigTemplate_11926396eec3545430af20e67e2c92fa5581527f67d2547458cacc5d74366784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "@AcmeDemo/Demo/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c80fbfccdbd65bc726082b5f62abd5453db5f4cb7e2d5302d31ccbc8a330769f = $this->env->getExtension("native_profiler");
        $__internal_c80fbfccdbd65bc726082b5f62abd5453db5f4cb7e2d5302d31ccbc8a330769f->enter($__internal_c80fbfccdbd65bc726082b5f62abd5453db5f4cb7e2d5302d31ccbc8a330769f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Demo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c80fbfccdbd65bc726082b5f62abd5453db5f4cb7e2d5302d31ccbc8a330769f->leave($__internal_c80fbfccdbd65bc726082b5f62abd5453db5f4cb7e2d5302d31ccbc8a330769f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9414c4bac31af1f56a35dbcad6792651f93796f335d0d3aedebedf7b2fd4c5f3 = $this->env->getExtension("native_profiler");
        $__internal_9414c4bac31af1f56a35dbcad6792651f93796f335d0d3aedebedf7b2fd4c5f3->enter($__internal_9414c4bac31af1f56a35dbcad6792651f93796f335d0d3aedebedf7b2fd4c5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_9414c4bac31af1f56a35dbcad6792651f93796f335d0d3aedebedf7b2fd4c5f3->leave($__internal_9414c4bac31af1f56a35dbcad6792651f93796f335d0d3aedebedf7b2fd4c5f3_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_3bdcb4cb0b7a77fee02454a6b88d5ca6be83a13dcd9375d044e3ce0be07365ba = $this->env->getExtension("native_profiler");
        $__internal_3bdcb4cb0b7a77fee02454a6b88d5ca6be83a13dcd9375d044e3ce0be07365ba->enter($__internal_3bdcb4cb0b7a77fee02454a6b88d5ca6be83a13dcd9375d044e3ce0be07365ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_3bdcb4cb0b7a77fee02454a6b88d5ca6be83a13dcd9375d044e3ce0be07365ba->leave($__internal_3bdcb4cb0b7a77fee02454a6b88d5ca6be83a13dcd9375d044e3ce0be07365ba_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_80e6b32ec07be9f04ee35657b942ecd3dfcf0a1b5f809d2a2da892ba3f786faa = $this->env->getExtension("native_profiler");
        $__internal_80e6b32ec07be9f04ee35657b942ecd3dfcf0a1b5f809d2a2da892ba3f786faa->enter($__internal_80e6b32ec07be9f04ee35657b942ecd3dfcf0a1b5f809d2a2da892ba3f786faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
        
        $__internal_80e6b32ec07be9f04ee35657b942ecd3dfcf0a1b5f809d2a2da892ba3f786faa->leave($__internal_80e6b32ec07be9f04ee35657b942ecd3dfcf0a1b5f809d2a2da892ba3f786faa_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Demo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  74 => 11,  70 => 10,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoBundle::layout.html.twig" %}*/
/* */
/* {% block title "Symfony - Demos" %}*/
/* */
/* {% block content_header '' %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">Available demos</h1>*/
/*     <ul id="demo-list">*/
/*         <li><a href="{{ path('_demo_hello', {'name': 'World'}) }}">Hello World</a></li>*/
/*         <li><a href="{{ path('_demo_secured_hello', {'name': 'World'}) }}">Access the secured area</a> <a href="{{ path('_demo_login') }}">Go to the login page</a></li>*/
/*         {# <li><a href="{{ path('_demo_contact') }}">Send a Message</a></li> #}*/
/*     </ul>*/
/* {% endblock %}*/
/* */

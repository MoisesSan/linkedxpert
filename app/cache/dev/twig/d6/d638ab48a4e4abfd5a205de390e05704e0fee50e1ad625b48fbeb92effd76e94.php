<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_16d69a56a55fdcc382d40c5bc0f9f2c0eda74aab88894ce6db82c9ffb40908f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Demo:index.html.twig", 1);
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
        $__internal_88c7f34d7f242a40d09d608f9348d103bb8127a858ce384059fbcc6b0f798dba = $this->env->getExtension("native_profiler");
        $__internal_88c7f34d7f242a40d09d608f9348d103bb8127a858ce384059fbcc6b0f798dba->enter($__internal_88c7f34d7f242a40d09d608f9348d103bb8127a858ce384059fbcc6b0f798dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88c7f34d7f242a40d09d608f9348d103bb8127a858ce384059fbcc6b0f798dba->leave($__internal_88c7f34d7f242a40d09d608f9348d103bb8127a858ce384059fbcc6b0f798dba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96671ea04d8ec875c817e4054924a3d16246dcb8ab05f715c35856aa7d772988 = $this->env->getExtension("native_profiler");
        $__internal_96671ea04d8ec875c817e4054924a3d16246dcb8ab05f715c35856aa7d772988->enter($__internal_96671ea04d8ec875c817e4054924a3d16246dcb8ab05f715c35856aa7d772988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_96671ea04d8ec875c817e4054924a3d16246dcb8ab05f715c35856aa7d772988->leave($__internal_96671ea04d8ec875c817e4054924a3d16246dcb8ab05f715c35856aa7d772988_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_355811d794c6d3fd3bf23f6b9453a196b7508bac2b47ff8d6c2c10be9197907c = $this->env->getExtension("native_profiler");
        $__internal_355811d794c6d3fd3bf23f6b9453a196b7508bac2b47ff8d6c2c10be9197907c->enter($__internal_355811d794c6d3fd3bf23f6b9453a196b7508bac2b47ff8d6c2c10be9197907c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_355811d794c6d3fd3bf23f6b9453a196b7508bac2b47ff8d6c2c10be9197907c->leave($__internal_355811d794c6d3fd3bf23f6b9453a196b7508bac2b47ff8d6c2c10be9197907c_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_7184283617a3887e01ccc2d26b99d3b66678e8cc964da012203e229156d76713 = $this->env->getExtension("native_profiler");
        $__internal_7184283617a3887e01ccc2d26b99d3b66678e8cc964da012203e229156d76713->enter($__internal_7184283617a3887e01ccc2d26b99d3b66678e8cc964da012203e229156d76713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_7184283617a3887e01ccc2d26b99d3b66678e8cc964da012203e229156d76713->leave($__internal_7184283617a3887e01ccc2d26b99d3b66678e8cc964da012203e229156d76713_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
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

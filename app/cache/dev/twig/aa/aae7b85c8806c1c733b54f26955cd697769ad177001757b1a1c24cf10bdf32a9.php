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
        $__internal_3fec2dc6f13c662109911ab8a870bbcd7b54d15496984b858dee9c946dedb7b7 = $this->env->getExtension("native_profiler");
        $__internal_3fec2dc6f13c662109911ab8a870bbcd7b54d15496984b858dee9c946dedb7b7->enter($__internal_3fec2dc6f13c662109911ab8a870bbcd7b54d15496984b858dee9c946dedb7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Demo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fec2dc6f13c662109911ab8a870bbcd7b54d15496984b858dee9c946dedb7b7->leave($__internal_3fec2dc6f13c662109911ab8a870bbcd7b54d15496984b858dee9c946dedb7b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc3dd16ccdb7d6fd7983ee555be1f1e9d9d1e8ac172035423da352ffa049fb92 = $this->env->getExtension("native_profiler");
        $__internal_fc3dd16ccdb7d6fd7983ee555be1f1e9d9d1e8ac172035423da352ffa049fb92->enter($__internal_fc3dd16ccdb7d6fd7983ee555be1f1e9d9d1e8ac172035423da352ffa049fb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_fc3dd16ccdb7d6fd7983ee555be1f1e9d9d1e8ac172035423da352ffa049fb92->leave($__internal_fc3dd16ccdb7d6fd7983ee555be1f1e9d9d1e8ac172035423da352ffa049fb92_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_5e3861282293b28d19f01d253dac9437f204b6986e645a13fb5e96950343888c = $this->env->getExtension("native_profiler");
        $__internal_5e3861282293b28d19f01d253dac9437f204b6986e645a13fb5e96950343888c->enter($__internal_5e3861282293b28d19f01d253dac9437f204b6986e645a13fb5e96950343888c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_5e3861282293b28d19f01d253dac9437f204b6986e645a13fb5e96950343888c->leave($__internal_5e3861282293b28d19f01d253dac9437f204b6986e645a13fb5e96950343888c_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_968f84cffb3e73e26d853d40bd69fb525c44a84505bbc6a3e943fb00ca4b2a0c = $this->env->getExtension("native_profiler");
        $__internal_968f84cffb3e73e26d853d40bd69fb525c44a84505bbc6a3e943fb00ca4b2a0c->enter($__internal_968f84cffb3e73e26d853d40bd69fb525c44a84505bbc6a3e943fb00ca4b2a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_968f84cffb3e73e26d853d40bd69fb525c44a84505bbc6a3e943fb00ca4b2a0c->leave($__internal_968f84cffb3e73e26d853d40bd69fb525c44a84505bbc6a3e943fb00ca4b2a0c_prof);

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

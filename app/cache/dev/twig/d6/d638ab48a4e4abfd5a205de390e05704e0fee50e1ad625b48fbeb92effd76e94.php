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
        $__internal_28316ecc672b9b5a5195f58426201c86262cf22c3b9abfa03064c4354e336452 = $this->env->getExtension("native_profiler");
        $__internal_28316ecc672b9b5a5195f58426201c86262cf22c3b9abfa03064c4354e336452->enter($__internal_28316ecc672b9b5a5195f58426201c86262cf22c3b9abfa03064c4354e336452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28316ecc672b9b5a5195f58426201c86262cf22c3b9abfa03064c4354e336452->leave($__internal_28316ecc672b9b5a5195f58426201c86262cf22c3b9abfa03064c4354e336452_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2379772126f36631b65dd5838c640cb5146a6747a7837d5ec5fe5ff49df72d88 = $this->env->getExtension("native_profiler");
        $__internal_2379772126f36631b65dd5838c640cb5146a6747a7837d5ec5fe5ff49df72d88->enter($__internal_2379772126f36631b65dd5838c640cb5146a6747a7837d5ec5fe5ff49df72d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_2379772126f36631b65dd5838c640cb5146a6747a7837d5ec5fe5ff49df72d88->leave($__internal_2379772126f36631b65dd5838c640cb5146a6747a7837d5ec5fe5ff49df72d88_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_eae92d3dd6098f66bcff3b5c0c9a310a54eaffd67a672aa61b2bf46c769aa457 = $this->env->getExtension("native_profiler");
        $__internal_eae92d3dd6098f66bcff3b5c0c9a310a54eaffd67a672aa61b2bf46c769aa457->enter($__internal_eae92d3dd6098f66bcff3b5c0c9a310a54eaffd67a672aa61b2bf46c769aa457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_eae92d3dd6098f66bcff3b5c0c9a310a54eaffd67a672aa61b2bf46c769aa457->leave($__internal_eae92d3dd6098f66bcff3b5c0c9a310a54eaffd67a672aa61b2bf46c769aa457_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_b7a58045fb54e0de8f674acea3b63d95a8c6168eb5df506ea4d3ea9f715305d4 = $this->env->getExtension("native_profiler");
        $__internal_b7a58045fb54e0de8f674acea3b63d95a8c6168eb5df506ea4d3ea9f715305d4->enter($__internal_b7a58045fb54e0de8f674acea3b63d95a8c6168eb5df506ea4d3ea9f715305d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b7a58045fb54e0de8f674acea3b63d95a8c6168eb5df506ea4d3ea9f715305d4->leave($__internal_b7a58045fb54e0de8f674acea3b63d95a8c6168eb5df506ea4d3ea9f715305d4_prof);

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

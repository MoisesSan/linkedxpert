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
        $__internal_29a32213ff16a15e8443055a96e34c3da65ec16b4cdea7932f01dfc658216032 = $this->env->getExtension("native_profiler");
        $__internal_29a32213ff16a15e8443055a96e34c3da65ec16b4cdea7932f01dfc658216032->enter($__internal_29a32213ff16a15e8443055a96e34c3da65ec16b4cdea7932f01dfc658216032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29a32213ff16a15e8443055a96e34c3da65ec16b4cdea7932f01dfc658216032->leave($__internal_29a32213ff16a15e8443055a96e34c3da65ec16b4cdea7932f01dfc658216032_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6546720ee8b1642b8448b2018c14249659606efdeece36febb6171074865b95 = $this->env->getExtension("native_profiler");
        $__internal_c6546720ee8b1642b8448b2018c14249659606efdeece36febb6171074865b95->enter($__internal_c6546720ee8b1642b8448b2018c14249659606efdeece36febb6171074865b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_c6546720ee8b1642b8448b2018c14249659606efdeece36febb6171074865b95->leave($__internal_c6546720ee8b1642b8448b2018c14249659606efdeece36febb6171074865b95_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_9c3db974a7839a4b4d7d7e340b9fd1509d6151b198364cd7fd2136798d055818 = $this->env->getExtension("native_profiler");
        $__internal_9c3db974a7839a4b4d7d7e340b9fd1509d6151b198364cd7fd2136798d055818->enter($__internal_9c3db974a7839a4b4d7d7e340b9fd1509d6151b198364cd7fd2136798d055818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_9c3db974a7839a4b4d7d7e340b9fd1509d6151b198364cd7fd2136798d055818->leave($__internal_9c3db974a7839a4b4d7d7e340b9fd1509d6151b198364cd7fd2136798d055818_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0afa59d930e53acf4d5a86215007e5c0d34255b62e63f6101226fb6d63d5651 = $this->env->getExtension("native_profiler");
        $__internal_d0afa59d930e53acf4d5a86215007e5c0d34255b62e63f6101226fb6d63d5651->enter($__internal_d0afa59d930e53acf4d5a86215007e5c0d34255b62e63f6101226fb6d63d5651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_d0afa59d930e53acf4d5a86215007e5c0d34255b62e63f6101226fb6d63d5651->leave($__internal_d0afa59d930e53acf4d5a86215007e5c0d34255b62e63f6101226fb6d63d5651_prof);

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

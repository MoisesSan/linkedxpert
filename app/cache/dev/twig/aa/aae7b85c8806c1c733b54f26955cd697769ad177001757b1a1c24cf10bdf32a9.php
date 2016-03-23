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
        $__internal_77f5835845ea7cefa3b4a842c41de14ad856cb379bd01b8ebdb00f4fbc59ecd3 = $this->env->getExtension("native_profiler");
        $__internal_77f5835845ea7cefa3b4a842c41de14ad856cb379bd01b8ebdb00f4fbc59ecd3->enter($__internal_77f5835845ea7cefa3b4a842c41de14ad856cb379bd01b8ebdb00f4fbc59ecd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Demo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77f5835845ea7cefa3b4a842c41de14ad856cb379bd01b8ebdb00f4fbc59ecd3->leave($__internal_77f5835845ea7cefa3b4a842c41de14ad856cb379bd01b8ebdb00f4fbc59ecd3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f49eda959b0bd44303347036cbb1a089f7f3386ed561fd6860c5505310333f09 = $this->env->getExtension("native_profiler");
        $__internal_f49eda959b0bd44303347036cbb1a089f7f3386ed561fd6860c5505310333f09->enter($__internal_f49eda959b0bd44303347036cbb1a089f7f3386ed561fd6860c5505310333f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_f49eda959b0bd44303347036cbb1a089f7f3386ed561fd6860c5505310333f09->leave($__internal_f49eda959b0bd44303347036cbb1a089f7f3386ed561fd6860c5505310333f09_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_c15dec62df0617beacb3d94974f56cf84b71520cbd867d6d5a542e569ff456ff = $this->env->getExtension("native_profiler");
        $__internal_c15dec62df0617beacb3d94974f56cf84b71520cbd867d6d5a542e569ff456ff->enter($__internal_c15dec62df0617beacb3d94974f56cf84b71520cbd867d6d5a542e569ff456ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_c15dec62df0617beacb3d94974f56cf84b71520cbd867d6d5a542e569ff456ff->leave($__internal_c15dec62df0617beacb3d94974f56cf84b71520cbd867d6d5a542e569ff456ff_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_c1ffaca2d5c4f920338253a214d1f3246ec996ea3f4df0a49c715b87b09e6ad1 = $this->env->getExtension("native_profiler");
        $__internal_c1ffaca2d5c4f920338253a214d1f3246ec996ea3f4df0a49c715b87b09e6ad1->enter($__internal_c1ffaca2d5c4f920338253a214d1f3246ec996ea3f4df0a49c715b87b09e6ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c1ffaca2d5c4f920338253a214d1f3246ec996ea3f4df0a49c715b87b09e6ad1->leave($__internal_c1ffaca2d5c4f920338253a214d1f3246ec996ea3f4df0a49c715b87b09e6ad1_prof);

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

<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_924e44226b146a2f5dcc9e62e992de245bed1b92478720cb3067c8c2144db92f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adf592243d7c1ca736dbac39278d26a9b9a56f9b39cd83f29dd022ba8c5f4c89 = $this->env->getExtension("native_profiler");
        $__internal_adf592243d7c1ca736dbac39278d26a9b9a56f9b39cd83f29dd022ba8c5f4c89->enter($__internal_adf592243d7c1ca736dbac39278d26a9b9a56f9b39cd83f29dd022ba8c5f4c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adf592243d7c1ca736dbac39278d26a9b9a56f9b39cd83f29dd022ba8c5f4c89->leave($__internal_adf592243d7c1ca736dbac39278d26a9b9a56f9b39cd83f29dd022ba8c5f4c89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d39245fd14cd58125ef0d1a189809dcea2704dda38d78bdc6d6719046d82d105 = $this->env->getExtension("native_profiler");
        $__internal_d39245fd14cd58125ef0d1a189809dcea2704dda38d78bdc6d6719046d82d105->enter($__internal_d39245fd14cd58125ef0d1a189809dcea2704dda38d78bdc6d6719046d82d105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d39245fd14cd58125ef0d1a189809dcea2704dda38d78bdc6d6719046d82d105->leave($__internal_d39245fd14cd58125ef0d1a189809dcea2704dda38d78bdc6d6719046d82d105_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_20966a94829d18cfc80dce960d5eb24615e25135eeeafa327594449813d8ba98 = $this->env->getExtension("native_profiler");
        $__internal_20966a94829d18cfc80dce960d5eb24615e25135eeeafa327594449813d8ba98->enter($__internal_20966a94829d18cfc80dce960d5eb24615e25135eeeafa327594449813d8ba98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_20966a94829d18cfc80dce960d5eb24615e25135eeeafa327594449813d8ba98->leave($__internal_20966a94829d18cfc80dce960d5eb24615e25135eeeafa327594449813d8ba98_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1582917c771a34d803512b1d8c9562de63e6ced29e1300cf4dd4a889cb270364 = $this->env->getExtension("native_profiler");
        $__internal_1582917c771a34d803512b1d8c9562de63e6ced29e1300cf4dd4a889cb270364->enter($__internal_1582917c771a34d803512b1d8c9562de63e6ced29e1300cf4dd4a889cb270364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_1582917c771a34d803512b1d8c9562de63e6ced29e1300cf4dd4a889cb270364->leave($__internal_1582917c771a34d803512b1d8c9562de63e6ced29e1300cf4dd4a889cb270364_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_36fb8f4a434f0049b9883ea9cdc20b3e3b9512c181d3cda417be63aa38e872bd = $this->env->getExtension("native_profiler");
        $__internal_36fb8f4a434f0049b9883ea9cdc20b3e3b9512c181d3cda417be63aa38e872bd->enter($__internal_36fb8f4a434f0049b9883ea9cdc20b3e3b9512c181d3cda417be63aa38e872bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_36fb8f4a434f0049b9883ea9cdc20b3e3b9512c181d3cda417be63aa38e872bd->leave($__internal_36fb8f4a434f0049b9883ea9cdc20b3e3b9512c181d3cda417be63aa38e872bd_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */

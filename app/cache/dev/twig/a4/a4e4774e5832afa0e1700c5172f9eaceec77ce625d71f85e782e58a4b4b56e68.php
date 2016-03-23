<?php

/* @AcmeDemo/Demo/hello.html.twig */
class __TwigTemplate_c952f5f2998ab4a697ca874cfe52579dbfb61e5981f75b2f63c10141acb32431 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "@AcmeDemo/Demo/hello.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50d10e0ee780b9333d21737285d683bbea8331a1cf3b85481a941c350ecedb60 = $this->env->getExtension("native_profiler");
        $__internal_50d10e0ee780b9333d21737285d683bbea8331a1cf3b85481a941c350ecedb60->enter($__internal_50d10e0ee780b9333d21737285d683bbea8331a1cf3b85481a941c350ecedb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Demo/hello.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50d10e0ee780b9333d21737285d683bbea8331a1cf3b85481a941c350ecedb60->leave($__internal_50d10e0ee780b9333d21737285d683bbea8331a1cf3b85481a941c350ecedb60_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4789f45a1aadf738fc56a3f625af461a6d720be04372ec684682beec0f5f307 = $this->env->getExtension("native_profiler");
        $__internal_e4789f45a1aadf738fc56a3f625af461a6d720be04372ec684682beec0f5f307->enter($__internal_e4789f45a1aadf738fc56a3f625af461a6d720be04372ec684682beec0f5f307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_e4789f45a1aadf738fc56a3f625af461a6d720be04372ec684682beec0f5f307->leave($__internal_e4789f45a1aadf738fc56a3f625af461a6d720be04372ec684682beec0f5f307_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_466a621d70510c85259f4a43586d2cdf5b146a9c89f845be75a9ba7ed881066a = $this->env->getExtension("native_profiler");
        $__internal_466a621d70510c85259f4a43586d2cdf5b146a9c89f845be75a9ba7ed881066a->enter($__internal_466a621d70510c85259f4a43586d2cdf5b146a9c89f845be75a9ba7ed881066a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
        
        $__internal_466a621d70510c85259f4a43586d2cdf5b146a9c89f845be75a9ba7ed881066a->leave($__internal_466a621d70510c85259f4a43586d2cdf5b146a9c89f845be75a9ba7ed881066a_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Demo/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  50 => 5,  38 => 3,  31 => 1,  29 => 9,  11 => 1,);
    }
}
/* {% extends "AcmeDemoBundle::layout.html.twig" %}*/
/* */
/* {% block title "Hello " ~ name %}*/
/* */
/* {% block content %}*/
/*     <h1>Hello {{ name }}!</h1>*/
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */

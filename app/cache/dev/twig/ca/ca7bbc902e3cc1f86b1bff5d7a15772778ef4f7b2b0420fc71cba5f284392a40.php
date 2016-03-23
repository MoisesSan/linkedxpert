<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_2925980ca37bbf86f847aa554b9c41ef12aa60b4215d16c08f1c9834a183d559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Demo:hello.html.twig", 1);
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
        $__internal_812694606ebe31d6aabbeeaafe1c60783eddd5db168e07660be63d76fd099f2b = $this->env->getExtension("native_profiler");
        $__internal_812694606ebe31d6aabbeeaafe1c60783eddd5db168e07660be63d76fd099f2b->enter($__internal_812694606ebe31d6aabbeeaafe1c60783eddd5db168e07660be63d76fd099f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:hello.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_812694606ebe31d6aabbeeaafe1c60783eddd5db168e07660be63d76fd099f2b->leave($__internal_812694606ebe31d6aabbeeaafe1c60783eddd5db168e07660be63d76fd099f2b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b0420649a283f651a63517cbd636dfa4859b92fd3107ff956386bcf3a2a4062 = $this->env->getExtension("native_profiler");
        $__internal_7b0420649a283f651a63517cbd636dfa4859b92fd3107ff956386bcf3a2a4062->enter($__internal_7b0420649a283f651a63517cbd636dfa4859b92fd3107ff956386bcf3a2a4062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_7b0420649a283f651a63517cbd636dfa4859b92fd3107ff956386bcf3a2a4062->leave($__internal_7b0420649a283f651a63517cbd636dfa4859b92fd3107ff956386bcf3a2a4062_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c901cc31158c09c9c8a0aeaf5719fabe3e11660e46cdb62d8935fda3459605f7 = $this->env->getExtension("native_profiler");
        $__internal_c901cc31158c09c9c8a0aeaf5719fabe3e11660e46cdb62d8935fda3459605f7->enter($__internal_c901cc31158c09c9c8a0aeaf5719fabe3e11660e46cdb62d8935fda3459605f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
        
        $__internal_c901cc31158c09c9c8a0aeaf5719fabe3e11660e46cdb62d8935fda3459605f7->leave($__internal_c901cc31158c09c9c8a0aeaf5719fabe3e11660e46cdb62d8935fda3459605f7_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
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

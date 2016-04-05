<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_fb977589c03bc977f04b4960cead56b91d75dd6d681d9517b92588fa10ee6151 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig", "AcmeDemoBundle:Secured:helloadmin.html.twig", 1);
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
        $__internal_2c2612ed5210c3404551b68cef61f8b043d5103ed46ba4602063995aae553932 = $this->env->getExtension("native_profiler");
        $__internal_2c2612ed5210c3404551b68cef61f8b043d5103ed46ba4602063995aae553932->enter($__internal_2c2612ed5210c3404551b68cef61f8b043d5103ed46ba4602063995aae553932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:helloadmin.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c2612ed5210c3404551b68cef61f8b043d5103ed46ba4602063995aae553932->leave($__internal_2c2612ed5210c3404551b68cef61f8b043d5103ed46ba4602063995aae553932_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c14eb05d8161d022d242124175788b7eb13ab0293e548fbefce17fe3e1d4d22 = $this->env->getExtension("native_profiler");
        $__internal_3c14eb05d8161d022d242124175788b7eb13ab0293e548fbefce17fe3e1d4d22->enter($__internal_3c14eb05d8161d022d242124175788b7eb13ab0293e548fbefce17fe3e1d4d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_3c14eb05d8161d022d242124175788b7eb13ab0293e548fbefce17fe3e1d4d22->leave($__internal_3c14eb05d8161d022d242124175788b7eb13ab0293e548fbefce17fe3e1d4d22_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_9bf0ad0d7549d3276dff4253c024bf99f06031740c0d8c2d19879f0bf4699d5b = $this->env->getExtension("native_profiler");
        $__internal_9bf0ad0d7549d3276dff4253c024bf99f06031740c0d8c2d19879f0bf4699d5b->enter($__internal_9bf0ad0d7549d3276dff4253c024bf99f06031740c0d8c2d19879f0bf4699d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
        
        $__internal_9bf0ad0d7549d3276dff4253c024bf99f06031740c0d8c2d19879f0bf4699d5b->leave($__internal_9bf0ad0d7549d3276dff4253c024bf99f06031740c0d8c2d19879f0bf4699d5b_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
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
/* {% extends "AcmeDemoBundle:Secured:layout.html.twig" %}*/
/* */
/* {% block title "Hello " ~ name %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">Hello {{ name }} secured for Admins only!</h1>*/
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */

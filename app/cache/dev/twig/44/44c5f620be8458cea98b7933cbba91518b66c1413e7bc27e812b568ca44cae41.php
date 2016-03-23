<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_523c0aa8ead66c340cdbf1c7fb876ac442605ce20f21d47e5ea58f93b151bef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f8bb44888577717f922192e283cc96c26ee8f0ec48c8334f5f46cefcc5b324d = $this->env->getExtension("native_profiler");
        $__internal_5f8bb44888577717f922192e283cc96c26ee8f0ec48c8334f5f46cefcc5b324d->enter($__internal_5f8bb44888577717f922192e283cc96c26ee8f0ec48c8334f5f46cefcc5b324d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f8bb44888577717f922192e283cc96c26ee8f0ec48c8334f5f46cefcc5b324d->leave($__internal_5f8bb44888577717f922192e283cc96c26ee8f0ec48c8334f5f46cefcc5b324d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_57d3c49981e2358839cf815d8f6fda062841373920e9d729bd02414b190b201c = $this->env->getExtension("native_profiler");
        $__internal_57d3c49981e2358839cf815d8f6fda062841373920e9d729bd02414b190b201c->enter($__internal_57d3c49981e2358839cf815d8f6fda062841373920e9d729bd02414b190b201c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_57d3c49981e2358839cf815d8f6fda062841373920e9d729bd02414b190b201c->leave($__internal_57d3c49981e2358839cf815d8f6fda062841373920e9d729bd02414b190b201c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d62c8bf9612acfade38120a0e4576874dfe26afea095c366adb11502c79c77c = $this->env->getExtension("native_profiler");
        $__internal_9d62c8bf9612acfade38120a0e4576874dfe26afea095c366adb11502c79c77c->enter($__internal_9d62c8bf9612acfade38120a0e4576874dfe26afea095c366adb11502c79c77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9d62c8bf9612acfade38120a0e4576874dfe26afea095c366adb11502c79c77c->leave($__internal_9d62c8bf9612acfade38120a0e4576874dfe26afea095c366adb11502c79c77c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_709e0e32507bc9d4ddd529c0f19f46d42c89c4b808558a53770006ab43d9f346 = $this->env->getExtension("native_profiler");
        $__internal_709e0e32507bc9d4ddd529c0f19f46d42c89c4b808558a53770006ab43d9f346->enter($__internal_709e0e32507bc9d4ddd529c0f19f46d42c89c4b808558a53770006ab43d9f346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_709e0e32507bc9d4ddd529c0f19f46d42c89c4b808558a53770006ab43d9f346->leave($__internal_709e0e32507bc9d4ddd529c0f19f46d42c89c4b808558a53770006ab43d9f346_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

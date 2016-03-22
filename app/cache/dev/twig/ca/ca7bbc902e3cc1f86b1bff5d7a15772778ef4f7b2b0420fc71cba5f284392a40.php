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
        $__internal_d395903e7f62f39e792b21ba3269f945312733c13243f94f4aaad22aaa6e04fd = $this->env->getExtension("native_profiler");
        $__internal_d395903e7f62f39e792b21ba3269f945312733c13243f94f4aaad22aaa6e04fd->enter($__internal_d395903e7f62f39e792b21ba3269f945312733c13243f94f4aaad22aaa6e04fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:hello.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d395903e7f62f39e792b21ba3269f945312733c13243f94f4aaad22aaa6e04fd->leave($__internal_d395903e7f62f39e792b21ba3269f945312733c13243f94f4aaad22aaa6e04fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_afd8c013ee117b4a2303e943485213965981bb6e6df2bb593f406bdfd2caaa5a = $this->env->getExtension("native_profiler");
        $__internal_afd8c013ee117b4a2303e943485213965981bb6e6df2bb593f406bdfd2caaa5a->enter($__internal_afd8c013ee117b4a2303e943485213965981bb6e6df2bb593f406bdfd2caaa5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_afd8c013ee117b4a2303e943485213965981bb6e6df2bb593f406bdfd2caaa5a->leave($__internal_afd8c013ee117b4a2303e943485213965981bb6e6df2bb593f406bdfd2caaa5a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_f7da8c40fd218ce214e24c50c215eaf38d0d1000d0dc190bd403b6d7748d780f = $this->env->getExtension("native_profiler");
        $__internal_f7da8c40fd218ce214e24c50c215eaf38d0d1000d0dc190bd403b6d7748d780f->enter($__internal_f7da8c40fd218ce214e24c50c215eaf38d0d1000d0dc190bd403b6d7748d780f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
        
        $__internal_f7da8c40fd218ce214e24c50c215eaf38d0d1000d0dc190bd403b6d7748d780f->leave($__internal_f7da8c40fd218ce214e24c50c215eaf38d0d1000d0dc190bd403b6d7748d780f_prof);

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

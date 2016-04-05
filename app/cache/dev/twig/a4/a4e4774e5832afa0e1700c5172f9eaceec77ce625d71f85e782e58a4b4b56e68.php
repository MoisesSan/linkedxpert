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
        $__internal_14b2211d3fc3bfd45c9a10ea1871adb1b0d4cb737b7bcd3eb31de87ca4333c7a = $this->env->getExtension("native_profiler");
        $__internal_14b2211d3fc3bfd45c9a10ea1871adb1b0d4cb737b7bcd3eb31de87ca4333c7a->enter($__internal_14b2211d3fc3bfd45c9a10ea1871adb1b0d4cb737b7bcd3eb31de87ca4333c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Demo/hello.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14b2211d3fc3bfd45c9a10ea1871adb1b0d4cb737b7bcd3eb31de87ca4333c7a->leave($__internal_14b2211d3fc3bfd45c9a10ea1871adb1b0d4cb737b7bcd3eb31de87ca4333c7a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95b14cecb569ecd836fcd6d75d6351ac408c9c3f075f097aa279dcdb2df2aa86 = $this->env->getExtension("native_profiler");
        $__internal_95b14cecb569ecd836fcd6d75d6351ac408c9c3f075f097aa279dcdb2df2aa86->enter($__internal_95b14cecb569ecd836fcd6d75d6351ac408c9c3f075f097aa279dcdb2df2aa86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_95b14cecb569ecd836fcd6d75d6351ac408c9c3f075f097aa279dcdb2df2aa86->leave($__internal_95b14cecb569ecd836fcd6d75d6351ac408c9c3f075f097aa279dcdb2df2aa86_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b4c5fb49c2fb2bbaf56b7db2c03599f0a417d12f4c13798cfd20aa1f58e6c90 = $this->env->getExtension("native_profiler");
        $__internal_0b4c5fb49c2fb2bbaf56b7db2c03599f0a417d12f4c13798cfd20aa1f58e6c90->enter($__internal_0b4c5fb49c2fb2bbaf56b7db2c03599f0a417d12f4c13798cfd20aa1f58e6c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
        
        $__internal_0b4c5fb49c2fb2bbaf56b7db2c03599f0a417d12f4c13798cfd20aa1f58e6c90->leave($__internal_0b4c5fb49c2fb2bbaf56b7db2c03599f0a417d12f4c13798cfd20aa1f58e6c90_prof);

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

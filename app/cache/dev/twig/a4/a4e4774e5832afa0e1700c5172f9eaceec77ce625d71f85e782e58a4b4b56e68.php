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
        $__internal_2a622bf2d76405d22407574cab1cacb8c9b4c1efb82e32d8fe2fc4b7b62a62b1 = $this->env->getExtension("native_profiler");
        $__internal_2a622bf2d76405d22407574cab1cacb8c9b4c1efb82e32d8fe2fc4b7b62a62b1->enter($__internal_2a622bf2d76405d22407574cab1cacb8c9b4c1efb82e32d8fe2fc4b7b62a62b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Demo/hello.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a622bf2d76405d22407574cab1cacb8c9b4c1efb82e32d8fe2fc4b7b62a62b1->leave($__internal_2a622bf2d76405d22407574cab1cacb8c9b4c1efb82e32d8fe2fc4b7b62a62b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_efbc0a1c34bc9f57082142743551572143149afdf4d4a5635e2362d53543952b = $this->env->getExtension("native_profiler");
        $__internal_efbc0a1c34bc9f57082142743551572143149afdf4d4a5635e2362d53543952b->enter($__internal_efbc0a1c34bc9f57082142743551572143149afdf4d4a5635e2362d53543952b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_efbc0a1c34bc9f57082142743551572143149afdf4d4a5635e2362d53543952b->leave($__internal_efbc0a1c34bc9f57082142743551572143149afdf4d4a5635e2362d53543952b_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_b16615e64ad6e4d372dcda99394be02b88bfe384de8bf291c2d05e49355a30c2 = $this->env->getExtension("native_profiler");
        $__internal_b16615e64ad6e4d372dcda99394be02b88bfe384de8bf291c2d05e49355a30c2->enter($__internal_b16615e64ad6e4d372dcda99394be02b88bfe384de8bf291c2d05e49355a30c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
        
        $__internal_b16615e64ad6e4d372dcda99394be02b88bfe384de8bf291c2d05e49355a30c2->leave($__internal_b16615e64ad6e4d372dcda99394be02b88bfe384de8bf291c2d05e49355a30c2_prof);

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

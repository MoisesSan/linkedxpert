<?php

/* @AcmeDemo/Secured/helloadmin.html.twig */
class __TwigTemplate_7dac8c45366ea5ad9b94fde3d2d5ca593e052d28981df6d4e6805b82c9cbd34b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig", "@AcmeDemo/Secured/helloadmin.html.twig", 1);
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
        $__internal_1d30961972562f3fe8f7bb7ebee5799fa7fbf7a59ca3d1cfa9f08af9e4a218ff = $this->env->getExtension("native_profiler");
        $__internal_1d30961972562f3fe8f7bb7ebee5799fa7fbf7a59ca3d1cfa9f08af9e4a218ff->enter($__internal_1d30961972562f3fe8f7bb7ebee5799fa7fbf7a59ca3d1cfa9f08af9e4a218ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Secured/helloadmin.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d30961972562f3fe8f7bb7ebee5799fa7fbf7a59ca3d1cfa9f08af9e4a218ff->leave($__internal_1d30961972562f3fe8f7bb7ebee5799fa7fbf7a59ca3d1cfa9f08af9e4a218ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e7fdc743dda22f48952654823c0a54ccef214ef28bc4b6438304283b5409510 = $this->env->getExtension("native_profiler");
        $__internal_3e7fdc743dda22f48952654823c0a54ccef214ef28bc4b6438304283b5409510->enter($__internal_3e7fdc743dda22f48952654823c0a54ccef214ef28bc4b6438304283b5409510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_3e7fdc743dda22f48952654823c0a54ccef214ef28bc4b6438304283b5409510->leave($__internal_3e7fdc743dda22f48952654823c0a54ccef214ef28bc4b6438304283b5409510_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c3006289f136f4a6e7f4ab45e3fff6fbe6b0520d40e7cc288e11ebc878524498 = $this->env->getExtension("native_profiler");
        $__internal_c3006289f136f4a6e7f4ab45e3fff6fbe6b0520d40e7cc288e11ebc878524498->enter($__internal_c3006289f136f4a6e7f4ab45e3fff6fbe6b0520d40e7cc288e11ebc878524498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
        
        $__internal_c3006289f136f4a6e7f4ab45e3fff6fbe6b0520d40e7cc288e11ebc878524498->leave($__internal_c3006289f136f4a6e7f4ab45e3fff6fbe6b0520d40e7cc288e11ebc878524498_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Secured/helloadmin.html.twig";
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

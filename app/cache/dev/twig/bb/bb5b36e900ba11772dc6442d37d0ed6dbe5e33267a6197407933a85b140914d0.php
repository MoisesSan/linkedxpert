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
        $__internal_7fdbc931b0cbe7140646035bc4ed9efa7652efbcce96967a39ef25d162d35c68 = $this->env->getExtension("native_profiler");
        $__internal_7fdbc931b0cbe7140646035bc4ed9efa7652efbcce96967a39ef25d162d35c68->enter($__internal_7fdbc931b0cbe7140646035bc4ed9efa7652efbcce96967a39ef25d162d35c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:helloadmin.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fdbc931b0cbe7140646035bc4ed9efa7652efbcce96967a39ef25d162d35c68->leave($__internal_7fdbc931b0cbe7140646035bc4ed9efa7652efbcce96967a39ef25d162d35c68_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd826dd075f8c919d1b680e8bc81dd7488d8e0bca2ac40a6e1214d1f62e7b900 = $this->env->getExtension("native_profiler");
        $__internal_cd826dd075f8c919d1b680e8bc81dd7488d8e0bca2ac40a6e1214d1f62e7b900->enter($__internal_cd826dd075f8c919d1b680e8bc81dd7488d8e0bca2ac40a6e1214d1f62e7b900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_cd826dd075f8c919d1b680e8bc81dd7488d8e0bca2ac40a6e1214d1f62e7b900->leave($__internal_cd826dd075f8c919d1b680e8bc81dd7488d8e0bca2ac40a6e1214d1f62e7b900_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_31457c378a453c2f5ced2d78aa4afd2f86fd2ddba6e06a52670c6c56d5e0799f = $this->env->getExtension("native_profiler");
        $__internal_31457c378a453c2f5ced2d78aa4afd2f86fd2ddba6e06a52670c6c56d5e0799f->enter($__internal_31457c378a453c2f5ced2d78aa4afd2f86fd2ddba6e06a52670c6c56d5e0799f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
        
        $__internal_31457c378a453c2f5ced2d78aa4afd2f86fd2ddba6e06a52670c6c56d5e0799f->leave($__internal_31457c378a453c2f5ced2d78aa4afd2f86fd2ddba6e06a52670c6c56d5e0799f_prof);

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

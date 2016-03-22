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
        $__internal_c4ec6abcd9488ca04c93dd216797797e3422c1ed920865945d847dd85a4a36ec = $this->env->getExtension("native_profiler");
        $__internal_c4ec6abcd9488ca04c93dd216797797e3422c1ed920865945d847dd85a4a36ec->enter($__internal_c4ec6abcd9488ca04c93dd216797797e3422c1ed920865945d847dd85a4a36ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Secured/helloadmin.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4ec6abcd9488ca04c93dd216797797e3422c1ed920865945d847dd85a4a36ec->leave($__internal_c4ec6abcd9488ca04c93dd216797797e3422c1ed920865945d847dd85a4a36ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c3e5a7ea51cea4d1a5cd38d5612e5b66e4d1d8280d2d0db2c4fea3585b86afc = $this->env->getExtension("native_profiler");
        $__internal_1c3e5a7ea51cea4d1a5cd38d5612e5b66e4d1d8280d2d0db2c4fea3585b86afc->enter($__internal_1c3e5a7ea51cea4d1a5cd38d5612e5b66e4d1d8280d2d0db2c4fea3585b86afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_1c3e5a7ea51cea4d1a5cd38d5612e5b66e4d1d8280d2d0db2c4fea3585b86afc->leave($__internal_1c3e5a7ea51cea4d1a5cd38d5612e5b66e4d1d8280d2d0db2c4fea3585b86afc_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2b578b9693ffe3ed7fc7d93de2807a7142c2063b4b2277cce8f2c90033ff7e69 = $this->env->getExtension("native_profiler");
        $__internal_2b578b9693ffe3ed7fc7d93de2807a7142c2063b4b2277cce8f2c90033ff7e69->enter($__internal_2b578b9693ffe3ed7fc7d93de2807a7142c2063b4b2277cce8f2c90033ff7e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
        
        $__internal_2b578b9693ffe3ed7fc7d93de2807a7142c2063b4b2277cce8f2c90033ff7e69->leave($__internal_2b578b9693ffe3ed7fc7d93de2807a7142c2063b4b2277cce8f2c90033ff7e69_prof);

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

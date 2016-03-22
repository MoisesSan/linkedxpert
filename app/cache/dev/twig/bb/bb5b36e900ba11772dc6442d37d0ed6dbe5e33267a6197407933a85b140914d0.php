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
        $__internal_cd928ece0a1344469fe5c24175741b1cbed9882ae10b537b4e2180f67e5ed5b3 = $this->env->getExtension("native_profiler");
        $__internal_cd928ece0a1344469fe5c24175741b1cbed9882ae10b537b4e2180f67e5ed5b3->enter($__internal_cd928ece0a1344469fe5c24175741b1cbed9882ae10b537b4e2180f67e5ed5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:helloadmin.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd928ece0a1344469fe5c24175741b1cbed9882ae10b537b4e2180f67e5ed5b3->leave($__internal_cd928ece0a1344469fe5c24175741b1cbed9882ae10b537b4e2180f67e5ed5b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a4984414e1b221a06764a41b534a2b0d51a5f64a20aaef39d21579419612ea2 = $this->env->getExtension("native_profiler");
        $__internal_0a4984414e1b221a06764a41b534a2b0d51a5f64a20aaef39d21579419612ea2->enter($__internal_0a4984414e1b221a06764a41b534a2b0d51a5f64a20aaef39d21579419612ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_0a4984414e1b221a06764a41b534a2b0d51a5f64a20aaef39d21579419612ea2->leave($__internal_0a4984414e1b221a06764a41b534a2b0d51a5f64a20aaef39d21579419612ea2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4ac06ec28faeefaa8efb31159c3b43364d3e26310e923bd37f822120459107b = $this->env->getExtension("native_profiler");
        $__internal_e4ac06ec28faeefaa8efb31159c3b43364d3e26310e923bd37f822120459107b->enter($__internal_e4ac06ec28faeefaa8efb31159c3b43364d3e26310e923bd37f822120459107b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
        
        $__internal_e4ac06ec28faeefaa8efb31159c3b43364d3e26310e923bd37f822120459107b->leave($__internal_e4ac06ec28faeefaa8efb31159c3b43364d3e26310e923bd37f822120459107b_prof);

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

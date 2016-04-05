<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_924e44226b146a2f5dcc9e62e992de245bed1b92478720cb3067c8c2144db92f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d208f425454e1f3851d067c98a9c5949623bae60cd60de72be3e77dc1ab8a02a = $this->env->getExtension("native_profiler");
        $__internal_d208f425454e1f3851d067c98a9c5949623bae60cd60de72be3e77dc1ab8a02a->enter($__internal_d208f425454e1f3851d067c98a9c5949623bae60cd60de72be3e77dc1ab8a02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d208f425454e1f3851d067c98a9c5949623bae60cd60de72be3e77dc1ab8a02a->leave($__internal_d208f425454e1f3851d067c98a9c5949623bae60cd60de72be3e77dc1ab8a02a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_744f8a98ddb67a8117adaca47bfa164362a975f3b9951382e98501ebee399b0e = $this->env->getExtension("native_profiler");
        $__internal_744f8a98ddb67a8117adaca47bfa164362a975f3b9951382e98501ebee399b0e->enter($__internal_744f8a98ddb67a8117adaca47bfa164362a975f3b9951382e98501ebee399b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_744f8a98ddb67a8117adaca47bfa164362a975f3b9951382e98501ebee399b0e->leave($__internal_744f8a98ddb67a8117adaca47bfa164362a975f3b9951382e98501ebee399b0e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aad7b8d3ab17bf57dc15a1aefb4fefa6aa189eb07f5f97992f17fd11f723276e = $this->env->getExtension("native_profiler");
        $__internal_aad7b8d3ab17bf57dc15a1aefb4fefa6aa189eb07f5f97992f17fd11f723276e->enter($__internal_aad7b8d3ab17bf57dc15a1aefb4fefa6aa189eb07f5f97992f17fd11f723276e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_aad7b8d3ab17bf57dc15a1aefb4fefa6aa189eb07f5f97992f17fd11f723276e->leave($__internal_aad7b8d3ab17bf57dc15a1aefb4fefa6aa189eb07f5f97992f17fd11f723276e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_517f8156647ef112f37ae3ba9e70311950d011b74e6879e59844b51fb5102620 = $this->env->getExtension("native_profiler");
        $__internal_517f8156647ef112f37ae3ba9e70311950d011b74e6879e59844b51fb5102620->enter($__internal_517f8156647ef112f37ae3ba9e70311950d011b74e6879e59844b51fb5102620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_517f8156647ef112f37ae3ba9e70311950d011b74e6879e59844b51fb5102620->leave($__internal_517f8156647ef112f37ae3ba9e70311950d011b74e6879e59844b51fb5102620_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed277c05df275c4e08eea33c1b318d8db65e44c5bccc30b29e9af3d33dec2008 = $this->env->getExtension("native_profiler");
        $__internal_ed277c05df275c4e08eea33c1b318d8db65e44c5bccc30b29e9af3d33dec2008->enter($__internal_ed277c05df275c4e08eea33c1b318d8db65e44c5bccc30b29e9af3d33dec2008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ed277c05df275c4e08eea33c1b318d8db65e44c5bccc30b29e9af3d33dec2008->leave($__internal_ed277c05df275c4e08eea33c1b318d8db65e44c5bccc30b29e9af3d33dec2008_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */

<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_636edbd77bf39de1e3c4457e04b98abe74d94308115702a4be45c2fc9a1223c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
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
        $__internal_7d06d067f89a7a81dadf4110db93d09921a94a0b107ad40c7183f5077c15c9db = $this->env->getExtension("native_profiler");
        $__internal_7d06d067f89a7a81dadf4110db93d09921a94a0b107ad40c7183f5077c15c9db->enter($__internal_7d06d067f89a7a81dadf4110db93d09921a94a0b107ad40c7183f5077c15c9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d06d067f89a7a81dadf4110db93d09921a94a0b107ad40c7183f5077c15c9db->leave($__internal_7d06d067f89a7a81dadf4110db93d09921a94a0b107ad40c7183f5077c15c9db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f0f27b9a3656e8fa82a5e06297f5c4f8d0a2018abc81368b8686a8d320028e08 = $this->env->getExtension("native_profiler");
        $__internal_f0f27b9a3656e8fa82a5e06297f5c4f8d0a2018abc81368b8686a8d320028e08->enter($__internal_f0f27b9a3656e8fa82a5e06297f5c4f8d0a2018abc81368b8686a8d320028e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f0f27b9a3656e8fa82a5e06297f5c4f8d0a2018abc81368b8686a8d320028e08->leave($__internal_f0f27b9a3656e8fa82a5e06297f5c4f8d0a2018abc81368b8686a8d320028e08_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8db0eaf4cb24db16eb0a8f47b34c4ef9117911d60cb11bbf87274ae5def8c6a8 = $this->env->getExtension("native_profiler");
        $__internal_8db0eaf4cb24db16eb0a8f47b34c4ef9117911d60cb11bbf87274ae5def8c6a8->enter($__internal_8db0eaf4cb24db16eb0a8f47b34c4ef9117911d60cb11bbf87274ae5def8c6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_8db0eaf4cb24db16eb0a8f47b34c4ef9117911d60cb11bbf87274ae5def8c6a8->leave($__internal_8db0eaf4cb24db16eb0a8f47b34c4ef9117911d60cb11bbf87274ae5def8c6a8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_01178121b5f128557ea983521af0e109b63a3e059989d2d024acf18b24639bff = $this->env->getExtension("native_profiler");
        $__internal_01178121b5f128557ea983521af0e109b63a3e059989d2d024acf18b24639bff->enter($__internal_01178121b5f128557ea983521af0e109b63a3e059989d2d024acf18b24639bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_01178121b5f128557ea983521af0e109b63a3e059989d2d024acf18b24639bff->leave($__internal_01178121b5f128557ea983521af0e109b63a3e059989d2d024acf18b24639bff_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_7d44a3e2a39480262314a6fc429dc4a1bb5f096dcfe7471ee1f44c1a5b2df9ba = $this->env->getExtension("native_profiler");
        $__internal_7d44a3e2a39480262314a6fc429dc4a1bb5f096dcfe7471ee1f44c1a5b2df9ba->enter($__internal_7d44a3e2a39480262314a6fc429dc4a1bb5f096dcfe7471ee1f44c1a5b2df9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7d44a3e2a39480262314a6fc429dc4a1bb5f096dcfe7471ee1f44c1a5b2df9ba->leave($__internal_7d44a3e2a39480262314a6fc429dc4a1bb5f096dcfe7471ee1f44c1a5b2df9ba_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
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

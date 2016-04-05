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
        $__internal_0f9b04af0ee4912ab078b39106719d37d352be15274ed85ecfd34e14190d6ab8 = $this->env->getExtension("native_profiler");
        $__internal_0f9b04af0ee4912ab078b39106719d37d352be15274ed85ecfd34e14190d6ab8->enter($__internal_0f9b04af0ee4912ab078b39106719d37d352be15274ed85ecfd34e14190d6ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f9b04af0ee4912ab078b39106719d37d352be15274ed85ecfd34e14190d6ab8->leave($__internal_0f9b04af0ee4912ab078b39106719d37d352be15274ed85ecfd34e14190d6ab8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1a641434c75ee296582d20524cd954453eab7bdaeef56f5fbab8dfa7381c23c = $this->env->getExtension("native_profiler");
        $__internal_f1a641434c75ee296582d20524cd954453eab7bdaeef56f5fbab8dfa7381c23c->enter($__internal_f1a641434c75ee296582d20524cd954453eab7bdaeef56f5fbab8dfa7381c23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f1a641434c75ee296582d20524cd954453eab7bdaeef56f5fbab8dfa7381c23c->leave($__internal_f1a641434c75ee296582d20524cd954453eab7bdaeef56f5fbab8dfa7381c23c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7ac7b1c9d0f00cd6eaa6cf32f9919c371cd6da0dfff32c40a383c053b48b001 = $this->env->getExtension("native_profiler");
        $__internal_e7ac7b1c9d0f00cd6eaa6cf32f9919c371cd6da0dfff32c40a383c053b48b001->enter($__internal_e7ac7b1c9d0f00cd6eaa6cf32f9919c371cd6da0dfff32c40a383c053b48b001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_e7ac7b1c9d0f00cd6eaa6cf32f9919c371cd6da0dfff32c40a383c053b48b001->leave($__internal_e7ac7b1c9d0f00cd6eaa6cf32f9919c371cd6da0dfff32c40a383c053b48b001_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4ef217b3f12cf2406a6b1256f79500b959225776ee2daa603dd778878879bb1 = $this->env->getExtension("native_profiler");
        $__internal_d4ef217b3f12cf2406a6b1256f79500b959225776ee2daa603dd778878879bb1->enter($__internal_d4ef217b3f12cf2406a6b1256f79500b959225776ee2daa603dd778878879bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d4ef217b3f12cf2406a6b1256f79500b959225776ee2daa603dd778878879bb1->leave($__internal_d4ef217b3f12cf2406a6b1256f79500b959225776ee2daa603dd778878879bb1_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ca6ac53f174928691ae142699b69ee6d9fcf3435fec2d1f44ab6633f92900fb4 = $this->env->getExtension("native_profiler");
        $__internal_ca6ac53f174928691ae142699b69ee6d9fcf3435fec2d1f44ab6633f92900fb4->enter($__internal_ca6ac53f174928691ae142699b69ee6d9fcf3435fec2d1f44ab6633f92900fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ca6ac53f174928691ae142699b69ee6d9fcf3435fec2d1f44ab6633f92900fb4->leave($__internal_ca6ac53f174928691ae142699b69ee6d9fcf3435fec2d1f44ab6633f92900fb4_prof);

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

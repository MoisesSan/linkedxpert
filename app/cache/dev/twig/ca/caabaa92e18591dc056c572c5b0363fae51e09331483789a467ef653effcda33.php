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
        $__internal_1c377ade447758aadf0d7d1200f25d8a87d77668b96c396a7eeafc0253971571 = $this->env->getExtension("native_profiler");
        $__internal_1c377ade447758aadf0d7d1200f25d8a87d77668b96c396a7eeafc0253971571->enter($__internal_1c377ade447758aadf0d7d1200f25d8a87d77668b96c396a7eeafc0253971571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c377ade447758aadf0d7d1200f25d8a87d77668b96c396a7eeafc0253971571->leave($__internal_1c377ade447758aadf0d7d1200f25d8a87d77668b96c396a7eeafc0253971571_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1746efb28c0c02a1db6d7f0df200137b831b9da842c5bb648c40845e0c35171d = $this->env->getExtension("native_profiler");
        $__internal_1746efb28c0c02a1db6d7f0df200137b831b9da842c5bb648c40845e0c35171d->enter($__internal_1746efb28c0c02a1db6d7f0df200137b831b9da842c5bb648c40845e0c35171d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_1746efb28c0c02a1db6d7f0df200137b831b9da842c5bb648c40845e0c35171d->leave($__internal_1746efb28c0c02a1db6d7f0df200137b831b9da842c5bb648c40845e0c35171d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f3eebc30595134ef7ebd2cedf9c38da68e1cdc1f961d2e0acf6c0bd569dae36 = $this->env->getExtension("native_profiler");
        $__internal_6f3eebc30595134ef7ebd2cedf9c38da68e1cdc1f961d2e0acf6c0bd569dae36->enter($__internal_6f3eebc30595134ef7ebd2cedf9c38da68e1cdc1f961d2e0acf6c0bd569dae36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6f3eebc30595134ef7ebd2cedf9c38da68e1cdc1f961d2e0acf6c0bd569dae36->leave($__internal_6f3eebc30595134ef7ebd2cedf9c38da68e1cdc1f961d2e0acf6c0bd569dae36_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6671e13124c1d42b4fc414353da9772cbc00e42269346f533be54823d5aa9e43 = $this->env->getExtension("native_profiler");
        $__internal_6671e13124c1d42b4fc414353da9772cbc00e42269346f533be54823d5aa9e43->enter($__internal_6671e13124c1d42b4fc414353da9772cbc00e42269346f533be54823d5aa9e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6671e13124c1d42b4fc414353da9772cbc00e42269346f533be54823d5aa9e43->leave($__internal_6671e13124c1d42b4fc414353da9772cbc00e42269346f533be54823d5aa9e43_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_aa963a8eb8cca998bfecc7bddd42a45600f6d04987dca5239d735e916db2fbc2 = $this->env->getExtension("native_profiler");
        $__internal_aa963a8eb8cca998bfecc7bddd42a45600f6d04987dca5239d735e916db2fbc2->enter($__internal_aa963a8eb8cca998bfecc7bddd42a45600f6d04987dca5239d735e916db2fbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_aa963a8eb8cca998bfecc7bddd42a45600f6d04987dca5239d735e916db2fbc2->leave($__internal_aa963a8eb8cca998bfecc7bddd42a45600f6d04987dca5239d735e916db2fbc2_prof);

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

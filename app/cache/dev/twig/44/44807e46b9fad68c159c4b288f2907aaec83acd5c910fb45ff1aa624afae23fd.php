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
        $__internal_93c9493caadbbf6597aa56afd66b729e4f56a6d492ffe03d1c80c805ffed1779 = $this->env->getExtension("native_profiler");
        $__internal_93c9493caadbbf6597aa56afd66b729e4f56a6d492ffe03d1c80c805ffed1779->enter($__internal_93c9493caadbbf6597aa56afd66b729e4f56a6d492ffe03d1c80c805ffed1779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93c9493caadbbf6597aa56afd66b729e4f56a6d492ffe03d1c80c805ffed1779->leave($__internal_93c9493caadbbf6597aa56afd66b729e4f56a6d492ffe03d1c80c805ffed1779_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d180e2fe9419ae56f408b4370f00aab6860f9fb2c92770d9bc483bc776e963df = $this->env->getExtension("native_profiler");
        $__internal_d180e2fe9419ae56f408b4370f00aab6860f9fb2c92770d9bc483bc776e963df->enter($__internal_d180e2fe9419ae56f408b4370f00aab6860f9fb2c92770d9bc483bc776e963df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d180e2fe9419ae56f408b4370f00aab6860f9fb2c92770d9bc483bc776e963df->leave($__internal_d180e2fe9419ae56f408b4370f00aab6860f9fb2c92770d9bc483bc776e963df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e87ce2d2ad8a4f80601a97f131c46bbb9c0e7df8e9661195363403c0f86aaf97 = $this->env->getExtension("native_profiler");
        $__internal_e87ce2d2ad8a4f80601a97f131c46bbb9c0e7df8e9661195363403c0f86aaf97->enter($__internal_e87ce2d2ad8a4f80601a97f131c46bbb9c0e7df8e9661195363403c0f86aaf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_e87ce2d2ad8a4f80601a97f131c46bbb9c0e7df8e9661195363403c0f86aaf97->leave($__internal_e87ce2d2ad8a4f80601a97f131c46bbb9c0e7df8e9661195363403c0f86aaf97_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_37fde94f1164eeebec4f85d2cbf108a2bc318e991fbb6f33bba26d275d76d443 = $this->env->getExtension("native_profiler");
        $__internal_37fde94f1164eeebec4f85d2cbf108a2bc318e991fbb6f33bba26d275d76d443->enter($__internal_37fde94f1164eeebec4f85d2cbf108a2bc318e991fbb6f33bba26d275d76d443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_37fde94f1164eeebec4f85d2cbf108a2bc318e991fbb6f33bba26d275d76d443->leave($__internal_37fde94f1164eeebec4f85d2cbf108a2bc318e991fbb6f33bba26d275d76d443_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_92f2dd59e54ff903a5d1d91146a9588f74f8142d5d5bd72acd553620e4d67fc7 = $this->env->getExtension("native_profiler");
        $__internal_92f2dd59e54ff903a5d1d91146a9588f74f8142d5d5bd72acd553620e4d67fc7->enter($__internal_92f2dd59e54ff903a5d1d91146a9588f74f8142d5d5bd72acd553620e4d67fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_92f2dd59e54ff903a5d1d91146a9588f74f8142d5d5bd72acd553620e4d67fc7->leave($__internal_92f2dd59e54ff903a5d1d91146a9588f74f8142d5d5bd72acd553620e4d67fc7_prof);

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

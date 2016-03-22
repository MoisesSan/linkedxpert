<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_b35ad0eebda17f3151158f2f6f011697ceef446294e120e718a4a4cbfb419cca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "AcmeDemoBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28a37686ce17b2c81f4c609fa8714bfbe079ca5285c9ab8e4d3098c8b2b34e23 = $this->env->getExtension("native_profiler");
        $__internal_28a37686ce17b2c81f4c609fa8714bfbe079ca5285c9ab8e4d3098c8b2b34e23->enter($__internal_28a37686ce17b2c81f4c609fa8714bfbe079ca5285c9ab8e4d3098c8b2b34e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28a37686ce17b2c81f4c609fa8714bfbe079ca5285c9ab8e4d3098c8b2b34e23->leave($__internal_28a37686ce17b2c81f4c609fa8714bfbe079ca5285c9ab8e4d3098c8b2b34e23_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0cd81596bbc17328ae2ec1379e9b3f498302e98dbc88a23460309d3380c33c26 = $this->env->getExtension("native_profiler");
        $__internal_0cd81596bbc17328ae2ec1379e9b3f498302e98dbc88a23460309d3380c33c26->enter($__internal_0cd81596bbc17328ae2ec1379e9b3f498302e98dbc88a23460309d3380c33c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_0cd81596bbc17328ae2ec1379e9b3f498302e98dbc88a23460309d3380c33c26->leave($__internal_0cd81596bbc17328ae2ec1379e9b3f498302e98dbc88a23460309d3380c33c26_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_604515f9083889f67a0c3a62bc3dd35fc5a9776d06b2d3ea8baacbec58c26731 = $this->env->getExtension("native_profiler");
        $__internal_604515f9083889f67a0c3a62bc3dd35fc5a9776d06b2d3ea8baacbec58c26731->enter($__internal_604515f9083889f67a0c3a62bc3dd35fc5a9776d06b2d3ea8baacbec58c26731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_604515f9083889f67a0c3a62bc3dd35fc5a9776d06b2d3ea8baacbec58c26731->leave($__internal_604515f9083889f67a0c3a62bc3dd35fc5a9776d06b2d3ea8baacbec58c26731_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_06d43c1b9a94891d9cd5be0fa3fbb5077a91bb090f0fedc77866f40ca8985a72 = $this->env->getExtension("native_profiler");
        $__internal_06d43c1b9a94891d9cd5be0fa3fbb5077a91bb090f0fedc77866f40ca8985a72->enter($__internal_06d43c1b9a94891d9cd5be0fa3fbb5077a91bb090f0fedc77866f40ca8985a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_06d43c1b9a94891d9cd5be0fa3fbb5077a91bb090f0fedc77866f40ca8985a72->leave($__internal_06d43c1b9a94891d9cd5be0fa3fbb5077a91bb090f0fedc77866f40ca8985a72_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_1a20b4fca19bea97ccbc375f0e4276a417cc0915cda07bc7bb71439e59129fca = $this->env->getExtension("native_profiler");
        $__internal_1a20b4fca19bea97ccbc375f0e4276a417cc0915cda07bc7bb71439e59129fca->enter($__internal_1a20b4fca19bea97ccbc375f0e4276a417cc0915cda07bc7bb71439e59129fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_1a20b4fca19bea97ccbc375f0e4276a417cc0915cda07bc7bb71439e59129fca->leave($__internal_1a20b4fca19bea97ccbc375f0e4276a417cc0915cda07bc7bb71439e59129fca_prof);

    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_fd2bb99929b2b7177d5ea09285c32be8ba4969f4683dac20f8fde3ea0328db82 = $this->env->getExtension("native_profiler");
        $__internal_fd2bb99929b2b7177d5ea09285c32be8ba4969f4683dac20f8fde3ea0328db82->enter($__internal_fd2bb99929b2b7177d5ea09285c32be8ba4969f4683dac20f8fde3ea0328db82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_fd2bb99929b2b7177d5ea09285c32be8ba4969f4683dac20f8fde3ea0328db82->leave($__internal_fd2bb99929b2b7177d5ea09285c32be8ba4969f4683dac20f8fde3ea0328db82_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_b1d898e5b77f3849f8754e009064202485d5ef156a4128a062237b27411ad76f = $this->env->getExtension("native_profiler");
        $__internal_b1d898e5b77f3849f8754e009064202485d5ef156a4128a062237b27411ad76f->enter($__internal_b1d898e5b77f3849f8754e009064202485d5ef156a4128a062237b27411ad76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b1d898e5b77f3849f8754e009064202485d5ef156a4128a062237b27411ad76f->leave($__internal_b1d898e5b77f3849f8754e009064202485d5ef156a4128a062237b27411ad76f_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 28,  153 => 20,  147 => 19,  137 => 22,  135 => 19,  132 => 18,  126 => 17,  115 => 34,  111 => 32,  109 => 31,  105 => 29,  103 => 28,  99 => 26,  97 => 17,  94 => 16,  85 => 13,  82 => 12,  77 => 11,  71 => 10,  59 => 8,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="icon" sizes="16x16" href="{{ asset('favicon.ico') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/acmedemo/css/demo.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Demo Bundle' %}*/
/* */
/* {% block body %}*/
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class="flash-message">*/
/*             <em>Notice</em>: {{ flashMessage }}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     {% block content_header %}*/
/*         <ul id="menu">*/
/*             {% block content_header_more %}*/
/*                 <li><a href="{{ path('_demo') }}">Demo Home</a></li>*/
/*             {% endblock %}*/
/*         </ul>*/
/* */
/*         <div style="clear: both"></div>*/
/*     {% endblock %}*/
/* */
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/* */
/*     {% if code is defined %}*/
/*         <h2>Code behind this page</h2>*/
/*         <div class="block">*/
/*             <div class="symfony-content">{{ code|raw }}</div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

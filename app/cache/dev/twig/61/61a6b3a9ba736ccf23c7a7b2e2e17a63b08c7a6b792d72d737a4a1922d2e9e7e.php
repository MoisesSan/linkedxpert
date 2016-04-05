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
        $__internal_94850e5198336c64eecbf471a88273768efe772b61a558385bfecfd19fc0b57e = $this->env->getExtension("native_profiler");
        $__internal_94850e5198336c64eecbf471a88273768efe772b61a558385bfecfd19fc0b57e->enter($__internal_94850e5198336c64eecbf471a88273768efe772b61a558385bfecfd19fc0b57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94850e5198336c64eecbf471a88273768efe772b61a558385bfecfd19fc0b57e->leave($__internal_94850e5198336c64eecbf471a88273768efe772b61a558385bfecfd19fc0b57e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ca02beb99d89d4a5b45db8c4388687870b9780af6ee78311bbad917c64c6c5d = $this->env->getExtension("native_profiler");
        $__internal_3ca02beb99d89d4a5b45db8c4388687870b9780af6ee78311bbad917c64c6c5d->enter($__internal_3ca02beb99d89d4a5b45db8c4388687870b9780af6ee78311bbad917c64c6c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_3ca02beb99d89d4a5b45db8c4388687870b9780af6ee78311bbad917c64c6c5d->leave($__internal_3ca02beb99d89d4a5b45db8c4388687870b9780af6ee78311bbad917c64c6c5d_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f14e10b042a0495c9bdc52d15411d76219073fa33bdacf7a7151c9d98b88baf = $this->env->getExtension("native_profiler");
        $__internal_4f14e10b042a0495c9bdc52d15411d76219073fa33bdacf7a7151c9d98b88baf->enter($__internal_4f14e10b042a0495c9bdc52d15411d76219073fa33bdacf7a7151c9d98b88baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_4f14e10b042a0495c9bdc52d15411d76219073fa33bdacf7a7151c9d98b88baf->leave($__internal_4f14e10b042a0495c9bdc52d15411d76219073fa33bdacf7a7151c9d98b88baf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a76aad5bce08debb5cbd7fda60ee00cf1da699d4673d780244275256f74b6f9d = $this->env->getExtension("native_profiler");
        $__internal_a76aad5bce08debb5cbd7fda60ee00cf1da699d4673d780244275256f74b6f9d->enter($__internal_a76aad5bce08debb5cbd7fda60ee00cf1da699d4673d780244275256f74b6f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a76aad5bce08debb5cbd7fda60ee00cf1da699d4673d780244275256f74b6f9d->leave($__internal_a76aad5bce08debb5cbd7fda60ee00cf1da699d4673d780244275256f74b6f9d_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_19549eb875c76a960bc314238ca95ca4a1d29fb5aaf2be524376060232058f62 = $this->env->getExtension("native_profiler");
        $__internal_19549eb875c76a960bc314238ca95ca4a1d29fb5aaf2be524376060232058f62->enter($__internal_19549eb875c76a960bc314238ca95ca4a1d29fb5aaf2be524376060232058f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_19549eb875c76a960bc314238ca95ca4a1d29fb5aaf2be524376060232058f62->leave($__internal_19549eb875c76a960bc314238ca95ca4a1d29fb5aaf2be524376060232058f62_prof);

    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_c6bd920164e0b4de61b5a383ce28022018b8e538aad15b76d1ab8c4a72988aba = $this->env->getExtension("native_profiler");
        $__internal_c6bd920164e0b4de61b5a383ce28022018b8e538aad15b76d1ab8c4a72988aba->enter($__internal_c6bd920164e0b4de61b5a383ce28022018b8e538aad15b76d1ab8c4a72988aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_c6bd920164e0b4de61b5a383ce28022018b8e538aad15b76d1ab8c4a72988aba->leave($__internal_c6bd920164e0b4de61b5a383ce28022018b8e538aad15b76d1ab8c4a72988aba_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_11a0573ee5ae1c3e5a9a8e2c2c6305cdf37506b482377704d1c0e2aa555b9d2d = $this->env->getExtension("native_profiler");
        $__internal_11a0573ee5ae1c3e5a9a8e2c2c6305cdf37506b482377704d1c0e2aa555b9d2d->enter($__internal_11a0573ee5ae1c3e5a9a8e2c2c6305cdf37506b482377704d1c0e2aa555b9d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_11a0573ee5ae1c3e5a9a8e2c2c6305cdf37506b482377704d1c0e2aa555b9d2d->leave($__internal_11a0573ee5ae1c3e5a9a8e2c2c6305cdf37506b482377704d1c0e2aa555b9d2d_prof);

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

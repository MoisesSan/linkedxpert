<?php

/* @AcmeDemo/layout.html.twig */
class __TwigTemplate_543bdeea932f721a323063cabeeb31c51af6146ad0313bcc36e7d88feccf7b21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@AcmeDemo/layout.html.twig", 1);
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
        $__internal_1b4a625cda07e222f9c59af187dd1d6b842d82c6d3c0bfbdee31afd6dbbc5614 = $this->env->getExtension("native_profiler");
        $__internal_1b4a625cda07e222f9c59af187dd1d6b842d82c6d3c0bfbdee31afd6dbbc5614->enter($__internal_1b4a625cda07e222f9c59af187dd1d6b842d82c6d3c0bfbdee31afd6dbbc5614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b4a625cda07e222f9c59af187dd1d6b842d82c6d3c0bfbdee31afd6dbbc5614->leave($__internal_1b4a625cda07e222f9c59af187dd1d6b842d82c6d3c0bfbdee31afd6dbbc5614_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f16fc4baca0329691a86894cdbea8cc98ef1c9bc6906fb099881e96b29edb09d = $this->env->getExtension("native_profiler");
        $__internal_f16fc4baca0329691a86894cdbea8cc98ef1c9bc6906fb099881e96b29edb09d->enter($__internal_f16fc4baca0329691a86894cdbea8cc98ef1c9bc6906fb099881e96b29edb09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f16fc4baca0329691a86894cdbea8cc98ef1c9bc6906fb099881e96b29edb09d->leave($__internal_f16fc4baca0329691a86894cdbea8cc98ef1c9bc6906fb099881e96b29edb09d_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_70dacbaa8898e32ccb50287fa0a9794969484d37a298038641b57a56930b4411 = $this->env->getExtension("native_profiler");
        $__internal_70dacbaa8898e32ccb50287fa0a9794969484d37a298038641b57a56930b4411->enter($__internal_70dacbaa8898e32ccb50287fa0a9794969484d37a298038641b57a56930b4411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_70dacbaa8898e32ccb50287fa0a9794969484d37a298038641b57a56930b4411->leave($__internal_70dacbaa8898e32ccb50287fa0a9794969484d37a298038641b57a56930b4411_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3514125e0c3f87402d0dcc7e5a8eab9c15db2bd2e5ad3b074a19c677ea4d3643 = $this->env->getExtension("native_profiler");
        $__internal_3514125e0c3f87402d0dcc7e5a8eab9c15db2bd2e5ad3b074a19c677ea4d3643->enter($__internal_3514125e0c3f87402d0dcc7e5a8eab9c15db2bd2e5ad3b074a19c677ea4d3643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3514125e0c3f87402d0dcc7e5a8eab9c15db2bd2e5ad3b074a19c677ea4d3643->leave($__internal_3514125e0c3f87402d0dcc7e5a8eab9c15db2bd2e5ad3b074a19c677ea4d3643_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_8bb08a00972445269658dda884b9c38d23236800b8bc6d1202f0b98ee2705eda = $this->env->getExtension("native_profiler");
        $__internal_8bb08a00972445269658dda884b9c38d23236800b8bc6d1202f0b98ee2705eda->enter($__internal_8bb08a00972445269658dda884b9c38d23236800b8bc6d1202f0b98ee2705eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_8bb08a00972445269658dda884b9c38d23236800b8bc6d1202f0b98ee2705eda->leave($__internal_8bb08a00972445269658dda884b9c38d23236800b8bc6d1202f0b98ee2705eda_prof);

    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_a00988f3311d61609e41d4ddb4a35da4ef9c69c2f3605c5acbd67d176bd8574e = $this->env->getExtension("native_profiler");
        $__internal_a00988f3311d61609e41d4ddb4a35da4ef9c69c2f3605c5acbd67d176bd8574e->enter($__internal_a00988f3311d61609e41d4ddb4a35da4ef9c69c2f3605c5acbd67d176bd8574e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_a00988f3311d61609e41d4ddb4a35da4ef9c69c2f3605c5acbd67d176bd8574e->leave($__internal_a00988f3311d61609e41d4ddb4a35da4ef9c69c2f3605c5acbd67d176bd8574e_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_2e89cb98ca2575caf0cb692d72e48ab6372d2fa4617b2ac8fb1e8c868aecc166 = $this->env->getExtension("native_profiler");
        $__internal_2e89cb98ca2575caf0cb692d72e48ab6372d2fa4617b2ac8fb1e8c868aecc166->enter($__internal_2e89cb98ca2575caf0cb692d72e48ab6372d2fa4617b2ac8fb1e8c868aecc166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2e89cb98ca2575caf0cb692d72e48ab6372d2fa4617b2ac8fb1e8c868aecc166->leave($__internal_2e89cb98ca2575caf0cb692d72e48ab6372d2fa4617b2ac8fb1e8c868aecc166_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/layout.html.twig";
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

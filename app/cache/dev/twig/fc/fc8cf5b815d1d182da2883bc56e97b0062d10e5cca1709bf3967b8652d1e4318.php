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
        $__internal_63509aa92094f4ae9c7a2d26e8334a13d7fb86e0002611ff46887c9f201fda54 = $this->env->getExtension("native_profiler");
        $__internal_63509aa92094f4ae9c7a2d26e8334a13d7fb86e0002611ff46887c9f201fda54->enter($__internal_63509aa92094f4ae9c7a2d26e8334a13d7fb86e0002611ff46887c9f201fda54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63509aa92094f4ae9c7a2d26e8334a13d7fb86e0002611ff46887c9f201fda54->leave($__internal_63509aa92094f4ae9c7a2d26e8334a13d7fb86e0002611ff46887c9f201fda54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5ddf6d976384dd3528d266d77868f41083d44475fd4eb4c957c7380f28b6491 = $this->env->getExtension("native_profiler");
        $__internal_b5ddf6d976384dd3528d266d77868f41083d44475fd4eb4c957c7380f28b6491->enter($__internal_b5ddf6d976384dd3528d266d77868f41083d44475fd4eb4c957c7380f28b6491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b5ddf6d976384dd3528d266d77868f41083d44475fd4eb4c957c7380f28b6491->leave($__internal_b5ddf6d976384dd3528d266d77868f41083d44475fd4eb4c957c7380f28b6491_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_feecd9405ad3c61b5dae8b49327aeb8b10bafee7b9fa8019830f49c8f8594836 = $this->env->getExtension("native_profiler");
        $__internal_feecd9405ad3c61b5dae8b49327aeb8b10bafee7b9fa8019830f49c8f8594836->enter($__internal_feecd9405ad3c61b5dae8b49327aeb8b10bafee7b9fa8019830f49c8f8594836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_feecd9405ad3c61b5dae8b49327aeb8b10bafee7b9fa8019830f49c8f8594836->leave($__internal_feecd9405ad3c61b5dae8b49327aeb8b10bafee7b9fa8019830f49c8f8594836_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_98ebea0541f3cce2025795949487ca62863a5a59c07b772e24db1a8a1eca71c1 = $this->env->getExtension("native_profiler");
        $__internal_98ebea0541f3cce2025795949487ca62863a5a59c07b772e24db1a8a1eca71c1->enter($__internal_98ebea0541f3cce2025795949487ca62863a5a59c07b772e24db1a8a1eca71c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_98ebea0541f3cce2025795949487ca62863a5a59c07b772e24db1a8a1eca71c1->leave($__internal_98ebea0541f3cce2025795949487ca62863a5a59c07b772e24db1a8a1eca71c1_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_91c8a124bcea3161ab11343397ecaf4f621fc41fecef13692badfb2553166005 = $this->env->getExtension("native_profiler");
        $__internal_91c8a124bcea3161ab11343397ecaf4f621fc41fecef13692badfb2553166005->enter($__internal_91c8a124bcea3161ab11343397ecaf4f621fc41fecef13692badfb2553166005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_91c8a124bcea3161ab11343397ecaf4f621fc41fecef13692badfb2553166005->leave($__internal_91c8a124bcea3161ab11343397ecaf4f621fc41fecef13692badfb2553166005_prof);

    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_c992555e30021b7af71c8595643cf45df87eb9333315c9a6e5312e972aa059c7 = $this->env->getExtension("native_profiler");
        $__internal_c992555e30021b7af71c8595643cf45df87eb9333315c9a6e5312e972aa059c7->enter($__internal_c992555e30021b7af71c8595643cf45df87eb9333315c9a6e5312e972aa059c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_c992555e30021b7af71c8595643cf45df87eb9333315c9a6e5312e972aa059c7->leave($__internal_c992555e30021b7af71c8595643cf45df87eb9333315c9a6e5312e972aa059c7_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_8e23c815fc9b7267963ecfad181f8ae1ca83df13a4dff1757773c021b31a654d = $this->env->getExtension("native_profiler");
        $__internal_8e23c815fc9b7267963ecfad181f8ae1ca83df13a4dff1757773c021b31a654d->enter($__internal_8e23c815fc9b7267963ecfad181f8ae1ca83df13a4dff1757773c021b31a654d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8e23c815fc9b7267963ecfad181f8ae1ca83df13a4dff1757773c021b31a654d->leave($__internal_8e23c815fc9b7267963ecfad181f8ae1ca83df13a4dff1757773c021b31a654d_prof);

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

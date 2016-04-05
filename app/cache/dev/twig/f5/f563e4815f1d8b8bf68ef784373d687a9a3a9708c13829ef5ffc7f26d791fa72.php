<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e0d9fcef4d061c52ac4907b50d78ae6bb81dd432fea8a24b8cff118e7452d63e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00804ce5a25286bd424f780a6c9f46dbb66deaf2259c85fccd17c0d65b71aaa9 = $this->env->getExtension("native_profiler");
        $__internal_00804ce5a25286bd424f780a6c9f46dbb66deaf2259c85fccd17c0d65b71aaa9->enter($__internal_00804ce5a25286bd424f780a6c9f46dbb66deaf2259c85fccd17c0d65b71aaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00804ce5a25286bd424f780a6c9f46dbb66deaf2259c85fccd17c0d65b71aaa9->leave($__internal_00804ce5a25286bd424f780a6c9f46dbb66deaf2259c85fccd17c0d65b71aaa9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a25f8019cf2cd0ea199baaf036d685e31e7c97906584c03f0a61e1af20558add = $this->env->getExtension("native_profiler");
        $__internal_a25f8019cf2cd0ea199baaf036d685e31e7c97906584c03f0a61e1af20558add->enter($__internal_a25f8019cf2cd0ea199baaf036d685e31e7c97906584c03f0a61e1af20558add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a25f8019cf2cd0ea199baaf036d685e31e7c97906584c03f0a61e1af20558add->leave($__internal_a25f8019cf2cd0ea199baaf036d685e31e7c97906584c03f0a61e1af20558add_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c00730cbe7face942aa0dd9fb1f429d8ea452c4e572915c461b71b31e09b805 = $this->env->getExtension("native_profiler");
        $__internal_2c00730cbe7face942aa0dd9fb1f429d8ea452c4e572915c461b71b31e09b805->enter($__internal_2c00730cbe7face942aa0dd9fb1f429d8ea452c4e572915c461b71b31e09b805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c00730cbe7face942aa0dd9fb1f429d8ea452c4e572915c461b71b31e09b805->leave($__internal_2c00730cbe7face942aa0dd9fb1f429d8ea452c4e572915c461b71b31e09b805_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03ab8ae41900815e32fb472fc34532257a07a54badd664dd9c299f12890e6f72 = $this->env->getExtension("native_profiler");
        $__internal_03ab8ae41900815e32fb472fc34532257a07a54badd664dd9c299f12890e6f72->enter($__internal_03ab8ae41900815e32fb472fc34532257a07a54badd664dd9c299f12890e6f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_03ab8ae41900815e32fb472fc34532257a07a54badd664dd9c299f12890e6f72->leave($__internal_03ab8ae41900815e32fb472fc34532257a07a54badd664dd9c299f12890e6f72_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

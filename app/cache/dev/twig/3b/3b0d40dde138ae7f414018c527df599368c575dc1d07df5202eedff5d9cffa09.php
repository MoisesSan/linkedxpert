<?php

/* @AcmeDemo/Demo/contact.html.twig */
class __TwigTemplate_3da1b2275ca0a54d248e21a979bab12fde068cb7dbc7fb6ecabd5c1dfc14ea4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "@AcmeDemo/Demo/contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6afd33dd299f046d96d09e737f705151c8cc53e06cb38442fdd30445c68ba108 = $this->env->getExtension("native_profiler");
        $__internal_6afd33dd299f046d96d09e737f705151c8cc53e06cb38442fdd30445c68ba108->enter($__internal_6afd33dd299f046d96d09e737f705151c8cc53e06cb38442fdd30445c68ba108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Demo/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6afd33dd299f046d96d09e737f705151c8cc53e06cb38442fdd30445c68ba108->leave($__internal_6afd33dd299f046d96d09e737f705151c8cc53e06cb38442fdd30445c68ba108_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cc041a17c8f4c8e3fb7646312189e5009f76931ce143bea656c7918eca243c0 = $this->env->getExtension("native_profiler");
        $__internal_0cc041a17c8f4c8e3fb7646312189e5009f76931ce143bea656c7918eca243c0->enter($__internal_0cc041a17c8f4c8e3fb7646312189e5009f76931ce143bea656c7918eca243c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Contact form";
        
        $__internal_0cc041a17c8f4c8e3fb7646312189e5009f76931ce143bea656c7918eca243c0->leave($__internal_0cc041a17c8f4c8e3fb7646312189e5009f76931ce143bea656c7918eca243c0_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_11eb93ed676cfc19bf102e36accfbe582a0bc2c9630d7b64dbcf2f99ade9cf7a = $this->env->getExtension("native_profiler");
        $__internal_11eb93ed676cfc19bf102e36accfbe582a0bc2c9630d7b64dbcf2f99ade9cf7a->enter($__internal_11eb93ed676cfc19bf102e36accfbe582a0bc2c9630d7b64dbcf2f99ade9cf7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
        
        $__internal_11eb93ed676cfc19bf102e36accfbe582a0bc2c9630d7b64dbcf2f99ade9cf7a->leave($__internal_11eb93ed676cfc19bf102e36accfbe582a0bc2c9630d7b64dbcf2f99ade9cf7a_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Demo/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  67 => 10,  63 => 9,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoBundle::layout.html.twig" %}*/
/* */
/* {% block title "Symfony - Contact form" %}*/
/* */
/* {% block content %}*/
/*     <form action="{{ path('_demo_contact') }}" method="POST" id="contact_form">*/
/*         {{ form_errors(form) }}*/
/* */
/*         {{ form_row(form.email) }}*/
/*         {{ form_row(form.message) }}*/
/* */
/*         {{ form_rest(form) }}*/
/*         <input type="submit" value="Send" class="symfony-button-grey" />*/
/*     </form>*/
/* {% endblock %}*/
/* */

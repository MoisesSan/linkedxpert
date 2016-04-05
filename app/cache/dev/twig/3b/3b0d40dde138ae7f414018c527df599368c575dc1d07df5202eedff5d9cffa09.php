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
        $__internal_580c745764ebb67b5b8d5097ac80008c57e7c4b5064cd0265142709011fdfe56 = $this->env->getExtension("native_profiler");
        $__internal_580c745764ebb67b5b8d5097ac80008c57e7c4b5064cd0265142709011fdfe56->enter($__internal_580c745764ebb67b5b8d5097ac80008c57e7c4b5064cd0265142709011fdfe56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Demo/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_580c745764ebb67b5b8d5097ac80008c57e7c4b5064cd0265142709011fdfe56->leave($__internal_580c745764ebb67b5b8d5097ac80008c57e7c4b5064cd0265142709011fdfe56_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a1fee13f4d6e914fbcd3cc0ec9d6e5b926dbc697e9f0b1a5e30262d88ee95d9 = $this->env->getExtension("native_profiler");
        $__internal_9a1fee13f4d6e914fbcd3cc0ec9d6e5b926dbc697e9f0b1a5e30262d88ee95d9->enter($__internal_9a1fee13f4d6e914fbcd3cc0ec9d6e5b926dbc697e9f0b1a5e30262d88ee95d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Contact form";
        
        $__internal_9a1fee13f4d6e914fbcd3cc0ec9d6e5b926dbc697e9f0b1a5e30262d88ee95d9->leave($__internal_9a1fee13f4d6e914fbcd3cc0ec9d6e5b926dbc697e9f0b1a5e30262d88ee95d9_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_58981fd72397031692de00569b67f6ba9a11327d18263de8e172e2b53b1ad8ad = $this->env->getExtension("native_profiler");
        $__internal_58981fd72397031692de00569b67f6ba9a11327d18263de8e172e2b53b1ad8ad->enter($__internal_58981fd72397031692de00569b67f6ba9a11327d18263de8e172e2b53b1ad8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_58981fd72397031692de00569b67f6ba9a11327d18263de8e172e2b53b1ad8ad->leave($__internal_58981fd72397031692de00569b67f6ba9a11327d18263de8e172e2b53b1ad8ad_prof);

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

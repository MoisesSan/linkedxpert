<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_f5db1d7109a5138c8dd92ffc086c0c2d97cb338c4d3923602571caaeb4174caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Demo:contact.html.twig", 1);
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
        $__internal_aa21fd65fb8f6d85ad9da9f5f05a40c0f98a720edcffb860fe056b66736936e9 = $this->env->getExtension("native_profiler");
        $__internal_aa21fd65fb8f6d85ad9da9f5f05a40c0f98a720edcffb860fe056b66736936e9->enter($__internal_aa21fd65fb8f6d85ad9da9f5f05a40c0f98a720edcffb860fe056b66736936e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa21fd65fb8f6d85ad9da9f5f05a40c0f98a720edcffb860fe056b66736936e9->leave($__internal_aa21fd65fb8f6d85ad9da9f5f05a40c0f98a720edcffb860fe056b66736936e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73621127b53719e94aa1aff002db3a2e6a71c3a7a17a6ac14999bcd48127ef69 = $this->env->getExtension("native_profiler");
        $__internal_73621127b53719e94aa1aff002db3a2e6a71c3a7a17a6ac14999bcd48127ef69->enter($__internal_73621127b53719e94aa1aff002db3a2e6a71c3a7a17a6ac14999bcd48127ef69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Contact form";
        
        $__internal_73621127b53719e94aa1aff002db3a2e6a71c3a7a17a6ac14999bcd48127ef69->leave($__internal_73621127b53719e94aa1aff002db3a2e6a71c3a7a17a6ac14999bcd48127ef69_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ae7fcc7df3639b475160ac37399a40e0a90efc3ab4042875cc455416aae862b = $this->env->getExtension("native_profiler");
        $__internal_2ae7fcc7df3639b475160ac37399a40e0a90efc3ab4042875cc455416aae862b->enter($__internal_2ae7fcc7df3639b475160ac37399a40e0a90efc3ab4042875cc455416aae862b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2ae7fcc7df3639b475160ac37399a40e0a90efc3ab4042875cc455416aae862b->leave($__internal_2ae7fcc7df3639b475160ac37399a40e0a90efc3ab4042875cc455416aae862b_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
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

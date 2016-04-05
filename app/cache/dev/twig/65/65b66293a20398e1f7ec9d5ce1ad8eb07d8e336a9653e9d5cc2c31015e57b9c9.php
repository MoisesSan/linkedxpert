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
        $__internal_c88e538c1d5c6c26d771bc7de804a100b20ce85b4b0956cf2f891dee41b2633f = $this->env->getExtension("native_profiler");
        $__internal_c88e538c1d5c6c26d771bc7de804a100b20ce85b4b0956cf2f891dee41b2633f->enter($__internal_c88e538c1d5c6c26d771bc7de804a100b20ce85b4b0956cf2f891dee41b2633f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c88e538c1d5c6c26d771bc7de804a100b20ce85b4b0956cf2f891dee41b2633f->leave($__internal_c88e538c1d5c6c26d771bc7de804a100b20ce85b4b0956cf2f891dee41b2633f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d15ca15c77786a8e24adcb1bf786b341317932e1a650d203da59de86b6aa859 = $this->env->getExtension("native_profiler");
        $__internal_6d15ca15c77786a8e24adcb1bf786b341317932e1a650d203da59de86b6aa859->enter($__internal_6d15ca15c77786a8e24adcb1bf786b341317932e1a650d203da59de86b6aa859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Contact form";
        
        $__internal_6d15ca15c77786a8e24adcb1bf786b341317932e1a650d203da59de86b6aa859->leave($__internal_6d15ca15c77786a8e24adcb1bf786b341317932e1a650d203da59de86b6aa859_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a4d1c1a06db9448ce8fc89d3fb175159092a518d51160b9b770dc4841872f24d = $this->env->getExtension("native_profiler");
        $__internal_a4d1c1a06db9448ce8fc89d3fb175159092a518d51160b9b770dc4841872f24d->enter($__internal_a4d1c1a06db9448ce8fc89d3fb175159092a518d51160b9b770dc4841872f24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a4d1c1a06db9448ce8fc89d3fb175159092a518d51160b9b770dc4841872f24d->leave($__internal_a4d1c1a06db9448ce8fc89d3fb175159092a518d51160b9b770dc4841872f24d_prof);

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

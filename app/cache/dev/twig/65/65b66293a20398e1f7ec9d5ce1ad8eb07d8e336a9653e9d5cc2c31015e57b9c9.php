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
        $__internal_40bb2a611ead2095a087d229f955ec9e41798b2d11a643982fe723c737b3a00c = $this->env->getExtension("native_profiler");
        $__internal_40bb2a611ead2095a087d229f955ec9e41798b2d11a643982fe723c737b3a00c->enter($__internal_40bb2a611ead2095a087d229f955ec9e41798b2d11a643982fe723c737b3a00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40bb2a611ead2095a087d229f955ec9e41798b2d11a643982fe723c737b3a00c->leave($__internal_40bb2a611ead2095a087d229f955ec9e41798b2d11a643982fe723c737b3a00c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_47da9a12b6ca0d58f524561894641e45602ce37e29e10bf5527876d185d4d759 = $this->env->getExtension("native_profiler");
        $__internal_47da9a12b6ca0d58f524561894641e45602ce37e29e10bf5527876d185d4d759->enter($__internal_47da9a12b6ca0d58f524561894641e45602ce37e29e10bf5527876d185d4d759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Contact form";
        
        $__internal_47da9a12b6ca0d58f524561894641e45602ce37e29e10bf5527876d185d4d759->leave($__internal_47da9a12b6ca0d58f524561894641e45602ce37e29e10bf5527876d185d4d759_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_fc8a9c4afae7959a2757ea2cd6063770989dd4b4d25d7255c194cea61419bcf5 = $this->env->getExtension("native_profiler");
        $__internal_fc8a9c4afae7959a2757ea2cd6063770989dd4b4d25d7255c194cea61419bcf5->enter($__internal_fc8a9c4afae7959a2757ea2cd6063770989dd4b4d25d7255c194cea61419bcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_fc8a9c4afae7959a2757ea2cd6063770989dd4b4d25d7255c194cea61419bcf5->leave($__internal_fc8a9c4afae7959a2757ea2cd6063770989dd4b4d25d7255c194cea61419bcf5_prof);

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

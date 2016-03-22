<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_fc8d3c971c561e8d95a0679ab45cd4dd5648a1ef310421b0615802f8aae241ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12a914cb6f8fab4e227cf134ddb0d91fe4424a619262c171cb05ba97e4c381d0 = $this->env->getExtension("native_profiler");
        $__internal_12a914cb6f8fab4e227cf134ddb0d91fe4424a619262c171cb05ba97e4c381d0->enter($__internal_12a914cb6f8fab4e227cf134ddb0d91fe4424a619262c171cb05ba97e4c381d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_12a914cb6f8fab4e227cf134ddb0d91fe4424a619262c171cb05ba97e4c381d0->leave($__internal_12a914cb6f8fab4e227cf134ddb0d91fe4424a619262c171cb05ba97e4c381d0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

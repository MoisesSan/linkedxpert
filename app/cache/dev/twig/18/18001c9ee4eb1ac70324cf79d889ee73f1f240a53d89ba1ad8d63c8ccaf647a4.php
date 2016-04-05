<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_a6a02b192be06bb3ec05165a4c34f50df78608217d87a9baefa50cb9d99c816a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_247009b21fb7415078bb3cbe3cd598a34fff505b45dc639917bdb566f8145716 = $this->env->getExtension("native_profiler");
        $__internal_247009b21fb7415078bb3cbe3cd598a34fff505b45dc639917bdb566f8145716->enter($__internal_247009b21fb7415078bb3cbe3cd598a34fff505b45dc639917bdb566f8145716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_247009b21fb7415078bb3cbe3cd598a34fff505b45dc639917bdb566f8145716->leave($__internal_247009b21fb7415078bb3cbe3cd598a34fff505b45dc639917bdb566f8145716_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3e79d029fc55f826b27bf5a463becdde7fc21a769711b9ee6df48d5b9a1cf3c = $this->env->getExtension("native_profiler");
        $__internal_c3e79d029fc55f826b27bf5a463becdde7fc21a769711b9ee6df48d5b9a1cf3c->enter($__internal_c3e79d029fc55f826b27bf5a463becdde7fc21a769711b9ee6df48d5b9a1cf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c3e79d029fc55f826b27bf5a463becdde7fc21a769711b9ee6df48d5b9a1cf3c->leave($__internal_c3e79d029fc55f826b27bf5a463becdde7fc21a769711b9ee6df48d5b9a1cf3c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

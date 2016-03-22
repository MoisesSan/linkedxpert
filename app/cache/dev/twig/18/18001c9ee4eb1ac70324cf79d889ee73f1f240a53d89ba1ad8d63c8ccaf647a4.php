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
        $__internal_6881aa9f98c90f4ec0eddfaae84dd59ed6a948a73a67d99de62a2806a76279ca = $this->env->getExtension("native_profiler");
        $__internal_6881aa9f98c90f4ec0eddfaae84dd59ed6a948a73a67d99de62a2806a76279ca->enter($__internal_6881aa9f98c90f4ec0eddfaae84dd59ed6a948a73a67d99de62a2806a76279ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6881aa9f98c90f4ec0eddfaae84dd59ed6a948a73a67d99de62a2806a76279ca->leave($__internal_6881aa9f98c90f4ec0eddfaae84dd59ed6a948a73a67d99de62a2806a76279ca_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e4c21137054fe17ed39c5c261f87f6c5ec2a01e98b5524dfaa229890e2976ed = $this->env->getExtension("native_profiler");
        $__internal_6e4c21137054fe17ed39c5c261f87f6c5ec2a01e98b5524dfaa229890e2976ed->enter($__internal_6e4c21137054fe17ed39c5c261f87f6c5ec2a01e98b5524dfaa229890e2976ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6e4c21137054fe17ed39c5c261f87f6c5ec2a01e98b5524dfaa229890e2976ed->leave($__internal_6e4c21137054fe17ed39c5c261f87f6c5ec2a01e98b5524dfaa229890e2976ed_prof);

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

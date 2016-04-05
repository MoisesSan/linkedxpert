<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5378487222f01109a2a1f1d31dcd35455db430f37a553963ce79af7c26239da8 extends Twig_Template
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
        $__internal_d062f108936ee03af36b3345530defeafedab2c8f036cdfc4512ad9fe35890c8 = $this->env->getExtension("native_profiler");
        $__internal_d062f108936ee03af36b3345530defeafedab2c8f036cdfc4512ad9fe35890c8->enter($__internal_d062f108936ee03af36b3345530defeafedab2c8f036cdfc4512ad9fe35890c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d062f108936ee03af36b3345530defeafedab2c8f036cdfc4512ad9fe35890c8->leave($__internal_d062f108936ee03af36b3345530defeafedab2c8f036cdfc4512ad9fe35890c8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f0d00994589de8cfdbe58604d2071203805893397c1e20081b91445e5b1a29b = $this->env->getExtension("native_profiler");
        $__internal_2f0d00994589de8cfdbe58604d2071203805893397c1e20081b91445e5b1a29b->enter($__internal_2f0d00994589de8cfdbe58604d2071203805893397c1e20081b91445e5b1a29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2f0d00994589de8cfdbe58604d2071203805893397c1e20081b91445e5b1a29b->leave($__internal_2f0d00994589de8cfdbe58604d2071203805893397c1e20081b91445e5b1a29b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

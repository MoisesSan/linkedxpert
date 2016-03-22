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
        $__internal_a99bcf55f1f3471a2c09b67500ee280f674992c273f6de31a3ca069201a626e8 = $this->env->getExtension("native_profiler");
        $__internal_a99bcf55f1f3471a2c09b67500ee280f674992c273f6de31a3ca069201a626e8->enter($__internal_a99bcf55f1f3471a2c09b67500ee280f674992c273f6de31a3ca069201a626e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a99bcf55f1f3471a2c09b67500ee280f674992c273f6de31a3ca069201a626e8->leave($__internal_a99bcf55f1f3471a2c09b67500ee280f674992c273f6de31a3ca069201a626e8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a71535171f28dd92351b58d65a25872308d5accae4b4440995f90a20907c40e = $this->env->getExtension("native_profiler");
        $__internal_7a71535171f28dd92351b58d65a25872308d5accae4b4440995f90a20907c40e->enter($__internal_7a71535171f28dd92351b58d65a25872308d5accae4b4440995f90a20907c40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7a71535171f28dd92351b58d65a25872308d5accae4b4440995f90a20907c40e->leave($__internal_7a71535171f28dd92351b58d65a25872308d5accae4b4440995f90a20907c40e_prof);

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

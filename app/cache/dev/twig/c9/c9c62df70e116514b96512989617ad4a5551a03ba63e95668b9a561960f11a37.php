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
        $__internal_5b4a736854973ee53cb95aebc1f32703165d8a3f4e5e0b4aa0923e3349dca577 = $this->env->getExtension("native_profiler");
        $__internal_5b4a736854973ee53cb95aebc1f32703165d8a3f4e5e0b4aa0923e3349dca577->enter($__internal_5b4a736854973ee53cb95aebc1f32703165d8a3f4e5e0b4aa0923e3349dca577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5b4a736854973ee53cb95aebc1f32703165d8a3f4e5e0b4aa0923e3349dca577->leave($__internal_5b4a736854973ee53cb95aebc1f32703165d8a3f4e5e0b4aa0923e3349dca577_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9c8f587f1beb088fae8752b973c5c9e87b2885d7a783ef6a35885cc5ab7b87e = $this->env->getExtension("native_profiler");
        $__internal_c9c8f587f1beb088fae8752b973c5c9e87b2885d7a783ef6a35885cc5ab7b87e->enter($__internal_c9c8f587f1beb088fae8752b973c5c9e87b2885d7a783ef6a35885cc5ab7b87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c9c8f587f1beb088fae8752b973c5c9e87b2885d7a783ef6a35885cc5ab7b87e->leave($__internal_c9c8f587f1beb088fae8752b973c5c9e87b2885d7a783ef6a35885cc5ab7b87e_prof);

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

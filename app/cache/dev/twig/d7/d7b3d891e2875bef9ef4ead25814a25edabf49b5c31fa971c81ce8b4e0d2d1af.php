<?php

/* feBundle:Default:ORIG_index.html.twig */
class __TwigTemplate_7a778e80f0766b18c7bd6d38a98911202d7f64d916c58cb101892968ae72374b extends Twig_Template
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
        $__internal_973d93f02a0bbeebca24a7832a8fcc95b6faf41caece75e7e46c9a98dff905ce = $this->env->getExtension("native_profiler");
        $__internal_973d93f02a0bbeebca24a7832a8fcc95b6faf41caece75e7e46c9a98dff905ce->enter($__internal_973d93f02a0bbeebca24a7832a8fcc95b6faf41caece75e7e46c9a98dff905ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "feBundle:Default:ORIG_index.html.twig"));

        // line 1
        echo "Frontend Bundle Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_973d93f02a0bbeebca24a7832a8fcc95b6faf41caece75e7e46c9a98dff905ce->leave($__internal_973d93f02a0bbeebca24a7832a8fcc95b6faf41caece75e7e46c9a98dff905ce_prof);

    }

    public function getTemplateName()
    {
        return "feBundle:Default:ORIG_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Frontend Bundle Hello {{ name }}!*/
/* */

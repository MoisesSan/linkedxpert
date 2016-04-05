<?php

/* @be/Default/index.html.twig */
class __TwigTemplate_03f11c83078450d0be69a89f45dc7a2904464371b3a2a931de0b5fd5189ad660 extends Twig_Template
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
        $__internal_9325389eabf515ec3f6045722a002ce3252561ce88d22aeb5c93df90f21821e1 = $this->env->getExtension("native_profiler");
        $__internal_9325389eabf515ec3f6045722a002ce3252561ce88d22aeb5c93df90f21821e1->enter($__internal_9325389eabf515ec3f6045722a002ce3252561ce88d22aeb5c93df90f21821e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@be/Default/index.html.twig"));

        // line 1
        echo "Backend Bundle Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_9325389eabf515ec3f6045722a002ce3252561ce88d22aeb5c93df90f21821e1->leave($__internal_9325389eabf515ec3f6045722a002ce3252561ce88d22aeb5c93df90f21821e1_prof);

    }

    public function getTemplateName()
    {
        return "@be/Default/index.html.twig";
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
/* Backend Bundle Hello {{ name }}!*/
/* */

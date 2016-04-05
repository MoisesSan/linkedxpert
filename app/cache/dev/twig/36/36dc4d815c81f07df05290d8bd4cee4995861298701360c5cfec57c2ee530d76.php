<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_b1f87bb5e8588b1a9c2bd1c0b39056757e13307bf8c1ab69434346c9e75792e9 extends Twig_Template
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
        $__internal_9d92d030aa24db8fcd655e316283a9ffeb63d4018a64fbcfcda79a008e8ef547 = $this->env->getExtension("native_profiler");
        $__internal_9d92d030aa24db8fcd655e316283a9ffeb63d4018a64fbcfcda79a008e8ef547->enter($__internal_9d92d030aa24db8fcd655e316283a9ffeb63d4018a64fbcfcda79a008e8ef547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9d92d030aa24db8fcd655e316283a9ffeb63d4018a64fbcfcda79a008e8ef547->leave($__internal_9d92d030aa24db8fcd655e316283a9ffeb63d4018a64fbcfcda79a008e8ef547_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

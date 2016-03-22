<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_37a3ce427ed5cddc3e010e3750ca91c65af28ba3a6e70b2ac9ca4b02e0a6576b extends Twig_Template
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
        $__internal_5f1fd44d9dc24721d8e078d1f094614c6e3c195a712c12676bc8e34cd739318b = $this->env->getExtension("native_profiler");
        $__internal_5f1fd44d9dc24721d8e078d1f094614c6e3c195a712c12676bc8e34cd739318b->enter($__internal_5f1fd44d9dc24721d8e078d1f094614c6e3c195a712c12676bc8e34cd739318b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5f1fd44d9dc24721d8e078d1f094614c6e3c195a712c12676bc8e34cd739318b->leave($__internal_5f1fd44d9dc24721d8e078d1f094614c6e3c195a712c12676bc8e34cd739318b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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

<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3203caff7c756658a293c172810b4ba6c7433b3369ac7c3ea19e23008e1b647a extends Twig_Template
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
        $__internal_30e501de0c15421d4f0da7be4ffce5e702d47dd0211fd01cc3034c2cf5eaa3d9 = $this->env->getExtension("native_profiler");
        $__internal_30e501de0c15421d4f0da7be4ffce5e702d47dd0211fd01cc3034c2cf5eaa3d9->enter($__internal_30e501de0c15421d4f0da7be4ffce5e702d47dd0211fd01cc3034c2cf5eaa3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_30e501de0c15421d4f0da7be4ffce5e702d47dd0211fd01cc3034c2cf5eaa3d9->leave($__internal_30e501de0c15421d4f0da7be4ffce5e702d47dd0211fd01cc3034c2cf5eaa3d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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

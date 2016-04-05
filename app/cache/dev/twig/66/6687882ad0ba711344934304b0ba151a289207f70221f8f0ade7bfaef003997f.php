<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1023bc49c9b1e898f4071bdbbff992a2325f46789193654eb6e7375449e344d0 extends Twig_Template
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
        $__internal_5da07eb138c11297111244a4c6dd519435696f4967abc0698ef01725bcf88b2d = $this->env->getExtension("native_profiler");
        $__internal_5da07eb138c11297111244a4c6dd519435696f4967abc0698ef01725bcf88b2d->enter($__internal_5da07eb138c11297111244a4c6dd519435696f4967abc0698ef01725bcf88b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5da07eb138c11297111244a4c6dd519435696f4967abc0698ef01725bcf88b2d->leave($__internal_5da07eb138c11297111244a4c6dd519435696f4967abc0698ef01725bcf88b2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

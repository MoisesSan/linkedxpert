<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_0c44fed65739f078e2afed84cd4f8588b5f2749a859300093657808475e21914 extends Twig_Template
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
        $__internal_5071467ecb9ae37b316fe767acf708528b3cbce137143c4142039f4430fa4af1 = $this->env->getExtension("native_profiler");
        $__internal_5071467ecb9ae37b316fe767acf708528b3cbce137143c4142039f4430fa4af1->enter($__internal_5071467ecb9ae37b316fe767acf708528b3cbce137143c4142039f4430fa4af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5071467ecb9ae37b316fe767acf708528b3cbce137143c4142039f4430fa4af1->leave($__internal_5071467ecb9ae37b316fe767acf708528b3cbce137143c4142039f4430fa4af1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

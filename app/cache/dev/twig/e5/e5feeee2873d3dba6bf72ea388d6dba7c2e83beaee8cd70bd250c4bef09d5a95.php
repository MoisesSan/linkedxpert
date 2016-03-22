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
        $__internal_6b4e39abf4db0f68303e9da3af1f8fd23232dec40bb7987009905273a49b1046 = $this->env->getExtension("native_profiler");
        $__internal_6b4e39abf4db0f68303e9da3af1f8fd23232dec40bb7987009905273a49b1046->enter($__internal_6b4e39abf4db0f68303e9da3af1f8fd23232dec40bb7987009905273a49b1046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6b4e39abf4db0f68303e9da3af1f8fd23232dec40bb7987009905273a49b1046->leave($__internal_6b4e39abf4db0f68303e9da3af1f8fd23232dec40bb7987009905273a49b1046_prof);

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

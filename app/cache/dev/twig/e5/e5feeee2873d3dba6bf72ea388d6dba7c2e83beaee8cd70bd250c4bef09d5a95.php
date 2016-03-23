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
        $__internal_1146c0ac75c2a58a462aad92f937da672a676045078f71303dd559b2cb3f107f = $this->env->getExtension("native_profiler");
        $__internal_1146c0ac75c2a58a462aad92f937da672a676045078f71303dd559b2cb3f107f->enter($__internal_1146c0ac75c2a58a462aad92f937da672a676045078f71303dd559b2cb3f107f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1146c0ac75c2a58a462aad92f937da672a676045078f71303dd559b2cb3f107f->leave($__internal_1146c0ac75c2a58a462aad92f937da672a676045078f71303dd559b2cb3f107f_prof);

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

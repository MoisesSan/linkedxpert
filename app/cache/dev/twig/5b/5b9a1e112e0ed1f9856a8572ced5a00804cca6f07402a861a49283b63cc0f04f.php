<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_815abccf8a8f6d6b411f08b01ed44919b07efa0ef6ac9a04af64eb6cd8249f4a extends Twig_Template
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
        $__internal_0f8666d630382f2679568403a714e15ed1d599c7628530ce2c38f6c25dce0d25 = $this->env->getExtension("native_profiler");
        $__internal_0f8666d630382f2679568403a714e15ed1d599c7628530ce2c38f6c25dce0d25->enter($__internal_0f8666d630382f2679568403a714e15ed1d599c7628530ce2c38f6c25dce0d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0f8666d630382f2679568403a714e15ed1d599c7628530ce2c38f6c25dce0d25->leave($__internal_0f8666d630382f2679568403a714e15ed1d599c7628530ce2c38f6c25dce0d25_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

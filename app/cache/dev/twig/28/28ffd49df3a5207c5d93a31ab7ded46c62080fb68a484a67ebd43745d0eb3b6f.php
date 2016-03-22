<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8c1208772f2d11c79ca812b3b94ffaf482103140e2ffeb5518e5ca61b9d5447f extends Twig_Template
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
        $__internal_1d606af70efdac652d84231dde904a18c60e2d30c1e699247c5a6c6b5c3a02a3 = $this->env->getExtension("native_profiler");
        $__internal_1d606af70efdac652d84231dde904a18c60e2d30c1e699247c5a6c6b5c3a02a3->enter($__internal_1d606af70efdac652d84231dde904a18c60e2d30c1e699247c5a6c6b5c3a02a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1d606af70efdac652d84231dde904a18c60e2d30c1e699247c5a6c6b5c3a02a3->leave($__internal_1d606af70efdac652d84231dde904a18c60e2d30c1e699247c5a6c6b5c3a02a3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

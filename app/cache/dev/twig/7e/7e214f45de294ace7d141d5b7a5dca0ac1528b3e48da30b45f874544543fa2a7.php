<?php

/* @fe/Default/ORIG_index.html.twig */
class __TwigTemplate_7b7485dc8c5c92d0e1e8db7e23a55bd3aa67fa918ceff3cada10409ad199fa84 extends Twig_Template
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
        $__internal_971fce501332904e9a6129a32604da2106fac1ed6ae1e70a1ba2295abd704dfc = $this->env->getExtension("native_profiler");
        $__internal_971fce501332904e9a6129a32604da2106fac1ed6ae1e70a1ba2295abd704dfc->enter($__internal_971fce501332904e9a6129a32604da2106fac1ed6ae1e70a1ba2295abd704dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@fe/Default/ORIG_index.html.twig"));

        // line 1
        echo "Frontend Bundle Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_971fce501332904e9a6129a32604da2106fac1ed6ae1e70a1ba2295abd704dfc->leave($__internal_971fce501332904e9a6129a32604da2106fac1ed6ae1e70a1ba2295abd704dfc_prof);

    }

    public function getTemplateName()
    {
        return "@fe/Default/ORIG_index.html.twig";
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
/* Frontend Bundle Hello {{ name }}!*/
/* */

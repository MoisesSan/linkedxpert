<?php

/* beBundle:Default:index.html.twig */
class __TwigTemplate_6cd8f37cf387011fa9038bb0726bdfd706987f37a8806df3e5bfd86e49d9ffb6 extends Twig_Template
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
        $__internal_7850ebf604a6991ff0011f8ac8aa551339a1dce0ae75e58ca8b22b9e0725591d = $this->env->getExtension("native_profiler");
        $__internal_7850ebf604a6991ff0011f8ac8aa551339a1dce0ae75e58ca8b22b9e0725591d->enter($__internal_7850ebf604a6991ff0011f8ac8aa551339a1dce0ae75e58ca8b22b9e0725591d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "beBundle:Default:index.html.twig"));

        // line 1
        echo "Backend Bundle Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_7850ebf604a6991ff0011f8ac8aa551339a1dce0ae75e58ca8b22b9e0725591d->leave($__internal_7850ebf604a6991ff0011f8ac8aa551339a1dce0ae75e58ca8b22b9e0725591d_prof);

    }

    public function getTemplateName()
    {
        return "beBundle:Default:index.html.twig";
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
/* Backend Bundle Hello {{ name }}!*/
/* */

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
        $__internal_6a11e4ae202225fb961e06f53a34f5055cfeb07efbcd477a46bee18099e09107 = $this->env->getExtension("native_profiler");
        $__internal_6a11e4ae202225fb961e06f53a34f5055cfeb07efbcd477a46bee18099e09107->enter($__internal_6a11e4ae202225fb961e06f53a34f5055cfeb07efbcd477a46bee18099e09107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "beBundle:Default:index.html.twig"));

        // line 1
        echo "Backend Bundle Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_6a11e4ae202225fb961e06f53a34f5055cfeb07efbcd477a46bee18099e09107->leave($__internal_6a11e4ae202225fb961e06f53a34f5055cfeb07efbcd477a46bee18099e09107_prof);

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

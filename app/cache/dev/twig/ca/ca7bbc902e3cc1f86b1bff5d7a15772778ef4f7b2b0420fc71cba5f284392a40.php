<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_2925980ca37bbf86f847aa554b9c41ef12aa60b4215d16c08f1c9834a183d559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Demo:hello.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20d6c3c4a8581228a3f3ce6ac49f3d48840b87e33acf0c9cee4bc0a75fd48d86 = $this->env->getExtension("native_profiler");
        $__internal_20d6c3c4a8581228a3f3ce6ac49f3d48840b87e33acf0c9cee4bc0a75fd48d86->enter($__internal_20d6c3c4a8581228a3f3ce6ac49f3d48840b87e33acf0c9cee4bc0a75fd48d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:hello.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20d6c3c4a8581228a3f3ce6ac49f3d48840b87e33acf0c9cee4bc0a75fd48d86->leave($__internal_20d6c3c4a8581228a3f3ce6ac49f3d48840b87e33acf0c9cee4bc0a75fd48d86_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_58749c73a2933e8e343814a4c9021c3810fd9c9fc775286e16b222890565e5e5 = $this->env->getExtension("native_profiler");
        $__internal_58749c73a2933e8e343814a4c9021c3810fd9c9fc775286e16b222890565e5e5->enter($__internal_58749c73a2933e8e343814a4c9021c3810fd9c9fc775286e16b222890565e5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_58749c73a2933e8e343814a4c9021c3810fd9c9fc775286e16b222890565e5e5->leave($__internal_58749c73a2933e8e343814a4c9021c3810fd9c9fc775286e16b222890565e5e5_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_67a14863473c7bbf9384a75ee09bbe4713869a37ed565c736d29ef4756431995 = $this->env->getExtension("native_profiler");
        $__internal_67a14863473c7bbf9384a75ee09bbe4713869a37ed565c736d29ef4756431995->enter($__internal_67a14863473c7bbf9384a75ee09bbe4713869a37ed565c736d29ef4756431995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
        
        $__internal_67a14863473c7bbf9384a75ee09bbe4713869a37ed565c736d29ef4756431995->leave($__internal_67a14863473c7bbf9384a75ee09bbe4713869a37ed565c736d29ef4756431995_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  50 => 5,  38 => 3,  31 => 1,  29 => 9,  11 => 1,);
    }
}
/* {% extends "AcmeDemoBundle::layout.html.twig" %}*/
/* */
/* {% block title "Hello " ~ name %}*/
/* */
/* {% block content %}*/
/*     <h1>Hello {{ name }}!</h1>*/
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */

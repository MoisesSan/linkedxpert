<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_99130c5de85aff66d258783c4c52f70921e6df2dc3267af3b5eb0db7b83be754 extends Twig_Template
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
        $__internal_7e8670912988af4df01cbdfdc3511d48fcc931b285961178f863d92ff72ef531 = $this->env->getExtension("native_profiler");
        $__internal_7e8670912988af4df01cbdfdc3511d48fcc931b285961178f863d92ff72ef531->enter($__internal_7e8670912988af4df01cbdfdc3511d48fcc931b285961178f863d92ff72ef531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7e8670912988af4df01cbdfdc3511d48fcc931b285961178f863d92ff72ef531->leave($__internal_7e8670912988af4df01cbdfdc3511d48fcc931b285961178f863d92ff72ef531_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

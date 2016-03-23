<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d206987731e6d72999e4703496529742e76c2c3de7bc94995c23705b27f6a398 extends Twig_Template
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
        $__internal_a068e0298562a6e21c85a2216133e10f5d52a5bdf3547d90a18ff9d0f5dbd13e = $this->env->getExtension("native_profiler");
        $__internal_a068e0298562a6e21c85a2216133e10f5d52a5bdf3547d90a18ff9d0f5dbd13e->enter($__internal_a068e0298562a6e21c85a2216133e10f5d52a5bdf3547d90a18ff9d0f5dbd13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a068e0298562a6e21c85a2216133e10f5d52a5bdf3547d90a18ff9d0f5dbd13e->leave($__internal_a068e0298562a6e21c85a2216133e10f5d52a5bdf3547d90a18ff9d0f5dbd13e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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

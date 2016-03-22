<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d6191056e544f93e863caeddaff8cfef4b3a3ff0ace11eda0334ad7a96e0226c extends Twig_Template
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
        $__internal_3367f3ef83ba11d5d235c70db8cdd697011ff5ac02fabc3e609f38fa78ae1128 = $this->env->getExtension("native_profiler");
        $__internal_3367f3ef83ba11d5d235c70db8cdd697011ff5ac02fabc3e609f38fa78ae1128->enter($__internal_3367f3ef83ba11d5d235c70db8cdd697011ff5ac02fabc3e609f38fa78ae1128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3367f3ef83ba11d5d235c70db8cdd697011ff5ac02fabc3e609f38fa78ae1128->leave($__internal_3367f3ef83ba11d5d235c70db8cdd697011ff5ac02fabc3e609f38fa78ae1128_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

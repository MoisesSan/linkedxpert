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
        $__internal_9d18c3189fd9024a54b2034efcfdfc34da6a530f6af35b86a596a2a9153a4536 = $this->env->getExtension("native_profiler");
        $__internal_9d18c3189fd9024a54b2034efcfdfc34da6a530f6af35b86a596a2a9153a4536->enter($__internal_9d18c3189fd9024a54b2034efcfdfc34da6a530f6af35b86a596a2a9153a4536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_9d18c3189fd9024a54b2034efcfdfc34da6a530f6af35b86a596a2a9153a4536->leave($__internal_9d18c3189fd9024a54b2034efcfdfc34da6a530f6af35b86a596a2a9153a4536_prof);

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

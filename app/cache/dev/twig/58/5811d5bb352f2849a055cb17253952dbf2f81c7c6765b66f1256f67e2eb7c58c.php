<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_040cef77621df8d9617bad0c21f013d84480c70495f7131e7e87b002b83f911b extends Twig_Template
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
        $__internal_fd021fea873f1e508da2d4539cbcf37915aefcd587df13cf2758037136e7b5e0 = $this->env->getExtension("native_profiler");
        $__internal_fd021fea873f1e508da2d4539cbcf37915aefcd587df13cf2758037136e7b5e0->enter($__internal_fd021fea873f1e508da2d4539cbcf37915aefcd587df13cf2758037136e7b5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_fd021fea873f1e508da2d4539cbcf37915aefcd587df13cf2758037136e7b5e0->leave($__internal_fd021fea873f1e508da2d4539cbcf37915aefcd587df13cf2758037136e7b5e0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
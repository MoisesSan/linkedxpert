<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1cc6fefbc0e6801adbf1eaa438afe191df34eff01c290539c8742ff1fef14334 extends Twig_Template
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
        $__internal_640bc68c1788c5c211aede5a4b9402c8a77448aa13f3dbfa726cf5e49056d0fb = $this->env->getExtension("native_profiler");
        $__internal_640bc68c1788c5c211aede5a4b9402c8a77448aa13f3dbfa726cf5e49056d0fb->enter($__internal_640bc68c1788c5c211aede5a4b9402c8a77448aa13f3dbfa726cf5e49056d0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_640bc68c1788c5c211aede5a4b9402c8a77448aa13f3dbfa726cf5e49056d0fb->leave($__internal_640bc68c1788c5c211aede5a4b9402c8a77448aa13f3dbfa726cf5e49056d0fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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

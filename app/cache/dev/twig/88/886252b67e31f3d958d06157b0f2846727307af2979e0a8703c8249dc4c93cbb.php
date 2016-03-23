<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a5c46efe6ba760d22152ff4d1683df3719482fea6e8dacfa19a11bd9c1fb0e15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf22ed2ef434cf6817d30efdd5245f9101f12e2a27f4f6aa386c9d1ac3de75e4 = $this->env->getExtension("native_profiler");
        $__internal_cf22ed2ef434cf6817d30efdd5245f9101f12e2a27f4f6aa386c9d1ac3de75e4->enter($__internal_cf22ed2ef434cf6817d30efdd5245f9101f12e2a27f4f6aa386c9d1ac3de75e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf22ed2ef434cf6817d30efdd5245f9101f12e2a27f4f6aa386c9d1ac3de75e4->leave($__internal_cf22ed2ef434cf6817d30efdd5245f9101f12e2a27f4f6aa386c9d1ac3de75e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb8b9e07f58b438a79f3dba604c6668a119f4298cc334a624d7d63eed6927b2d = $this->env->getExtension("native_profiler");
        $__internal_eb8b9e07f58b438a79f3dba604c6668a119f4298cc334a624d7d63eed6927b2d->enter($__internal_eb8b9e07f58b438a79f3dba604c6668a119f4298cc334a624d7d63eed6927b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eb8b9e07f58b438a79f3dba604c6668a119f4298cc334a624d7d63eed6927b2d->leave($__internal_eb8b9e07f58b438a79f3dba604c6668a119f4298cc334a624d7d63eed6927b2d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c753cff6883e552acc08ae305b454c931b25464d5977eeba2063f72df444d15e = $this->env->getExtension("native_profiler");
        $__internal_c753cff6883e552acc08ae305b454c931b25464d5977eeba2063f72df444d15e->enter($__internal_c753cff6883e552acc08ae305b454c931b25464d5977eeba2063f72df444d15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c753cff6883e552acc08ae305b454c931b25464d5977eeba2063f72df444d15e->leave($__internal_c753cff6883e552acc08ae305b454c931b25464d5977eeba2063f72df444d15e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_903b7d33497c1fb9de9717987b1cc865a25749776866e7a221b2514a73579f18 = $this->env->getExtension("native_profiler");
        $__internal_903b7d33497c1fb9de9717987b1cc865a25749776866e7a221b2514a73579f18->enter($__internal_903b7d33497c1fb9de9717987b1cc865a25749776866e7a221b2514a73579f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_903b7d33497c1fb9de9717987b1cc865a25749776866e7a221b2514a73579f18->leave($__internal_903b7d33497c1fb9de9717987b1cc865a25749776866e7a221b2514a73579f18_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

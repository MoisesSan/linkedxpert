<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_523c0aa8ead66c340cdbf1c7fb876ac442605ce20f21d47e5ea58f93b151bef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_c1773005ea889ef17b03980b48f9f5b68e355924304f9669d1bea311eec22136 = $this->env->getExtension("native_profiler");
        $__internal_c1773005ea889ef17b03980b48f9f5b68e355924304f9669d1bea311eec22136->enter($__internal_c1773005ea889ef17b03980b48f9f5b68e355924304f9669d1bea311eec22136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1773005ea889ef17b03980b48f9f5b68e355924304f9669d1bea311eec22136->leave($__internal_c1773005ea889ef17b03980b48f9f5b68e355924304f9669d1bea311eec22136_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d09b64b1e3c0f0976776abdfebaef121dce1054536d3effbb86ab24cdb7133b1 = $this->env->getExtension("native_profiler");
        $__internal_d09b64b1e3c0f0976776abdfebaef121dce1054536d3effbb86ab24cdb7133b1->enter($__internal_d09b64b1e3c0f0976776abdfebaef121dce1054536d3effbb86ab24cdb7133b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d09b64b1e3c0f0976776abdfebaef121dce1054536d3effbb86ab24cdb7133b1->leave($__internal_d09b64b1e3c0f0976776abdfebaef121dce1054536d3effbb86ab24cdb7133b1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1099fb227975fdeeb10f3bb8166971f8526c271395f11aa919dee558d518690 = $this->env->getExtension("native_profiler");
        $__internal_e1099fb227975fdeeb10f3bb8166971f8526c271395f11aa919dee558d518690->enter($__internal_e1099fb227975fdeeb10f3bb8166971f8526c271395f11aa919dee558d518690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e1099fb227975fdeeb10f3bb8166971f8526c271395f11aa919dee558d518690->leave($__internal_e1099fb227975fdeeb10f3bb8166971f8526c271395f11aa919dee558d518690_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_930eb5e432e812b0d781d698fdcbe26adf20c4e11494adad3586086924bace0a = $this->env->getExtension("native_profiler");
        $__internal_930eb5e432e812b0d781d698fdcbe26adf20c4e11494adad3586086924bace0a->enter($__internal_930eb5e432e812b0d781d698fdcbe26adf20c4e11494adad3586086924bace0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_930eb5e432e812b0d781d698fdcbe26adf20c4e11494adad3586086924bace0a->leave($__internal_930eb5e432e812b0d781d698fdcbe26adf20c4e11494adad3586086924bace0a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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

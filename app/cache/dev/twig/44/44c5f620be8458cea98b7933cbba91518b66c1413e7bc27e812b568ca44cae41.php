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
        $__internal_3eb8c8474b3e552f0cfb3c144ece93318586d146b886979e35dde460926fe77f = $this->env->getExtension("native_profiler");
        $__internal_3eb8c8474b3e552f0cfb3c144ece93318586d146b886979e35dde460926fe77f->enter($__internal_3eb8c8474b3e552f0cfb3c144ece93318586d146b886979e35dde460926fe77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eb8c8474b3e552f0cfb3c144ece93318586d146b886979e35dde460926fe77f->leave($__internal_3eb8c8474b3e552f0cfb3c144ece93318586d146b886979e35dde460926fe77f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fcc541370fc419dc21f7bdfed6d1e4757948f4767775d602d0ab2725e5b7d16c = $this->env->getExtension("native_profiler");
        $__internal_fcc541370fc419dc21f7bdfed6d1e4757948f4767775d602d0ab2725e5b7d16c->enter($__internal_fcc541370fc419dc21f7bdfed6d1e4757948f4767775d602d0ab2725e5b7d16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fcc541370fc419dc21f7bdfed6d1e4757948f4767775d602d0ab2725e5b7d16c->leave($__internal_fcc541370fc419dc21f7bdfed6d1e4757948f4767775d602d0ab2725e5b7d16c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ccfe7f0cc0b63cc065f74ac846392cf23c5b9509b51082252352ac86d9279a3 = $this->env->getExtension("native_profiler");
        $__internal_6ccfe7f0cc0b63cc065f74ac846392cf23c5b9509b51082252352ac86d9279a3->enter($__internal_6ccfe7f0cc0b63cc065f74ac846392cf23c5b9509b51082252352ac86d9279a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6ccfe7f0cc0b63cc065f74ac846392cf23c5b9509b51082252352ac86d9279a3->leave($__internal_6ccfe7f0cc0b63cc065f74ac846392cf23c5b9509b51082252352ac86d9279a3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb910a1b350b3ee0170c1c45354f1cbc218a14e77e7a838a80f7b579d00807c4 = $this->env->getExtension("native_profiler");
        $__internal_fb910a1b350b3ee0170c1c45354f1cbc218a14e77e7a838a80f7b579d00807c4->enter($__internal_fb910a1b350b3ee0170c1c45354f1cbc218a14e77e7a838a80f7b579d00807c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fb910a1b350b3ee0170c1c45354f1cbc218a14e77e7a838a80f7b579d00807c4->leave($__internal_fb910a1b350b3ee0170c1c45354f1cbc218a14e77e7a838a80f7b579d00807c4_prof);

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

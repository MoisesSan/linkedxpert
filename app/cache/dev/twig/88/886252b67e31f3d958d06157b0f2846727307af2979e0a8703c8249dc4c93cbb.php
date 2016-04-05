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
        $__internal_44d5bf8ac08d822e680dd7a571002f6808e3b68a863e4918edffb0617eebaad9 = $this->env->getExtension("native_profiler");
        $__internal_44d5bf8ac08d822e680dd7a571002f6808e3b68a863e4918edffb0617eebaad9->enter($__internal_44d5bf8ac08d822e680dd7a571002f6808e3b68a863e4918edffb0617eebaad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44d5bf8ac08d822e680dd7a571002f6808e3b68a863e4918edffb0617eebaad9->leave($__internal_44d5bf8ac08d822e680dd7a571002f6808e3b68a863e4918edffb0617eebaad9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09b163c53a87f2e188c4cc2489bac68480bbb0a6aa9ab3ac006de72c830e46ef = $this->env->getExtension("native_profiler");
        $__internal_09b163c53a87f2e188c4cc2489bac68480bbb0a6aa9ab3ac006de72c830e46ef->enter($__internal_09b163c53a87f2e188c4cc2489bac68480bbb0a6aa9ab3ac006de72c830e46ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_09b163c53a87f2e188c4cc2489bac68480bbb0a6aa9ab3ac006de72c830e46ef->leave($__internal_09b163c53a87f2e188c4cc2489bac68480bbb0a6aa9ab3ac006de72c830e46ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_07fcb53f0c60809b78462fa2b37c78b701df5bb7303460e9145fb5bad8ed89dc = $this->env->getExtension("native_profiler");
        $__internal_07fcb53f0c60809b78462fa2b37c78b701df5bb7303460e9145fb5bad8ed89dc->enter($__internal_07fcb53f0c60809b78462fa2b37c78b701df5bb7303460e9145fb5bad8ed89dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_07fcb53f0c60809b78462fa2b37c78b701df5bb7303460e9145fb5bad8ed89dc->leave($__internal_07fcb53f0c60809b78462fa2b37c78b701df5bb7303460e9145fb5bad8ed89dc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_328149284ea53c03b05b41e671c3bb7552bc0dd9efd9126895e3131394cccf8b = $this->env->getExtension("native_profiler");
        $__internal_328149284ea53c03b05b41e671c3bb7552bc0dd9efd9126895e3131394cccf8b->enter($__internal_328149284ea53c03b05b41e671c3bb7552bc0dd9efd9126895e3131394cccf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_328149284ea53c03b05b41e671c3bb7552bc0dd9efd9126895e3131394cccf8b->leave($__internal_328149284ea53c03b05b41e671c3bb7552bc0dd9efd9126895e3131394cccf8b_prof);

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

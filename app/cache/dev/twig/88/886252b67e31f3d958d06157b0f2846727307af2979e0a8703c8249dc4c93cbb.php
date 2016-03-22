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
        $__internal_6dac0c20e0c2a416e47691389e6dc1aa55c9ce7a820a6e20a4b75807d6bfa196 = $this->env->getExtension("native_profiler");
        $__internal_6dac0c20e0c2a416e47691389e6dc1aa55c9ce7a820a6e20a4b75807d6bfa196->enter($__internal_6dac0c20e0c2a416e47691389e6dc1aa55c9ce7a820a6e20a4b75807d6bfa196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dac0c20e0c2a416e47691389e6dc1aa55c9ce7a820a6e20a4b75807d6bfa196->leave($__internal_6dac0c20e0c2a416e47691389e6dc1aa55c9ce7a820a6e20a4b75807d6bfa196_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_414f9709ce8b02729eb1dc01d7e7256e65938dce3e836b3d7e0b4cd08dd13536 = $this->env->getExtension("native_profiler");
        $__internal_414f9709ce8b02729eb1dc01d7e7256e65938dce3e836b3d7e0b4cd08dd13536->enter($__internal_414f9709ce8b02729eb1dc01d7e7256e65938dce3e836b3d7e0b4cd08dd13536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_414f9709ce8b02729eb1dc01d7e7256e65938dce3e836b3d7e0b4cd08dd13536->leave($__internal_414f9709ce8b02729eb1dc01d7e7256e65938dce3e836b3d7e0b4cd08dd13536_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e59d3d4c4f55617fa9a61c8a4690f1c94d5ff76e288bfcb41392a918fbcc61b = $this->env->getExtension("native_profiler");
        $__internal_0e59d3d4c4f55617fa9a61c8a4690f1c94d5ff76e288bfcb41392a918fbcc61b->enter($__internal_0e59d3d4c4f55617fa9a61c8a4690f1c94d5ff76e288bfcb41392a918fbcc61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0e59d3d4c4f55617fa9a61c8a4690f1c94d5ff76e288bfcb41392a918fbcc61b->leave($__internal_0e59d3d4c4f55617fa9a61c8a4690f1c94d5ff76e288bfcb41392a918fbcc61b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fbdce54dbb668350cc23b88d500a29ac1c0c63212b326fb6f72ef45f27c9fde = $this->env->getExtension("native_profiler");
        $__internal_1fbdce54dbb668350cc23b88d500a29ac1c0c63212b326fb6f72ef45f27c9fde->enter($__internal_1fbdce54dbb668350cc23b88d500a29ac1c0c63212b326fb6f72ef45f27c9fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1fbdce54dbb668350cc23b88d500a29ac1c0c63212b326fb6f72ef45f27c9fde->leave($__internal_1fbdce54dbb668350cc23b88d500a29ac1c0c63212b326fb6f72ef45f27c9fde_prof);

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

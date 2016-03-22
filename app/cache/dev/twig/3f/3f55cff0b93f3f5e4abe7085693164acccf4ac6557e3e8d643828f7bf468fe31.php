<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_44575f24c629086d39e8490c8c7ecdd7aa9fa7abb6f87fb83d4374d5f99b0c18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_72164fd83058d0fd657205c1e90f48d53e028cbc222e74324f96cf1b12e389e0 = $this->env->getExtension("native_profiler");
        $__internal_72164fd83058d0fd657205c1e90f48d53e028cbc222e74324f96cf1b12e389e0->enter($__internal_72164fd83058d0fd657205c1e90f48d53e028cbc222e74324f96cf1b12e389e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72164fd83058d0fd657205c1e90f48d53e028cbc222e74324f96cf1b12e389e0->leave($__internal_72164fd83058d0fd657205c1e90f48d53e028cbc222e74324f96cf1b12e389e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2647b726ea1cb4693a39f3ea3b0158298d74057defa294ff466fa2c2f9c632b = $this->env->getExtension("native_profiler");
        $__internal_f2647b726ea1cb4693a39f3ea3b0158298d74057defa294ff466fa2c2f9c632b->enter($__internal_f2647b726ea1cb4693a39f3ea3b0158298d74057defa294ff466fa2c2f9c632b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f2647b726ea1cb4693a39f3ea3b0158298d74057defa294ff466fa2c2f9c632b->leave($__internal_f2647b726ea1cb4693a39f3ea3b0158298d74057defa294ff466fa2c2f9c632b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0a1f027883c5d7707db552c24c5fa96b6e9348fdb614d7ae1d87f2b68154e99 = $this->env->getExtension("native_profiler");
        $__internal_d0a1f027883c5d7707db552c24c5fa96b6e9348fdb614d7ae1d87f2b68154e99->enter($__internal_d0a1f027883c5d7707db552c24c5fa96b6e9348fdb614d7ae1d87f2b68154e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d0a1f027883c5d7707db552c24c5fa96b6e9348fdb614d7ae1d87f2b68154e99->leave($__internal_d0a1f027883c5d7707db552c24c5fa96b6e9348fdb614d7ae1d87f2b68154e99_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

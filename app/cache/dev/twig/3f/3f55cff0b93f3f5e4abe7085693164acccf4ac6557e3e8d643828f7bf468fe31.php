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
        $__internal_99f1d2f502e7f8517572741e948a171aebd4831891759e2f79e0aaeca358df06 = $this->env->getExtension("native_profiler");
        $__internal_99f1d2f502e7f8517572741e948a171aebd4831891759e2f79e0aaeca358df06->enter($__internal_99f1d2f502e7f8517572741e948a171aebd4831891759e2f79e0aaeca358df06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99f1d2f502e7f8517572741e948a171aebd4831891759e2f79e0aaeca358df06->leave($__internal_99f1d2f502e7f8517572741e948a171aebd4831891759e2f79e0aaeca358df06_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0155b7be2b1796d9250aa7f3f7d9b8cc87b67b5e59982aeb5c25ac7df4b19cd = $this->env->getExtension("native_profiler");
        $__internal_c0155b7be2b1796d9250aa7f3f7d9b8cc87b67b5e59982aeb5c25ac7df4b19cd->enter($__internal_c0155b7be2b1796d9250aa7f3f7d9b8cc87b67b5e59982aeb5c25ac7df4b19cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c0155b7be2b1796d9250aa7f3f7d9b8cc87b67b5e59982aeb5c25ac7df4b19cd->leave($__internal_c0155b7be2b1796d9250aa7f3f7d9b8cc87b67b5e59982aeb5c25ac7df4b19cd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9f19071e9b666149a16d598f33370a479631929930ece81198101efc1c14cfd = $this->env->getExtension("native_profiler");
        $__internal_b9f19071e9b666149a16d598f33370a479631929930ece81198101efc1c14cfd->enter($__internal_b9f19071e9b666149a16d598f33370a479631929930ece81198101efc1c14cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b9f19071e9b666149a16d598f33370a479631929930ece81198101efc1c14cfd->leave($__internal_b9f19071e9b666149a16d598f33370a479631929930ece81198101efc1c14cfd_prof);

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

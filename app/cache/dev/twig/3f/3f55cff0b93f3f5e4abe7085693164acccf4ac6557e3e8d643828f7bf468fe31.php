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
        $__internal_81514f5965fbc800d4ce91470e0ef87395bdf1e890283b51bfffd4e2e56887fd = $this->env->getExtension("native_profiler");
        $__internal_81514f5965fbc800d4ce91470e0ef87395bdf1e890283b51bfffd4e2e56887fd->enter($__internal_81514f5965fbc800d4ce91470e0ef87395bdf1e890283b51bfffd4e2e56887fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81514f5965fbc800d4ce91470e0ef87395bdf1e890283b51bfffd4e2e56887fd->leave($__internal_81514f5965fbc800d4ce91470e0ef87395bdf1e890283b51bfffd4e2e56887fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf40a3440e93695e37fb830c93f608831f9df114432502d9ad1745bf54529a99 = $this->env->getExtension("native_profiler");
        $__internal_cf40a3440e93695e37fb830c93f608831f9df114432502d9ad1745bf54529a99->enter($__internal_cf40a3440e93695e37fb830c93f608831f9df114432502d9ad1745bf54529a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cf40a3440e93695e37fb830c93f608831f9df114432502d9ad1745bf54529a99->leave($__internal_cf40a3440e93695e37fb830c93f608831f9df114432502d9ad1745bf54529a99_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_36f0c7cc7ecbe42f149c969817291db561c5919247d71bb5b4becb5a8d88fd3d = $this->env->getExtension("native_profiler");
        $__internal_36f0c7cc7ecbe42f149c969817291db561c5919247d71bb5b4becb5a8d88fd3d->enter($__internal_36f0c7cc7ecbe42f149c969817291db561c5919247d71bb5b4becb5a8d88fd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36f0c7cc7ecbe42f149c969817291db561c5919247d71bb5b4becb5a8d88fd3d->leave($__internal_36f0c7cc7ecbe42f149c969817291db561c5919247d71bb5b4becb5a8d88fd3d_prof);

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

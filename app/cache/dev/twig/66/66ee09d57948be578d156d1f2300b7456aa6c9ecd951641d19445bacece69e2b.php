<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8ad35a92f1a5014ccf1a677da553c54f62d109d21efdc639eef999dceada2ebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_45274cff4923ef6e766223f1b7a285f6e65ddefd1c7eda27e506650bd7b7b30e = $this->env->getExtension("native_profiler");
        $__internal_45274cff4923ef6e766223f1b7a285f6e65ddefd1c7eda27e506650bd7b7b30e->enter($__internal_45274cff4923ef6e766223f1b7a285f6e65ddefd1c7eda27e506650bd7b7b30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45274cff4923ef6e766223f1b7a285f6e65ddefd1c7eda27e506650bd7b7b30e->leave($__internal_45274cff4923ef6e766223f1b7a285f6e65ddefd1c7eda27e506650bd7b7b30e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e27d4d325e09ad80f5152c8c5976d6ef3b7fddbf864ce7a5b3cd09923fdd56c = $this->env->getExtension("native_profiler");
        $__internal_1e27d4d325e09ad80f5152c8c5976d6ef3b7fddbf864ce7a5b3cd09923fdd56c->enter($__internal_1e27d4d325e09ad80f5152c8c5976d6ef3b7fddbf864ce7a5b3cd09923fdd56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1e27d4d325e09ad80f5152c8c5976d6ef3b7fddbf864ce7a5b3cd09923fdd56c->leave($__internal_1e27d4d325e09ad80f5152c8c5976d6ef3b7fddbf864ce7a5b3cd09923fdd56c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_734d2914376503c809d8f5269a65337bf13a06ff6c5721e4b37d773cf1671c4d = $this->env->getExtension("native_profiler");
        $__internal_734d2914376503c809d8f5269a65337bf13a06ff6c5721e4b37d773cf1671c4d->enter($__internal_734d2914376503c809d8f5269a65337bf13a06ff6c5721e4b37d773cf1671c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_734d2914376503c809d8f5269a65337bf13a06ff6c5721e4b37d773cf1671c4d->leave($__internal_734d2914376503c809d8f5269a65337bf13a06ff6c5721e4b37d773cf1671c4d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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

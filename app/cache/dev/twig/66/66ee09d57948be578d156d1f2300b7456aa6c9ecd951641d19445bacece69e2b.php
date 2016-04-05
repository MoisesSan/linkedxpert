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
        $__internal_0e955b08c11a6ea6519104e1dc841f3efe2e5f7b2ef5053b6cc01fcb0e2b3860 = $this->env->getExtension("native_profiler");
        $__internal_0e955b08c11a6ea6519104e1dc841f3efe2e5f7b2ef5053b6cc01fcb0e2b3860->enter($__internal_0e955b08c11a6ea6519104e1dc841f3efe2e5f7b2ef5053b6cc01fcb0e2b3860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e955b08c11a6ea6519104e1dc841f3efe2e5f7b2ef5053b6cc01fcb0e2b3860->leave($__internal_0e955b08c11a6ea6519104e1dc841f3efe2e5f7b2ef5053b6cc01fcb0e2b3860_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a6145d130366c0d0178c204e64f5809563ab28d5f5e06e800026bdb9f8bd31c = $this->env->getExtension("native_profiler");
        $__internal_6a6145d130366c0d0178c204e64f5809563ab28d5f5e06e800026bdb9f8bd31c->enter($__internal_6a6145d130366c0d0178c204e64f5809563ab28d5f5e06e800026bdb9f8bd31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6a6145d130366c0d0178c204e64f5809563ab28d5f5e06e800026bdb9f8bd31c->leave($__internal_6a6145d130366c0d0178c204e64f5809563ab28d5f5e06e800026bdb9f8bd31c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a16df1da8edca964732a73b3b04a8fa6eb6b3248b3bc89b791d4100b491a44b = $this->env->getExtension("native_profiler");
        $__internal_8a16df1da8edca964732a73b3b04a8fa6eb6b3248b3bc89b791d4100b491a44b->enter($__internal_8a16df1da8edca964732a73b3b04a8fa6eb6b3248b3bc89b791d4100b491a44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8a16df1da8edca964732a73b3b04a8fa6eb6b3248b3bc89b791d4100b491a44b->leave($__internal_8a16df1da8edca964732a73b3b04a8fa6eb6b3248b3bc89b791d4100b491a44b_prof);

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

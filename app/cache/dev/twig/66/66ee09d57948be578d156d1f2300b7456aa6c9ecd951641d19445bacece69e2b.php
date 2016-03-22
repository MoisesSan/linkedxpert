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
        $__internal_79a322fcdd06b8233e9905ffe9250054a8060e95711a8be56019ff0bd6c05261 = $this->env->getExtension("native_profiler");
        $__internal_79a322fcdd06b8233e9905ffe9250054a8060e95711a8be56019ff0bd6c05261->enter($__internal_79a322fcdd06b8233e9905ffe9250054a8060e95711a8be56019ff0bd6c05261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79a322fcdd06b8233e9905ffe9250054a8060e95711a8be56019ff0bd6c05261->leave($__internal_79a322fcdd06b8233e9905ffe9250054a8060e95711a8be56019ff0bd6c05261_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7323b2b6d492484338c79321aca41f6cdacc33692f67ea6c01a1bed504b6ed4 = $this->env->getExtension("native_profiler");
        $__internal_c7323b2b6d492484338c79321aca41f6cdacc33692f67ea6c01a1bed504b6ed4->enter($__internal_c7323b2b6d492484338c79321aca41f6cdacc33692f67ea6c01a1bed504b6ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c7323b2b6d492484338c79321aca41f6cdacc33692f67ea6c01a1bed504b6ed4->leave($__internal_c7323b2b6d492484338c79321aca41f6cdacc33692f67ea6c01a1bed504b6ed4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_455f56b7fb325a582e38931ae2249d7a866f284220632264c6916d325a38c2a5 = $this->env->getExtension("native_profiler");
        $__internal_455f56b7fb325a582e38931ae2249d7a866f284220632264c6916d325a38c2a5->enter($__internal_455f56b7fb325a582e38931ae2249d7a866f284220632264c6916d325a38c2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_455f56b7fb325a582e38931ae2249d7a866f284220632264c6916d325a38c2a5->leave($__internal_455f56b7fb325a582e38931ae2249d7a866f284220632264c6916d325a38c2a5_prof);

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

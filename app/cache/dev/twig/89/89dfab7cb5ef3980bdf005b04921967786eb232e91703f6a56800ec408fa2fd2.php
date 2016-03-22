<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1e081abf78366a6f48cd333b8f750796af9edbebf4a6b32378de24c29fb0aebe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e428c370404430f686a855d146e34889c2bda383f306d895dc505afc478d415e = $this->env->getExtension("native_profiler");
        $__internal_e428c370404430f686a855d146e34889c2bda383f306d895dc505afc478d415e->enter($__internal_e428c370404430f686a855d146e34889c2bda383f306d895dc505afc478d415e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e428c370404430f686a855d146e34889c2bda383f306d895dc505afc478d415e->leave($__internal_e428c370404430f686a855d146e34889c2bda383f306d895dc505afc478d415e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2b89264d67f9b47fd000154c5ad76b9aefb35965713a15484fc62a0b5ea11c0d = $this->env->getExtension("native_profiler");
        $__internal_2b89264d67f9b47fd000154c5ad76b9aefb35965713a15484fc62a0b5ea11c0d->enter($__internal_2b89264d67f9b47fd000154c5ad76b9aefb35965713a15484fc62a0b5ea11c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2b89264d67f9b47fd000154c5ad76b9aefb35965713a15484fc62a0b5ea11c0d->leave($__internal_2b89264d67f9b47fd000154c5ad76b9aefb35965713a15484fc62a0b5ea11c0d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86be3aedf0edc068e8cfbe53a740f6f196052914726e7b68433a0f8763f815af = $this->env->getExtension("native_profiler");
        $__internal_86be3aedf0edc068e8cfbe53a740f6f196052914726e7b68433a0f8763f815af->enter($__internal_86be3aedf0edc068e8cfbe53a740f6f196052914726e7b68433a0f8763f815af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_86be3aedf0edc068e8cfbe53a740f6f196052914726e7b68433a0f8763f815af->leave($__internal_86be3aedf0edc068e8cfbe53a740f6f196052914726e7b68433a0f8763f815af_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de9b60c53076e4b8421c8e5de46a9d834ec6a2ae1026e8cab05765c841c5da12 = $this->env->getExtension("native_profiler");
        $__internal_de9b60c53076e4b8421c8e5de46a9d834ec6a2ae1026e8cab05765c841c5da12->enter($__internal_de9b60c53076e4b8421c8e5de46a9d834ec6a2ae1026e8cab05765c841c5da12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_de9b60c53076e4b8421c8e5de46a9d834ec6a2ae1026e8cab05765c841c5da12->leave($__internal_de9b60c53076e4b8421c8e5de46a9d834ec6a2ae1026e8cab05765c841c5da12_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

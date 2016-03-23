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
        $__internal_cb8da24a19980a372f315452fb5b0f74187d9eca26c4faf1340e217fe48c7fd4 = $this->env->getExtension("native_profiler");
        $__internal_cb8da24a19980a372f315452fb5b0f74187d9eca26c4faf1340e217fe48c7fd4->enter($__internal_cb8da24a19980a372f315452fb5b0f74187d9eca26c4faf1340e217fe48c7fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb8da24a19980a372f315452fb5b0f74187d9eca26c4faf1340e217fe48c7fd4->leave($__internal_cb8da24a19980a372f315452fb5b0f74187d9eca26c4faf1340e217fe48c7fd4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34f3ea48ac3e3a420909ff557d9022b29b6aa10d6d883e239b2599e2c79775b8 = $this->env->getExtension("native_profiler");
        $__internal_34f3ea48ac3e3a420909ff557d9022b29b6aa10d6d883e239b2599e2c79775b8->enter($__internal_34f3ea48ac3e3a420909ff557d9022b29b6aa10d6d883e239b2599e2c79775b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_34f3ea48ac3e3a420909ff557d9022b29b6aa10d6d883e239b2599e2c79775b8->leave($__internal_34f3ea48ac3e3a420909ff557d9022b29b6aa10d6d883e239b2599e2c79775b8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f15fc503f133c12520815dbc4053ffffa364349ad51d04bf59c8f44cc83fc756 = $this->env->getExtension("native_profiler");
        $__internal_f15fc503f133c12520815dbc4053ffffa364349ad51d04bf59c8f44cc83fc756->enter($__internal_f15fc503f133c12520815dbc4053ffffa364349ad51d04bf59c8f44cc83fc756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f15fc503f133c12520815dbc4053ffffa364349ad51d04bf59c8f44cc83fc756->leave($__internal_f15fc503f133c12520815dbc4053ffffa364349ad51d04bf59c8f44cc83fc756_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_698792ad743f81447602b8260086e2a706e9ad80659298af8fca200e6191f6c3 = $this->env->getExtension("native_profiler");
        $__internal_698792ad743f81447602b8260086e2a706e9ad80659298af8fca200e6191f6c3->enter($__internal_698792ad743f81447602b8260086e2a706e9ad80659298af8fca200e6191f6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_698792ad743f81447602b8260086e2a706e9ad80659298af8fca200e6191f6c3->leave($__internal_698792ad743f81447602b8260086e2a706e9ad80659298af8fca200e6191f6c3_prof);

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

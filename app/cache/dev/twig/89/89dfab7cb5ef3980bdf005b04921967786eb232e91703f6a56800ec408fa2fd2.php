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
        $__internal_206398c0c968563cd2f468bb961fb7f0356124e5c51d42e7bad95e58a412efd1 = $this->env->getExtension("native_profiler");
        $__internal_206398c0c968563cd2f468bb961fb7f0356124e5c51d42e7bad95e58a412efd1->enter($__internal_206398c0c968563cd2f468bb961fb7f0356124e5c51d42e7bad95e58a412efd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_206398c0c968563cd2f468bb961fb7f0356124e5c51d42e7bad95e58a412efd1->leave($__internal_206398c0c968563cd2f468bb961fb7f0356124e5c51d42e7bad95e58a412efd1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0f5a42521d4f76a18da089c527e13e0ca18b6ed12c70bae47cbeeb0edac56ad2 = $this->env->getExtension("native_profiler");
        $__internal_0f5a42521d4f76a18da089c527e13e0ca18b6ed12c70bae47cbeeb0edac56ad2->enter($__internal_0f5a42521d4f76a18da089c527e13e0ca18b6ed12c70bae47cbeeb0edac56ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0f5a42521d4f76a18da089c527e13e0ca18b6ed12c70bae47cbeeb0edac56ad2->leave($__internal_0f5a42521d4f76a18da089c527e13e0ca18b6ed12c70bae47cbeeb0edac56ad2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_195de7cd93b7372c2de8ed581790d623a3c8da91f39f6bfacaf0156cb180c59f = $this->env->getExtension("native_profiler");
        $__internal_195de7cd93b7372c2de8ed581790d623a3c8da91f39f6bfacaf0156cb180c59f->enter($__internal_195de7cd93b7372c2de8ed581790d623a3c8da91f39f6bfacaf0156cb180c59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_195de7cd93b7372c2de8ed581790d623a3c8da91f39f6bfacaf0156cb180c59f->leave($__internal_195de7cd93b7372c2de8ed581790d623a3c8da91f39f6bfacaf0156cb180c59f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e809dde8b05e677fb2542c456b6315ee286accfaa6ff3b3d30c705d6d9fcd32 = $this->env->getExtension("native_profiler");
        $__internal_2e809dde8b05e677fb2542c456b6315ee286accfaa6ff3b3d30c705d6d9fcd32->enter($__internal_2e809dde8b05e677fb2542c456b6315ee286accfaa6ff3b3d30c705d6d9fcd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2e809dde8b05e677fb2542c456b6315ee286accfaa6ff3b3d30c705d6d9fcd32->leave($__internal_2e809dde8b05e677fb2542c456b6315ee286accfaa6ff3b3d30c705d6d9fcd32_prof);

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

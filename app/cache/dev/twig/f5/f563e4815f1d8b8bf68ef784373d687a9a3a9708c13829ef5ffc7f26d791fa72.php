<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e0d9fcef4d061c52ac4907b50d78ae6bb81dd432fea8a24b8cff118e7452d63e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_ebf9304f72ef3291921c4843b70c2a928fe6533808347514b9345b53db43c556 = $this->env->getExtension("native_profiler");
        $__internal_ebf9304f72ef3291921c4843b70c2a928fe6533808347514b9345b53db43c556->enter($__internal_ebf9304f72ef3291921c4843b70c2a928fe6533808347514b9345b53db43c556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebf9304f72ef3291921c4843b70c2a928fe6533808347514b9345b53db43c556->leave($__internal_ebf9304f72ef3291921c4843b70c2a928fe6533808347514b9345b53db43c556_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0805637273cf78d14cc52368561aae04cc9d099f104b970a8c8e805777acd081 = $this->env->getExtension("native_profiler");
        $__internal_0805637273cf78d14cc52368561aae04cc9d099f104b970a8c8e805777acd081->enter($__internal_0805637273cf78d14cc52368561aae04cc9d099f104b970a8c8e805777acd081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0805637273cf78d14cc52368561aae04cc9d099f104b970a8c8e805777acd081->leave($__internal_0805637273cf78d14cc52368561aae04cc9d099f104b970a8c8e805777acd081_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bcdaa6922a7ac87330f81afbb5a73d8028097ccebd856d5b24c0d61c8eed10c8 = $this->env->getExtension("native_profiler");
        $__internal_bcdaa6922a7ac87330f81afbb5a73d8028097ccebd856d5b24c0d61c8eed10c8->enter($__internal_bcdaa6922a7ac87330f81afbb5a73d8028097ccebd856d5b24c0d61c8eed10c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bcdaa6922a7ac87330f81afbb5a73d8028097ccebd856d5b24c0d61c8eed10c8->leave($__internal_bcdaa6922a7ac87330f81afbb5a73d8028097ccebd856d5b24c0d61c8eed10c8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e0ccb5d8b1c14fc958e0ce6bb9860b79d1d0ef6a1cef06971d7731b4fec0b85 = $this->env->getExtension("native_profiler");
        $__internal_1e0ccb5d8b1c14fc958e0ce6bb9860b79d1d0ef6a1cef06971d7731b4fec0b85->enter($__internal_1e0ccb5d8b1c14fc958e0ce6bb9860b79d1d0ef6a1cef06971d7731b4fec0b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e0ccb5d8b1c14fc958e0ce6bb9860b79d1d0ef6a1cef06971d7731b4fec0b85->leave($__internal_1e0ccb5d8b1c14fc958e0ce6bb9860b79d1d0ef6a1cef06971d7731b4fec0b85_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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

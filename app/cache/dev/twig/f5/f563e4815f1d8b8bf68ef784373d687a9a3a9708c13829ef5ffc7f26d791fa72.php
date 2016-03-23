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
        $__internal_ae56e63a54991c9801ee22779d0117ac80c026272f181c23a344df4265a16c24 = $this->env->getExtension("native_profiler");
        $__internal_ae56e63a54991c9801ee22779d0117ac80c026272f181c23a344df4265a16c24->enter($__internal_ae56e63a54991c9801ee22779d0117ac80c026272f181c23a344df4265a16c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae56e63a54991c9801ee22779d0117ac80c026272f181c23a344df4265a16c24->leave($__internal_ae56e63a54991c9801ee22779d0117ac80c026272f181c23a344df4265a16c24_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b86de99218599e97fc60bb456fa953240959c87b464808a2c32e532395e1228c = $this->env->getExtension("native_profiler");
        $__internal_b86de99218599e97fc60bb456fa953240959c87b464808a2c32e532395e1228c->enter($__internal_b86de99218599e97fc60bb456fa953240959c87b464808a2c32e532395e1228c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b86de99218599e97fc60bb456fa953240959c87b464808a2c32e532395e1228c->leave($__internal_b86de99218599e97fc60bb456fa953240959c87b464808a2c32e532395e1228c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47eb435e53e86c4c85b7513414422876e340939cfdd0ed554c1f74218e20d7fb = $this->env->getExtension("native_profiler");
        $__internal_47eb435e53e86c4c85b7513414422876e340939cfdd0ed554c1f74218e20d7fb->enter($__internal_47eb435e53e86c4c85b7513414422876e340939cfdd0ed554c1f74218e20d7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_47eb435e53e86c4c85b7513414422876e340939cfdd0ed554c1f74218e20d7fb->leave($__internal_47eb435e53e86c4c85b7513414422876e340939cfdd0ed554c1f74218e20d7fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f3dbe5b2f92ad40ed3b26f01bdf0300fb2af8e42ec9d257582811251a743e39 = $this->env->getExtension("native_profiler");
        $__internal_8f3dbe5b2f92ad40ed3b26f01bdf0300fb2af8e42ec9d257582811251a743e39->enter($__internal_8f3dbe5b2f92ad40ed3b26f01bdf0300fb2af8e42ec9d257582811251a743e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8f3dbe5b2f92ad40ed3b26f01bdf0300fb2af8e42ec9d257582811251a743e39->leave($__internal_8f3dbe5b2f92ad40ed3b26f01bdf0300fb2af8e42ec9d257582811251a743e39_prof);

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

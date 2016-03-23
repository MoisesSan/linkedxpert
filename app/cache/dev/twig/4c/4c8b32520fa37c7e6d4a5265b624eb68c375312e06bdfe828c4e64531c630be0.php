<?php

/* @AcmeDemo/Secured/layout.html.twig */
class __TwigTemplate_2c48407402c4584a43aceb08de3758e3c99c14fc3edb279fd287d531736093ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "@AcmeDemo/Secured/layout.html.twig", 1);
        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53ff3b10f9d87d4827488c43907d079caad3c7186738664ca3ed2414cf365e6f = $this->env->getExtension("native_profiler");
        $__internal_53ff3b10f9d87d4827488c43907d079caad3c7186738664ca3ed2414cf365e6f->enter($__internal_53ff3b10f9d87d4827488c43907d079caad3c7186738664ca3ed2414cf365e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Secured/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53ff3b10f9d87d4827488c43907d079caad3c7186738664ca3ed2414cf365e6f->leave($__internal_53ff3b10f9d87d4827488c43907d079caad3c7186738664ca3ed2414cf365e6f_prof);

    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_8423bb48055f4c725ac4e798d1f213a694dc6e52a245603eb4f9747c90941362 = $this->env->getExtension("native_profiler");
        $__internal_8423bb48055f4c725ac4e798d1f213a694dc6e52a245603eb4f9747c90941362->enter($__internal_8423bb48055f4c725ac4e798d1f213a694dc6e52a245603eb4f9747c90941362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) ? ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_logout");
        echo "\">Logout</a></li>
";
        
        $__internal_8423bb48055f4c725ac4e798d1f213a694dc6e52a245603eb4f9747c90941362->leave($__internal_8423bb48055f4c725ac4e798d1f213a694dc6e52a245603eb4f9747c90941362_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Secured/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoBundle::layout.html.twig" %}*/
/* */
/* {% block content_header_more %}*/
/*     {{ parent() }}*/
/*     <li>logged in as <strong>{{ app.user ? app.user.username : 'Anonymous' }}</strong> - <a href="{{ path('_demo_logout') }}">Logout</a></li>*/
/* {% endblock %}*/
/* */

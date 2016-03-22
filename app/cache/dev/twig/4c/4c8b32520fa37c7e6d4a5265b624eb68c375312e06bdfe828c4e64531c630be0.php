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
        $__internal_80fbbe4c54ef90ef0cbd38a75261fa8cee3981db65be5f9503eb219779b1e365 = $this->env->getExtension("native_profiler");
        $__internal_80fbbe4c54ef90ef0cbd38a75261fa8cee3981db65be5f9503eb219779b1e365->enter($__internal_80fbbe4c54ef90ef0cbd38a75261fa8cee3981db65be5f9503eb219779b1e365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Secured/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80fbbe4c54ef90ef0cbd38a75261fa8cee3981db65be5f9503eb219779b1e365->leave($__internal_80fbbe4c54ef90ef0cbd38a75261fa8cee3981db65be5f9503eb219779b1e365_prof);

    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_9267679be956e386c27e476a1a3f02cb968df361c2516a011c38ba5b2707a517 = $this->env->getExtension("native_profiler");
        $__internal_9267679be956e386c27e476a1a3f02cb968df361c2516a011c38ba5b2707a517->enter($__internal_9267679be956e386c27e476a1a3f02cb968df361c2516a011c38ba5b2707a517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

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
        
        $__internal_9267679be956e386c27e476a1a3f02cb968df361c2516a011c38ba5b2707a517->leave($__internal_9267679be956e386c27e476a1a3f02cb968df361c2516a011c38ba5b2707a517_prof);

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

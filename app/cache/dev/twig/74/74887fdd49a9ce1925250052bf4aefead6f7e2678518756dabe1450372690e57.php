<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_d7a2765f20eb5084b812646462a11935f3ebf4ccd858c6cc7aed6c73aaca45b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Secured:layout.html.twig", 1);
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
        $__internal_43d3ea1b4e7ea15b1b00d461e69175d94bab4e0d1d514ac342b39199b74e856d = $this->env->getExtension("native_profiler");
        $__internal_43d3ea1b4e7ea15b1b00d461e69175d94bab4e0d1d514ac342b39199b74e856d->enter($__internal_43d3ea1b4e7ea15b1b00d461e69175d94bab4e0d1d514ac342b39199b74e856d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43d3ea1b4e7ea15b1b00d461e69175d94bab4e0d1d514ac342b39199b74e856d->leave($__internal_43d3ea1b4e7ea15b1b00d461e69175d94bab4e0d1d514ac342b39199b74e856d_prof);

    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_8f5da9056e88a3ef1d4b4e013d7b86b8c2aa98c4c21adf8a37269d143c7dda9f = $this->env->getExtension("native_profiler");
        $__internal_8f5da9056e88a3ef1d4b4e013d7b86b8c2aa98c4c21adf8a37269d143c7dda9f->enter($__internal_8f5da9056e88a3ef1d4b4e013d7b86b8c2aa98c4c21adf8a37269d143c7dda9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

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
        
        $__internal_8f5da9056e88a3ef1d4b4e013d7b86b8c2aa98c4c21adf8a37269d143c7dda9f->leave($__internal_8f5da9056e88a3ef1d4b4e013d7b86b8c2aa98c4c21adf8a37269d143c7dda9f_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
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

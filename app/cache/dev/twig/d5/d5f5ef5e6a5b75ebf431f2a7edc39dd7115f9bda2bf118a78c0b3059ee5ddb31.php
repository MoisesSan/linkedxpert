<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_6cb68d581ac5bae7616a4dbc268a30b53426651ba7a4915a9c559a680c337ca8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Secured:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1dd2e4400c25e2734850b6a1a702b8ad45309f54c6bbf55b01b3c96b14ea5650 = $this->env->getExtension("native_profiler");
        $__internal_1dd2e4400c25e2734850b6a1a702b8ad45309f54c6bbf55b01b3c96b14ea5650->enter($__internal_1dd2e4400c25e2734850b6a1a702b8ad45309f54c6bbf55b01b3c96b14ea5650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:login.html.twig"));

        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dd2e4400c25e2734850b6a1a702b8ad45309f54c6bbf55b01b3c96b14ea5650->leave($__internal_1dd2e4400c25e2734850b6a1a702b8ad45309f54c6bbf55b01b3c96b14ea5650_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_30716e8621f2575a90787498bd18734ec0d2d9e7ad2f409322e25e798d591d9b = $this->env->getExtension("native_profiler");
        $__internal_30716e8621f2575a90787498bd18734ec0d2d9e7ad2f409322e25e798d591d9b->enter($__internal_30716e8621f2575a90787498bd18734ec0d2d9e7ad2f409322e25e798d591d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
        
        $__internal_30716e8621f2575a90787498bd18734ec0d2d9e7ad2f409322e25e798d591d9b->leave($__internal_30716e8621f2575a90787498bd18734ec0d2d9e7ad2f409322e25e798d591d9b_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  62 => 14,  59 => 13,  53 => 11,  51 => 10,  43 => 4,  37 => 3,  30 => 1,  28 => 35,  11 => 1,);
    }
}
/* {% extends 'AcmeDemoBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">Login</h1>*/
/* */
/*     <p>*/
/*         Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>*/
/*     </p>*/
/* */
/*     {% if error %}*/
/*         <div class="error">{{ error.message }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path("_security_check") }}" method="post" id="login">*/
/*         <div>*/
/*             <label for="username">Username</label>*/
/*             <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*         </div>*/
/* */
/*         <div>*/
/*             <label for="password">Password</label>*/
/*             <input type="password" id="password" name="_password" />*/
/*         </div>*/
/* */
/*         <button type="submit" class="sf-button">*/
/*             <span class="border-l">*/
/*                 <span class="border-r">*/
/*                     <span class="btn-bg">Login</span>*/
/*                 </span>*/
/*             </span>*/
/*         </button>*/
/*     </form>*/
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */

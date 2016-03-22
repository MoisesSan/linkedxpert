<?php

/* @AcmeDemo/Secured/login.html.twig */
class __TwigTemplate_2198dafbae23dcb5ff42b3f6a2de61858425b04f88f01f55af44206c01f76a05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "@AcmeDemo/Secured/login.html.twig", 1);
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
        $__internal_130692f0d7b352b06987f50377f26c39a8e8c31283b004fc14d3e41f30ff00f2 = $this->env->getExtension("native_profiler");
        $__internal_130692f0d7b352b06987f50377f26c39a8e8c31283b004fc14d3e41f30ff00f2->enter($__internal_130692f0d7b352b06987f50377f26c39a8e8c31283b004fc14d3e41f30ff00f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Secured/login.html.twig"));

        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_130692f0d7b352b06987f50377f26c39a8e8c31283b004fc14d3e41f30ff00f2->leave($__internal_130692f0d7b352b06987f50377f26c39a8e8c31283b004fc14d3e41f30ff00f2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_441726c19a8e49602ee46812d4fc766059f1ca89945e70b051b13024d16ee85a = $this->env->getExtension("native_profiler");
        $__internal_441726c19a8e49602ee46812d4fc766059f1ca89945e70b051b13024d16ee85a->enter($__internal_441726c19a8e49602ee46812d4fc766059f1ca89945e70b051b13024d16ee85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_441726c19a8e49602ee46812d4fc766059f1ca89945e70b051b13024d16ee85a->leave($__internal_441726c19a8e49602ee46812d4fc766059f1ca89945e70b051b13024d16ee85a_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Secured/login.html.twig";
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

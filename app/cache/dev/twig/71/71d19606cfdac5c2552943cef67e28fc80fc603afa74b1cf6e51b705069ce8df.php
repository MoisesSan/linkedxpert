<?php

/* @SensioDistribution/Configurator/final.html.twig */
class __TwigTemplate_18e6e113c80413dcf39d0fc5b165138ae7fa5b1cb6424f2e3e25ee948b0e8e4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "@SensioDistribution/Configurator/final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_761c99c50d962998ce71483b2fe8214a6715f5195a51651c46533a2128dbfa7b = $this->env->getExtension("native_profiler");
        $__internal_761c99c50d962998ce71483b2fe8214a6715f5195a51651c46533a2128dbfa7b->enter($__internal_761c99c50d962998ce71483b2fe8214a6715f5195a51651c46533a2128dbfa7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_761c99c50d962998ce71483b2fe8214a6715f5195a51651c46533a2128dbfa7b->leave($__internal_761c99c50d962998ce71483b2fe8214a6715f5195a51651c46533a2128dbfa7b_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_7346e73810b623f5be3b049eb1b311e5e9fe9c2fbac4551f0da3f22da3ef8461 = $this->env->getExtension("native_profiler");
        $__internal_7346e73810b623f5be3b049eb1b311e5e9fe9c2fbac4551f0da3f22da3ef8461->enter($__internal_7346e73810b623f5be3b049eb1b311e5e9fe9c2fbac4551f0da3f22da3ef8461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_7346e73810b623f5be3b049eb1b311e5e9fe9c2fbac4551f0da3f22da3ef8461->leave($__internal_7346e73810b623f5be3b049eb1b311e5e9fe9c2fbac4551f0da3f22da3ef8461_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d158e3527a8eade2597a1520dfdf37b978537e06d5d42bcb33117f1ce67459e = $this->env->getExtension("native_profiler");
        $__internal_9d158e3527a8eade2597a1520dfdf37b978537e06d5d42bcb33117f1ce67459e->enter($__internal_9d158e3527a8eade2597a1520dfdf37b978537e06d5d42bcb33117f1ce67459e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_9d158e3527a8eade2597a1520dfdf37b978537e06d5d42bcb33117f1ce67459e->leave($__internal_9d158e3527a8eade2597a1520dfdf37b978537e06d5d42bcb33117f1ce67459e_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  85 => 19,  79 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SensioDistributionBundle::Configurator/layout.html.twig" %}*/
/* */
/* {% block content_class %}config_done{% endblock %}*/
/* {% block content %}*/
/*     <div class="step">*/
/*         <h1>Well done!</h1>*/
/*         {% if is_writable %}*/
/*         <h2>Your distribution is configured!</h2>*/
/*         {% else %}*/
/*         <h2 class="configure-error">Your distribution is almost configured but...</h2>*/
/*         {% endif %}*/
/*         <h3>*/
/*             <span>*/
/*                 {% if is_writable %}*/
/*                     Your parameters.yml file has been overwritten with these parameters (in <em>{{ yml_path }}</em>):*/
/*                 {% else %}*/
/*                     Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>{{ yml_path }}</em>:*/
/*                 {% endif %}*/
/*             </span>*/
/*         </h3>*/
/* */
/*         <textarea class="symfony-configuration">{{ parameters }}</textarea>*/
/* */
/*         {% if welcome_url %}*/
/*             <ul>*/
/*                 <li><a href="{{ welcome_url }}">Go to the Welcome page</a></li>*/
/*             </ul>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */

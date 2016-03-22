<?php

/* ::base.html.twig */
class __TwigTemplate_167580a48d44e39e55808104a01c6dc97b6e9ae807f9ec60f142b3baa80b198e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f2382dc195883069c8abca93bde6174ed5dbe027b1fd72ea9787ba34a16c8cf = $this->env->getExtension("native_profiler");
        $__internal_7f2382dc195883069c8abca93bde6174ed5dbe027b1fd72ea9787ba34a16c8cf->enter($__internal_7f2382dc195883069c8abca93bde6174ed5dbe027b1fd72ea9787ba34a16c8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7f2382dc195883069c8abca93bde6174ed5dbe027b1fd72ea9787ba34a16c8cf->leave($__internal_7f2382dc195883069c8abca93bde6174ed5dbe027b1fd72ea9787ba34a16c8cf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cd1589c6b74e3b5402fda6812350dfdf08ca6153c8d689888c855b7c4502e6a = $this->env->getExtension("native_profiler");
        $__internal_9cd1589c6b74e3b5402fda6812350dfdf08ca6153c8d689888c855b7c4502e6a->enter($__internal_9cd1589c6b74e3b5402fda6812350dfdf08ca6153c8d689888c855b7c4502e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9cd1589c6b74e3b5402fda6812350dfdf08ca6153c8d689888c855b7c4502e6a->leave($__internal_9cd1589c6b74e3b5402fda6812350dfdf08ca6153c8d689888c855b7c4502e6a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67af662fc707bc427d64b692d7feb086eb37dbef39bac84a2535a753acdf8725 = $this->env->getExtension("native_profiler");
        $__internal_67af662fc707bc427d64b692d7feb086eb37dbef39bac84a2535a753acdf8725->enter($__internal_67af662fc707bc427d64b692d7feb086eb37dbef39bac84a2535a753acdf8725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_67af662fc707bc427d64b692d7feb086eb37dbef39bac84a2535a753acdf8725->leave($__internal_67af662fc707bc427d64b692d7feb086eb37dbef39bac84a2535a753acdf8725_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_334f99668e68f0c782ec2264c9a1a1ddb5974a794d5d53f47645af50ba33ba8c = $this->env->getExtension("native_profiler");
        $__internal_334f99668e68f0c782ec2264c9a1a1ddb5974a794d5d53f47645af50ba33ba8c->enter($__internal_334f99668e68f0c782ec2264c9a1a1ddb5974a794d5d53f47645af50ba33ba8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_334f99668e68f0c782ec2264c9a1a1ddb5974a794d5d53f47645af50ba33ba8c->leave($__internal_334f99668e68f0c782ec2264c9a1a1ddb5974a794d5d53f47645af50ba33ba8c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2fc9f367cfb843c8cce647d7515bfa945783737fabd4aba6d882fe78ea028410 = $this->env->getExtension("native_profiler");
        $__internal_2fc9f367cfb843c8cce647d7515bfa945783737fabd4aba6d882fe78ea028410->enter($__internal_2fc9f367cfb843c8cce647d7515bfa945783737fabd4aba6d882fe78ea028410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2fc9f367cfb843c8cce647d7515bfa945783737fabd4aba6d882fe78ea028410->leave($__internal_2fc9f367cfb843c8cce647d7515bfa945783737fabd4aba6d882fe78ea028410_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

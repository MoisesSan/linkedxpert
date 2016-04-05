<?php

/* base.html.twig */
class __TwigTemplate_ec365018be10d3ee71b81e8ed8f410366b414fa71aec0ae88fef0f42765c1321 extends Twig_Template
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
        $__internal_e67c988cf68936bba6f528abd6916a0188ff8f1b3e3c5ad592d20d03d5be262f = $this->env->getExtension("native_profiler");
        $__internal_e67c988cf68936bba6f528abd6916a0188ff8f1b3e3c5ad592d20d03d5be262f->enter($__internal_e67c988cf68936bba6f528abd6916a0188ff8f1b3e3c5ad592d20d03d5be262f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e67c988cf68936bba6f528abd6916a0188ff8f1b3e3c5ad592d20d03d5be262f->leave($__internal_e67c988cf68936bba6f528abd6916a0188ff8f1b3e3c5ad592d20d03d5be262f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b7c41cdbabc0b11a25ced0349de6d4f2c5075c3e8da6ea9769d8bb930be66e9 = $this->env->getExtension("native_profiler");
        $__internal_2b7c41cdbabc0b11a25ced0349de6d4f2c5075c3e8da6ea9769d8bb930be66e9->enter($__internal_2b7c41cdbabc0b11a25ced0349de6d4f2c5075c3e8da6ea9769d8bb930be66e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2b7c41cdbabc0b11a25ced0349de6d4f2c5075c3e8da6ea9769d8bb930be66e9->leave($__internal_2b7c41cdbabc0b11a25ced0349de6d4f2c5075c3e8da6ea9769d8bb930be66e9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ab60a9887ceb491aa85bd8feaa7439d6d1a597e423641ddcfc6a86ac3121ac8c = $this->env->getExtension("native_profiler");
        $__internal_ab60a9887ceb491aa85bd8feaa7439d6d1a597e423641ddcfc6a86ac3121ac8c->enter($__internal_ab60a9887ceb491aa85bd8feaa7439d6d1a597e423641ddcfc6a86ac3121ac8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ab60a9887ceb491aa85bd8feaa7439d6d1a597e423641ddcfc6a86ac3121ac8c->leave($__internal_ab60a9887ceb491aa85bd8feaa7439d6d1a597e423641ddcfc6a86ac3121ac8c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a871740bc1feb5df7269a8cbfa2780e7a21df321577536129b13eb9d5769230a = $this->env->getExtension("native_profiler");
        $__internal_a871740bc1feb5df7269a8cbfa2780e7a21df321577536129b13eb9d5769230a->enter($__internal_a871740bc1feb5df7269a8cbfa2780e7a21df321577536129b13eb9d5769230a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a871740bc1feb5df7269a8cbfa2780e7a21df321577536129b13eb9d5769230a->leave($__internal_a871740bc1feb5df7269a8cbfa2780e7a21df321577536129b13eb9d5769230a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2ec6fe8d3aa9533a52da56713ec083217bc3eeed164d2c7af10c08dc826cdf2 = $this->env->getExtension("native_profiler");
        $__internal_a2ec6fe8d3aa9533a52da56713ec083217bc3eeed164d2c7af10c08dc826cdf2->enter($__internal_a2ec6fe8d3aa9533a52da56713ec083217bc3eeed164d2c7af10c08dc826cdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a2ec6fe8d3aa9533a52da56713ec083217bc3eeed164d2c7af10c08dc826cdf2->leave($__internal_a2ec6fe8d3aa9533a52da56713ec083217bc3eeed164d2c7af10c08dc826cdf2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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

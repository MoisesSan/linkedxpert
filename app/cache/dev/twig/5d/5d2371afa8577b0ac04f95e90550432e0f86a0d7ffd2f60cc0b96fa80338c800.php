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
        $__internal_30cca075e4efdd7f3185c1d9320bf3be5a2d743b09207fe6d5576e7d3a9ca678 = $this->env->getExtension("native_profiler");
        $__internal_30cca075e4efdd7f3185c1d9320bf3be5a2d743b09207fe6d5576e7d3a9ca678->enter($__internal_30cca075e4efdd7f3185c1d9320bf3be5a2d743b09207fe6d5576e7d3a9ca678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_30cca075e4efdd7f3185c1d9320bf3be5a2d743b09207fe6d5576e7d3a9ca678->leave($__internal_30cca075e4efdd7f3185c1d9320bf3be5a2d743b09207fe6d5576e7d3a9ca678_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec9d9f3163fc2689952c58324bd8649e26758a567b84984a6a331cd4b91e92a4 = $this->env->getExtension("native_profiler");
        $__internal_ec9d9f3163fc2689952c58324bd8649e26758a567b84984a6a331cd4b91e92a4->enter($__internal_ec9d9f3163fc2689952c58324bd8649e26758a567b84984a6a331cd4b91e92a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ec9d9f3163fc2689952c58324bd8649e26758a567b84984a6a331cd4b91e92a4->leave($__internal_ec9d9f3163fc2689952c58324bd8649e26758a567b84984a6a331cd4b91e92a4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_82de8cb0c170b34fbd680cc0662f7bce1e1d06abb9f573bac17009594adbae9c = $this->env->getExtension("native_profiler");
        $__internal_82de8cb0c170b34fbd680cc0662f7bce1e1d06abb9f573bac17009594adbae9c->enter($__internal_82de8cb0c170b34fbd680cc0662f7bce1e1d06abb9f573bac17009594adbae9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_82de8cb0c170b34fbd680cc0662f7bce1e1d06abb9f573bac17009594adbae9c->leave($__internal_82de8cb0c170b34fbd680cc0662f7bce1e1d06abb9f573bac17009594adbae9c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcae744a87eb40f2c691b49effe895e12cbfb7212104528af2c7541192116d31 = $this->env->getExtension("native_profiler");
        $__internal_dcae744a87eb40f2c691b49effe895e12cbfb7212104528af2c7541192116d31->enter($__internal_dcae744a87eb40f2c691b49effe895e12cbfb7212104528af2c7541192116d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dcae744a87eb40f2c691b49effe895e12cbfb7212104528af2c7541192116d31->leave($__internal_dcae744a87eb40f2c691b49effe895e12cbfb7212104528af2c7541192116d31_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c49143a13110a692421389c1379fe446180c861b4546b07be76224a900dbf80 = $this->env->getExtension("native_profiler");
        $__internal_8c49143a13110a692421389c1379fe446180c861b4546b07be76224a900dbf80->enter($__internal_8c49143a13110a692421389c1379fe446180c861b4546b07be76224a900dbf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8c49143a13110a692421389c1379fe446180c861b4546b07be76224a900dbf80->leave($__internal_8c49143a13110a692421389c1379fe446180c861b4546b07be76224a900dbf80_prof);

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

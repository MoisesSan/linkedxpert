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
        $__internal_b9ea21d34ac76cbb71c8604cf4d46ab3fcb5cf8450455ec93db9d179ad0b516e = $this->env->getExtension("native_profiler");
        $__internal_b9ea21d34ac76cbb71c8604cf4d46ab3fcb5cf8450455ec93db9d179ad0b516e->enter($__internal_b9ea21d34ac76cbb71c8604cf4d46ab3fcb5cf8450455ec93db9d179ad0b516e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b9ea21d34ac76cbb71c8604cf4d46ab3fcb5cf8450455ec93db9d179ad0b516e->leave($__internal_b9ea21d34ac76cbb71c8604cf4d46ab3fcb5cf8450455ec93db9d179ad0b516e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_463990c7255b03b1e5e28cd7b445d0d7e35f082bdd0e090239b48d8ee7b6dfef = $this->env->getExtension("native_profiler");
        $__internal_463990c7255b03b1e5e28cd7b445d0d7e35f082bdd0e090239b48d8ee7b6dfef->enter($__internal_463990c7255b03b1e5e28cd7b445d0d7e35f082bdd0e090239b48d8ee7b6dfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_463990c7255b03b1e5e28cd7b445d0d7e35f082bdd0e090239b48d8ee7b6dfef->leave($__internal_463990c7255b03b1e5e28cd7b445d0d7e35f082bdd0e090239b48d8ee7b6dfef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_12f89e0c004135ee66dbf9c857560d340ccdfa7efb92312af0c8af6a621b6ebb = $this->env->getExtension("native_profiler");
        $__internal_12f89e0c004135ee66dbf9c857560d340ccdfa7efb92312af0c8af6a621b6ebb->enter($__internal_12f89e0c004135ee66dbf9c857560d340ccdfa7efb92312af0c8af6a621b6ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_12f89e0c004135ee66dbf9c857560d340ccdfa7efb92312af0c8af6a621b6ebb->leave($__internal_12f89e0c004135ee66dbf9c857560d340ccdfa7efb92312af0c8af6a621b6ebb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f78d71e03aad9e5c7ebebb698e6eab9e962262e99cb06cd2f656aa18bff2862d = $this->env->getExtension("native_profiler");
        $__internal_f78d71e03aad9e5c7ebebb698e6eab9e962262e99cb06cd2f656aa18bff2862d->enter($__internal_f78d71e03aad9e5c7ebebb698e6eab9e962262e99cb06cd2f656aa18bff2862d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f78d71e03aad9e5c7ebebb698e6eab9e962262e99cb06cd2f656aa18bff2862d->leave($__internal_f78d71e03aad9e5c7ebebb698e6eab9e962262e99cb06cd2f656aa18bff2862d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e84c29ea6e7efbecb22778b6c9c1915a9ea734b949aa9f740b7704d0fe76ab01 = $this->env->getExtension("native_profiler");
        $__internal_e84c29ea6e7efbecb22778b6c9c1915a9ea734b949aa9f740b7704d0fe76ab01->enter($__internal_e84c29ea6e7efbecb22778b6c9c1915a9ea734b949aa9f740b7704d0fe76ab01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e84c29ea6e7efbecb22778b6c9c1915a9ea734b949aa9f740b7704d0fe76ab01->leave($__internal_e84c29ea6e7efbecb22778b6c9c1915a9ea734b949aa9f740b7704d0fe76ab01_prof);

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

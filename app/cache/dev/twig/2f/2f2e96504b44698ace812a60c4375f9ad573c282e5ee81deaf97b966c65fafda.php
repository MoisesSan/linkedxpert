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
        $__internal_28b9ed467d0ac1e203a61edfb3d720b68c4cb005e83f8a752f8562446cdd1dd0 = $this->env->getExtension("native_profiler");
        $__internal_28b9ed467d0ac1e203a61edfb3d720b68c4cb005e83f8a752f8562446cdd1dd0->enter($__internal_28b9ed467d0ac1e203a61edfb3d720b68c4cb005e83f8a752f8562446cdd1dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_28b9ed467d0ac1e203a61edfb3d720b68c4cb005e83f8a752f8562446cdd1dd0->leave($__internal_28b9ed467d0ac1e203a61edfb3d720b68c4cb005e83f8a752f8562446cdd1dd0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_26267d1d5dd142d734f4511162fa4d04481786edfaef08df048b36875773e08c = $this->env->getExtension("native_profiler");
        $__internal_26267d1d5dd142d734f4511162fa4d04481786edfaef08df048b36875773e08c->enter($__internal_26267d1d5dd142d734f4511162fa4d04481786edfaef08df048b36875773e08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_26267d1d5dd142d734f4511162fa4d04481786edfaef08df048b36875773e08c->leave($__internal_26267d1d5dd142d734f4511162fa4d04481786edfaef08df048b36875773e08c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98bf9a30325e1c1479d7241142e1452c6eb5a479827f7b439cfcdc1ef2c3fdb9 = $this->env->getExtension("native_profiler");
        $__internal_98bf9a30325e1c1479d7241142e1452c6eb5a479827f7b439cfcdc1ef2c3fdb9->enter($__internal_98bf9a30325e1c1479d7241142e1452c6eb5a479827f7b439cfcdc1ef2c3fdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_98bf9a30325e1c1479d7241142e1452c6eb5a479827f7b439cfcdc1ef2c3fdb9->leave($__internal_98bf9a30325e1c1479d7241142e1452c6eb5a479827f7b439cfcdc1ef2c3fdb9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e61c695a4f055be46471aefc7bf87f5897b58ce1c4373f36987280669b4faadb = $this->env->getExtension("native_profiler");
        $__internal_e61c695a4f055be46471aefc7bf87f5897b58ce1c4373f36987280669b4faadb->enter($__internal_e61c695a4f055be46471aefc7bf87f5897b58ce1c4373f36987280669b4faadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e61c695a4f055be46471aefc7bf87f5897b58ce1c4373f36987280669b4faadb->leave($__internal_e61c695a4f055be46471aefc7bf87f5897b58ce1c4373f36987280669b4faadb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d23bbe36ca1ae69dd579ee924cebcf43bb976ccb5413088db5e598b7ec3f8b08 = $this->env->getExtension("native_profiler");
        $__internal_d23bbe36ca1ae69dd579ee924cebcf43bb976ccb5413088db5e598b7ec3f8b08->enter($__internal_d23bbe36ca1ae69dd579ee924cebcf43bb976ccb5413088db5e598b7ec3f8b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d23bbe36ca1ae69dd579ee924cebcf43bb976ccb5413088db5e598b7ec3f8b08->leave($__internal_d23bbe36ca1ae69dd579ee924cebcf43bb976ccb5413088db5e598b7ec3f8b08_prof);

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

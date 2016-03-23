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
        $__internal_646778bfe7f5bd208c0fc5ff8ec17ce13e421e98017ff6199772716591a7f79c = $this->env->getExtension("native_profiler");
        $__internal_646778bfe7f5bd208c0fc5ff8ec17ce13e421e98017ff6199772716591a7f79c->enter($__internal_646778bfe7f5bd208c0fc5ff8ec17ce13e421e98017ff6199772716591a7f79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_646778bfe7f5bd208c0fc5ff8ec17ce13e421e98017ff6199772716591a7f79c->leave($__internal_646778bfe7f5bd208c0fc5ff8ec17ce13e421e98017ff6199772716591a7f79c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_667e648953fe839df7508adfce9accd6156d1b2db903155118068f5c2b858b20 = $this->env->getExtension("native_profiler");
        $__internal_667e648953fe839df7508adfce9accd6156d1b2db903155118068f5c2b858b20->enter($__internal_667e648953fe839df7508adfce9accd6156d1b2db903155118068f5c2b858b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_667e648953fe839df7508adfce9accd6156d1b2db903155118068f5c2b858b20->leave($__internal_667e648953fe839df7508adfce9accd6156d1b2db903155118068f5c2b858b20_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6be1ebe331db7cf85b0c70549473cf49aa7625969359ca69942c8c7016c8b721 = $this->env->getExtension("native_profiler");
        $__internal_6be1ebe331db7cf85b0c70549473cf49aa7625969359ca69942c8c7016c8b721->enter($__internal_6be1ebe331db7cf85b0c70549473cf49aa7625969359ca69942c8c7016c8b721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6be1ebe331db7cf85b0c70549473cf49aa7625969359ca69942c8c7016c8b721->leave($__internal_6be1ebe331db7cf85b0c70549473cf49aa7625969359ca69942c8c7016c8b721_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8a5f3c67d845030b5b12fabbd259ddcc6b42a2a8667433f7249f9aa3140ae53 = $this->env->getExtension("native_profiler");
        $__internal_b8a5f3c67d845030b5b12fabbd259ddcc6b42a2a8667433f7249f9aa3140ae53->enter($__internal_b8a5f3c67d845030b5b12fabbd259ddcc6b42a2a8667433f7249f9aa3140ae53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b8a5f3c67d845030b5b12fabbd259ddcc6b42a2a8667433f7249f9aa3140ae53->leave($__internal_b8a5f3c67d845030b5b12fabbd259ddcc6b42a2a8667433f7249f9aa3140ae53_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4778f063e9b8c46ce67013d7902947cebad7e2a431cb31f760a45f41a33ceafa = $this->env->getExtension("native_profiler");
        $__internal_4778f063e9b8c46ce67013d7902947cebad7e2a431cb31f760a45f41a33ceafa->enter($__internal_4778f063e9b8c46ce67013d7902947cebad7e2a431cb31f760a45f41a33ceafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4778f063e9b8c46ce67013d7902947cebad7e2a431cb31f760a45f41a33ceafa->leave($__internal_4778f063e9b8c46ce67013d7902947cebad7e2a431cb31f760a45f41a33ceafa_prof);

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

<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_c872b5971989d7449ae2de66f266f7aa8f37e3d874232b2e132cda1b963809ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c221c9236d53915e5636d64b7bd2dcd9a27ed8f8955dae0368f1df5bbb8802ad = $this->env->getExtension("native_profiler");
        $__internal_c221c9236d53915e5636d64b7bd2dcd9a27ed8f8955dae0368f1df5bbb8802ad->enter($__internal_c221c9236d53915e5636d64b7bd2dcd9a27ed8f8955dae0368f1df5bbb8802ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c221c9236d53915e5636d64b7bd2dcd9a27ed8f8955dae0368f1df5bbb8802ad->leave($__internal_c221c9236d53915e5636d64b7bd2dcd9a27ed8f8955dae0368f1df5bbb8802ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */

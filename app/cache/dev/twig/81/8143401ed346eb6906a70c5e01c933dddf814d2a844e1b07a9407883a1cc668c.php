<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6ff1ea8ba7c20237802f2795467be13ae5b68d33c2bc1afb24e209334d1f0325 extends Twig_Template
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
        $__internal_a719c73b8df1883814af5c11ba9799faf099cfebb76c2bb8935d0cc26beb087d = $this->env->getExtension("native_profiler");
        $__internal_a719c73b8df1883814af5c11ba9799faf099cfebb76c2bb8935d0cc26beb087d->enter($__internal_a719c73b8df1883814af5c11ba9799faf099cfebb76c2bb8935d0cc26beb087d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a719c73b8df1883814af5c11ba9799faf099cfebb76c2bb8935d0cc26beb087d->leave($__internal_a719c73b8df1883814af5c11ba9799faf099cfebb76c2bb8935d0cc26beb087d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e7ab774b2733c2cb06f882f04cb904ffc1e0e4e9799ecf7c4dd61a4b70d9f0de extends Twig_Template
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
        $__internal_18c5ead4ea3967cdc37dbf522f6ee60a74b90504636792fff72f355b74891e7b = $this->env->getExtension("native_profiler");
        $__internal_18c5ead4ea3967cdc37dbf522f6ee60a74b90504636792fff72f355b74891e7b->enter($__internal_18c5ead4ea3967cdc37dbf522f6ee60a74b90504636792fff72f355b74891e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_18c5ead4ea3967cdc37dbf522f6ee60a74b90504636792fff72f355b74891e7b->leave($__internal_18c5ead4ea3967cdc37dbf522f6ee60a74b90504636792fff72f355b74891e7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */

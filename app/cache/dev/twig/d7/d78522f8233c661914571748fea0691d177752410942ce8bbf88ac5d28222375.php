<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e044041b448597971a349bdc25e50b423a07c62ef4644afb9b79ab00c497104a extends Twig_Template
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
        $__internal_36fd5a48b0d97c799c77637bed1f75aab5f56e1f70869c259feebc3f7f026bce = $this->env->getExtension("native_profiler");
        $__internal_36fd5a48b0d97c799c77637bed1f75aab5f56e1f70869c259feebc3f7f026bce->enter($__internal_36fd5a48b0d97c799c77637bed1f75aab5f56e1f70869c259feebc3f7f026bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_36fd5a48b0d97c799c77637bed1f75aab5f56e1f70869c259feebc3f7f026bce->leave($__internal_36fd5a48b0d97c799c77637bed1f75aab5f56e1f70869c259feebc3f7f026bce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */

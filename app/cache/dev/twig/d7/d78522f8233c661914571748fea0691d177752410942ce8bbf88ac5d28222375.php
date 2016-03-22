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
        $__internal_e14ec2a893682e4824608d458c0645ffb4e6d6795a6bbdde441074c05e8dff6c = $this->env->getExtension("native_profiler");
        $__internal_e14ec2a893682e4824608d458c0645ffb4e6d6795a6bbdde441074c05e8dff6c->enter($__internal_e14ec2a893682e4824608d458c0645ffb4e6d6795a6bbdde441074c05e8dff6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e14ec2a893682e4824608d458c0645ffb4e6d6795a6bbdde441074c05e8dff6c->leave($__internal_e14ec2a893682e4824608d458c0645ffb4e6d6795a6bbdde441074c05e8dff6c_prof);

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

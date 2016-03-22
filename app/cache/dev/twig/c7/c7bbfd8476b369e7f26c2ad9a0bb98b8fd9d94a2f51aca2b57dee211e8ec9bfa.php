<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e8cd0846258fd2c290214d2d3221c4293662b3fc67ecacd2ac851134d57dc5e6 extends Twig_Template
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
        $__internal_2cce1cf87b7496be428c0a55844c2718d03a3458d7c220ed2656dd94443493c7 = $this->env->getExtension("native_profiler");
        $__internal_2cce1cf87b7496be428c0a55844c2718d03a3458d7c220ed2656dd94443493c7->enter($__internal_2cce1cf87b7496be428c0a55844c2718d03a3458d7c220ed2656dd94443493c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2cce1cf87b7496be428c0a55844c2718d03a3458d7c220ed2656dd94443493c7->leave($__internal_2cce1cf87b7496be428c0a55844c2718d03a3458d7c220ed2656dd94443493c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */

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
        $__internal_80dcdc92d1346105946ceb7733289361510cb628a06be28ead00f88858771dc2 = $this->env->getExtension("native_profiler");
        $__internal_80dcdc92d1346105946ceb7733289361510cb628a06be28ead00f88858771dc2->enter($__internal_80dcdc92d1346105946ceb7733289361510cb628a06be28ead00f88858771dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_80dcdc92d1346105946ceb7733289361510cb628a06be28ead00f88858771dc2->leave($__internal_80dcdc92d1346105946ceb7733289361510cb628a06be28ead00f88858771dc2_prof);

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

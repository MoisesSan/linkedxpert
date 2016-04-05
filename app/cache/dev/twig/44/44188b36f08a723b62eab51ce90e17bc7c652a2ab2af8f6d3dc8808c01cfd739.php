<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9684939739ad9bf0237e44568f377e5c49fa89441cbe18f94f0e4bc29d0033f5 extends Twig_Template
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
        $__internal_6d82c4ec16bc0f733add99d5aeacd194e3cf28c4babbb1f7a2318b6070c112f7 = $this->env->getExtension("native_profiler");
        $__internal_6d82c4ec16bc0f733add99d5aeacd194e3cf28c4babbb1f7a2318b6070c112f7->enter($__internal_6d82c4ec16bc0f733add99d5aeacd194e3cf28c4babbb1f7a2318b6070c112f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6d82c4ec16bc0f733add99d5aeacd194e3cf28c4babbb1f7a2318b6070c112f7->leave($__internal_6d82c4ec16bc0f733add99d5aeacd194e3cf28c4babbb1f7a2318b6070c112f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */

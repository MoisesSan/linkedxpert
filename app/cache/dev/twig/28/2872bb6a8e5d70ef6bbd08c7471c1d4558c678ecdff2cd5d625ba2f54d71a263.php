<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d627913d77abb27203c866ad173de5c4aa60507fa72ef03c4d5328617b327f61 extends Twig_Template
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
        $__internal_342303658a9c9cf67c29fcae183f0451e7296135d5781acf816003c3c36e6015 = $this->env->getExtension("native_profiler");
        $__internal_342303658a9c9cf67c29fcae183f0451e7296135d5781acf816003c3c36e6015->enter($__internal_342303658a9c9cf67c29fcae183f0451e7296135d5781acf816003c3c36e6015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_342303658a9c9cf67c29fcae183f0451e7296135d5781acf816003c3c36e6015->leave($__internal_342303658a9c9cf67c29fcae183f0451e7296135d5781acf816003c3c36e6015_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */

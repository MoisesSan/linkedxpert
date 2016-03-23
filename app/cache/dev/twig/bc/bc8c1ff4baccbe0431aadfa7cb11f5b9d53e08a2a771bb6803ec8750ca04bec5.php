<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f9b51c6cd055b08c9d72f774286f1419061e34d71f4b500bab52be032e4595fd extends Twig_Template
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
        $__internal_3623d76a2c917b72f11d95091324584486f6b3f634946ef23de09ee7b7e12473 = $this->env->getExtension("native_profiler");
        $__internal_3623d76a2c917b72f11d95091324584486f6b3f634946ef23de09ee7b7e12473->enter($__internal_3623d76a2c917b72f11d95091324584486f6b3f634946ef23de09ee7b7e12473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3623d76a2c917b72f11d95091324584486f6b3f634946ef23de09ee7b7e12473->leave($__internal_3623d76a2c917b72f11d95091324584486f6b3f634946ef23de09ee7b7e12473_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

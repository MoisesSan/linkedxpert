<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_149b86dc8bffe59469da62982d40c694432f48dcb34a0ec70b185b473e34c248 extends Twig_Template
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
        $__internal_e1d425d1924044a1adcabf3162b0f39f3931c4f778f7c2972ed1beaa997f7ce0 = $this->env->getExtension("native_profiler");
        $__internal_e1d425d1924044a1adcabf3162b0f39f3931c4f778f7c2972ed1beaa997f7ce0->enter($__internal_e1d425d1924044a1adcabf3162b0f39f3931c4f778f7c2972ed1beaa997f7ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e1d425d1924044a1adcabf3162b0f39f3931c4f778f7c2972ed1beaa997f7ce0->leave($__internal_e1d425d1924044a1adcabf3162b0f39f3931c4f778f7c2972ed1beaa997f7ce0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */

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
        $__internal_9c29ed095bee8aef72178b8f4f7b67ec5f03b013daa32be54a961d6d7debceb5 = $this->env->getExtension("native_profiler");
        $__internal_9c29ed095bee8aef72178b8f4f7b67ec5f03b013daa32be54a961d6d7debceb5->enter($__internal_9c29ed095bee8aef72178b8f4f7b67ec5f03b013daa32be54a961d6d7debceb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9c29ed095bee8aef72178b8f4f7b67ec5f03b013daa32be54a961d6d7debceb5->leave($__internal_9c29ed095bee8aef72178b8f4f7b67ec5f03b013daa32be54a961d6d7debceb5_prof);

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

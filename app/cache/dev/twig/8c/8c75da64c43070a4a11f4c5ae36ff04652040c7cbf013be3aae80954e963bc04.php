<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_12b71b0ac5b083e7f54f46dc62dbf7cf2fc12c107b0cf4401c6c1e1e99df2699 extends Twig_Template
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
        $__internal_0989183df9274241165a5a4ed629ecc24bd6a2a828b0bb52f2f8b2ee43827f32 = $this->env->getExtension("native_profiler");
        $__internal_0989183df9274241165a5a4ed629ecc24bd6a2a828b0bb52f2f8b2ee43827f32->enter($__internal_0989183df9274241165a5a4ed629ecc24bd6a2a828b0bb52f2f8b2ee43827f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0989183df9274241165a5a4ed629ecc24bd6a2a828b0bb52f2f8b2ee43827f32->leave($__internal_0989183df9274241165a5a4ed629ecc24bd6a2a828b0bb52f2f8b2ee43827f32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

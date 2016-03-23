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
        $__internal_06dfb2b504ebea49bbd09b013b50af1884cbdd6c44c124c1cb44405549bb293c = $this->env->getExtension("native_profiler");
        $__internal_06dfb2b504ebea49bbd09b013b50af1884cbdd6c44c124c1cb44405549bb293c->enter($__internal_06dfb2b504ebea49bbd09b013b50af1884cbdd6c44c124c1cb44405549bb293c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_06dfb2b504ebea49bbd09b013b50af1884cbdd6c44c124c1cb44405549bb293c->leave($__internal_06dfb2b504ebea49bbd09b013b50af1884cbdd6c44c124c1cb44405549bb293c_prof);

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

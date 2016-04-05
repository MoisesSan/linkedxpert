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
        $__internal_3585fef8ecb11197c62a37b040db22b69fe9fe29899d03dfe25640a50752f34d = $this->env->getExtension("native_profiler");
        $__internal_3585fef8ecb11197c62a37b040db22b69fe9fe29899d03dfe25640a50752f34d->enter($__internal_3585fef8ecb11197c62a37b040db22b69fe9fe29899d03dfe25640a50752f34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3585fef8ecb11197c62a37b040db22b69fe9fe29899d03dfe25640a50752f34d->leave($__internal_3585fef8ecb11197c62a37b040db22b69fe9fe29899d03dfe25640a50752f34d_prof);

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

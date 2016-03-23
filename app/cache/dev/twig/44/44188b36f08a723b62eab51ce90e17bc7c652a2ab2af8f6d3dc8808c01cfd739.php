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
        $__internal_97fe3f4ded9648c1c6a0eacbc5657d23834fa9526220bf9a33ed39efb3f08c08 = $this->env->getExtension("native_profiler");
        $__internal_97fe3f4ded9648c1c6a0eacbc5657d23834fa9526220bf9a33ed39efb3f08c08->enter($__internal_97fe3f4ded9648c1c6a0eacbc5657d23834fa9526220bf9a33ed39efb3f08c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_97fe3f4ded9648c1c6a0eacbc5657d23834fa9526220bf9a33ed39efb3f08c08->leave($__internal_97fe3f4ded9648c1c6a0eacbc5657d23834fa9526220bf9a33ed39efb3f08c08_prof);

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

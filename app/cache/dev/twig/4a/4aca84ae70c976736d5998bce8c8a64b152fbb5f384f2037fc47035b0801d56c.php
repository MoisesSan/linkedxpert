<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_20c6015d38afebc9f628974ae827c31fc3caca4858b61b9d51a97abdfdb3b926 extends Twig_Template
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
        $__internal_3b0222265658143b8385fc746d1e7cf8bcc4fefd272138b33e326e1313c14b60 = $this->env->getExtension("native_profiler");
        $__internal_3b0222265658143b8385fc746d1e7cf8bcc4fefd272138b33e326e1313c14b60->enter($__internal_3b0222265658143b8385fc746d1e7cf8bcc4fefd272138b33e326e1313c14b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3b0222265658143b8385fc746d1e7cf8bcc4fefd272138b33e326e1313c14b60->leave($__internal_3b0222265658143b8385fc746d1e7cf8bcc4fefd272138b33e326e1313c14b60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */

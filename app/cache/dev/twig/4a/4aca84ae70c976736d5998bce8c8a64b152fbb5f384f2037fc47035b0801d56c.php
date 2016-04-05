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
        $__internal_d98fa6455f4c5087e04caf2c5e540d27150813950bea8e42faa8a3472d36cc2b = $this->env->getExtension("native_profiler");
        $__internal_d98fa6455f4c5087e04caf2c5e540d27150813950bea8e42faa8a3472d36cc2b->enter($__internal_d98fa6455f4c5087e04caf2c5e540d27150813950bea8e42faa8a3472d36cc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d98fa6455f4c5087e04caf2c5e540d27150813950bea8e42faa8a3472d36cc2b->leave($__internal_d98fa6455f4c5087e04caf2c5e540d27150813950bea8e42faa8a3472d36cc2b_prof);

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

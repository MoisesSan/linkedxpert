<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5517b288d3a9d57b6338a94956a0da9a5d7caa3253914223de59ba90dc01985b extends Twig_Template
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
        $__internal_ab03db73c7dcddc8624f64b3a3c07e8055376f0d854afcebf0351a40f226fbfa = $this->env->getExtension("native_profiler");
        $__internal_ab03db73c7dcddc8624f64b3a3c07e8055376f0d854afcebf0351a40f226fbfa->enter($__internal_ab03db73c7dcddc8624f64b3a3c07e8055376f0d854afcebf0351a40f226fbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ab03db73c7dcddc8624f64b3a3c07e8055376f0d854afcebf0351a40f226fbfa->leave($__internal_ab03db73c7dcddc8624f64b3a3c07e8055376f0d854afcebf0351a40f226fbfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */

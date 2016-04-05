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
        $__internal_0d58dd7e80baaecbddca50cadca75e98b4fbcb220d97698950fbd07731012ddb = $this->env->getExtension("native_profiler");
        $__internal_0d58dd7e80baaecbddca50cadca75e98b4fbcb220d97698950fbd07731012ddb->enter($__internal_0d58dd7e80baaecbddca50cadca75e98b4fbcb220d97698950fbd07731012ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0d58dd7e80baaecbddca50cadca75e98b4fbcb220d97698950fbd07731012ddb->leave($__internal_0d58dd7e80baaecbddca50cadca75e98b4fbcb220d97698950fbd07731012ddb_prof);

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

<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_be70354e6b88775f27f73a226de463e3bbaba30869150128c1e5536341e10dce extends Twig_Template
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
        $__internal_8901068e7c7a024e9e4243d0ae7efa6b454ab411f907e1de138093ee8c6e6ce3 = $this->env->getExtension("native_profiler");
        $__internal_8901068e7c7a024e9e4243d0ae7efa6b454ab411f907e1de138093ee8c6e6ce3->enter($__internal_8901068e7c7a024e9e4243d0ae7efa6b454ab411f907e1de138093ee8c6e6ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8901068e7c7a024e9e4243d0ae7efa6b454ab411f907e1de138093ee8c6e6ce3->leave($__internal_8901068e7c7a024e9e4243d0ae7efa6b454ab411f907e1de138093ee8c6e6ce3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */

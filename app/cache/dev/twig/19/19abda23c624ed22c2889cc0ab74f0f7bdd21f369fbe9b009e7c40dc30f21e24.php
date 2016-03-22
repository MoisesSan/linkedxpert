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
        $__internal_1a9fe375e477b36e1582dd2d10ef5d9e7cc78ca5fde183e01869800af8129609 = $this->env->getExtension("native_profiler");
        $__internal_1a9fe375e477b36e1582dd2d10ef5d9e7cc78ca5fde183e01869800af8129609->enter($__internal_1a9fe375e477b36e1582dd2d10ef5d9e7cc78ca5fde183e01869800af8129609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1a9fe375e477b36e1582dd2d10ef5d9e7cc78ca5fde183e01869800af8129609->leave($__internal_1a9fe375e477b36e1582dd2d10ef5d9e7cc78ca5fde183e01869800af8129609_prof);

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

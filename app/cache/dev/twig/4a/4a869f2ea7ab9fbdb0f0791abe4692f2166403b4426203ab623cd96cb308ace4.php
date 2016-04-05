<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_310674d57134e39361271e61aede072e0a1c40afd7ac3534c2dc760be31187b5 extends Twig_Template
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
        $__internal_03493bb1cc17cc10cbd0af1ec67f05f3874224cffdb9c7b214330c599ce6c8e4 = $this->env->getExtension("native_profiler");
        $__internal_03493bb1cc17cc10cbd0af1ec67f05f3874224cffdb9c7b214330c599ce6c8e4->enter($__internal_03493bb1cc17cc10cbd0af1ec67f05f3874224cffdb9c7b214330c599ce6c8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_03493bb1cc17cc10cbd0af1ec67f05f3874224cffdb9c7b214330c599ce6c8e4->leave($__internal_03493bb1cc17cc10cbd0af1ec67f05f3874224cffdb9c7b214330c599ce6c8e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */

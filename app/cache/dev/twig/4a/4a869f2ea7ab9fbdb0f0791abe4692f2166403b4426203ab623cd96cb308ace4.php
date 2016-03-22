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
        $__internal_6e05f5f76451d6076698c399820042a11cba84fe73253778aeb688b9673ecbea = $this->env->getExtension("native_profiler");
        $__internal_6e05f5f76451d6076698c399820042a11cba84fe73253778aeb688b9673ecbea->enter($__internal_6e05f5f76451d6076698c399820042a11cba84fe73253778aeb688b9673ecbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6e05f5f76451d6076698c399820042a11cba84fe73253778aeb688b9673ecbea->leave($__internal_6e05f5f76451d6076698c399820042a11cba84fe73253778aeb688b9673ecbea_prof);

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

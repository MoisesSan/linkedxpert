<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_b549c5fb1f120a7c640b8713ca42de2fbbf2aceca3e082091645da8fd8cd4f10 extends Twig_Template
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
        $__internal_fe41f22ee3e996768e996fc7ac88af6a5e7d4820c5fcf1d2a9e65ba3b58f4c55 = $this->env->getExtension("native_profiler");
        $__internal_fe41f22ee3e996768e996fc7ac88af6a5e7d4820c5fcf1d2a9e65ba3b58f4c55->enter($__internal_fe41f22ee3e996768e996fc7ac88af6a5e7d4820c5fcf1d2a9e65ba3b58f4c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_fe41f22ee3e996768e996fc7ac88af6a5e7d4820c5fcf1d2a9e65ba3b58f4c55->leave($__internal_fe41f22ee3e996768e996fc7ac88af6a5e7d4820c5fcf1d2a9e65ba3b58f4c55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (false !== $label): ?>*/
/* <?php if ($required) { $label_attr['class'] = trim((isset($label_attr['class']) ? $label_attr['class'] : '').' required'); } ?>*/
/* <?php if (!$compound) { $label_attr['for'] = $id; } ?>*/
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <label <?php foreach ($label_attr as $k => $v) { printf('%s="%s" ', $view->escape($k), $view->escape($v)); } ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></label>*/
/* <?php endif ?>*/
/* */

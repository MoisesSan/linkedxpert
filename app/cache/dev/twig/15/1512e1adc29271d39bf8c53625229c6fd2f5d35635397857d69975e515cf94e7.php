<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8a07f149647033647f03c9287d97596407af94c5a383ab5e04a93fa942ba1518 extends Twig_Template
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
        $__internal_eaa2fe600ccafc6dcbadbddd31ce7bd31e2d1028fcedbf77c22f24bd6486b1f0 = $this->env->getExtension("native_profiler");
        $__internal_eaa2fe600ccafc6dcbadbddd31ce7bd31e2d1028fcedbf77c22f24bd6486b1f0->enter($__internal_eaa2fe600ccafc6dcbadbddd31ce7bd31e2d1028fcedbf77c22f24bd6486b1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_eaa2fe600ccafc6dcbadbddd31ce7bd31e2d1028fcedbf77c22f24bd6486b1f0->leave($__internal_eaa2fe600ccafc6dcbadbddd31ce7bd31e2d1028fcedbf77c22f24bd6486b1f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */

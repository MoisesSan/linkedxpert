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
        $__internal_359732b242b4a236069265d99cd3b65ac5d6096b6328dfb33ace4f3e089582a0 = $this->env->getExtension("native_profiler");
        $__internal_359732b242b4a236069265d99cd3b65ac5d6096b6328dfb33ace4f3e089582a0->enter($__internal_359732b242b4a236069265d99cd3b65ac5d6096b6328dfb33ace4f3e089582a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_359732b242b4a236069265d99cd3b65ac5d6096b6328dfb33ace4f3e089582a0->leave($__internal_359732b242b4a236069265d99cd3b65ac5d6096b6328dfb33ace4f3e089582a0_prof);

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

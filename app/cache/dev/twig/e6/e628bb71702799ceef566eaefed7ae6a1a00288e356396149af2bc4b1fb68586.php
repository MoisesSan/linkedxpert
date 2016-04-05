<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_7388f6a791190e73ec2750abf6e637e914873050d8c9c41892b12e350d6d881c extends Twig_Template
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
        $__internal_a212dda66ec29755b9f06814657084a417a38267b5127c3ae756bd7361af4891 = $this->env->getExtension("native_profiler");
        $__internal_a212dda66ec29755b9f06814657084a417a38267b5127c3ae756bd7361af4891->enter($__internal_a212dda66ec29755b9f06814657084a417a38267b5127c3ae756bd7361af4891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a212dda66ec29755b9f06814657084a417a38267b5127c3ae756bd7361af4891->leave($__internal_a212dda66ec29755b9f06814657084a417a38267b5127c3ae756bd7361af4891_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

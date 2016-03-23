<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_4277c13a1452bd05567f4fea8626cdb3e774b48bb23762b1dc7e966f689b04d1 extends Twig_Template
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
        $__internal_46515d19abe174d2c93d421cbb5b41c29fc925d9a8973e2a100626512e62900b = $this->env->getExtension("native_profiler");
        $__internal_46515d19abe174d2c93d421cbb5b41c29fc925d9a8973e2a100626512e62900b->enter($__internal_46515d19abe174d2c93d421cbb5b41c29fc925d9a8973e2a100626512e62900b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_46515d19abe174d2c93d421cbb5b41c29fc925d9a8973e2a100626512e62900b->leave($__internal_46515d19abe174d2c93d421cbb5b41c29fc925d9a8973e2a100626512e62900b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */

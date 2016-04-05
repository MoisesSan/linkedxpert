<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3860bd4bb7772066860d6b82aa58420242794f88f4f68400e20b600c1dcfe87b extends Twig_Template
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
        $__internal_2a738057a3c908da3c9161f925f409ab4de1cfcde8baea9019cf322706769e28 = $this->env->getExtension("native_profiler");
        $__internal_2a738057a3c908da3c9161f925f409ab4de1cfcde8baea9019cf322706769e28->enter($__internal_2a738057a3c908da3c9161f925f409ab4de1cfcde8baea9019cf322706769e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2a738057a3c908da3c9161f925f409ab4de1cfcde8baea9019cf322706769e28->leave($__internal_2a738057a3c908da3c9161f925f409ab4de1cfcde8baea9019cf322706769e28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

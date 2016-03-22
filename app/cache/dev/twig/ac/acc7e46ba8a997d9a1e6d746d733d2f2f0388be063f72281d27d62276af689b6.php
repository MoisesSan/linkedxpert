<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9ab09476b200433b2f7fb062d1c9954c77d9b96fa368f6a9bd70e1e2b940f510 extends Twig_Template
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
        $__internal_925cb47a0962eec01fd440d092006e0d825e3ff68d28ed2e959da655f5e25f4f = $this->env->getExtension("native_profiler");
        $__internal_925cb47a0962eec01fd440d092006e0d825e3ff68d28ed2e959da655f5e25f4f->enter($__internal_925cb47a0962eec01fd440d092006e0d825e3ff68d28ed2e959da655f5e25f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_925cb47a0962eec01fd440d092006e0d825e3ff68d28ed2e959da655f5e25f4f->leave($__internal_925cb47a0962eec01fd440d092006e0d825e3ff68d28ed2e959da655f5e25f4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

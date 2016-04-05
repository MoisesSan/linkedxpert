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
        $__internal_5a43599e6b91859ad1e8d1295a09a38fa459ad8cd713cbde6ff37329e1b8a1c0 = $this->env->getExtension("native_profiler");
        $__internal_5a43599e6b91859ad1e8d1295a09a38fa459ad8cd713cbde6ff37329e1b8a1c0->enter($__internal_5a43599e6b91859ad1e8d1295a09a38fa459ad8cd713cbde6ff37329e1b8a1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5a43599e6b91859ad1e8d1295a09a38fa459ad8cd713cbde6ff37329e1b8a1c0->leave($__internal_5a43599e6b91859ad1e8d1295a09a38fa459ad8cd713cbde6ff37329e1b8a1c0_prof);

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

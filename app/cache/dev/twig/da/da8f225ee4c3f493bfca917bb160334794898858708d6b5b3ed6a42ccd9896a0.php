<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d5a7f608c1f2a40c7709e5bf95c831a0a54e01c12e41eb4bbec7f92a4065b6fb extends Twig_Template
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
        $__internal_4cf67ca721727ba4216f63166c98534ef739ea2614ebc607dc49faa16cfede97 = $this->env->getExtension("native_profiler");
        $__internal_4cf67ca721727ba4216f63166c98534ef739ea2614ebc607dc49faa16cfede97->enter($__internal_4cf67ca721727ba4216f63166c98534ef739ea2614ebc607dc49faa16cfede97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4cf67ca721727ba4216f63166c98534ef739ea2614ebc607dc49faa16cfede97->leave($__internal_4cf67ca721727ba4216f63166c98534ef739ea2614ebc607dc49faa16cfede97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */

<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_68032102b0002d19ae92908d6de207a2a76239996b9e5bf4c144967b8e67c026 extends Twig_Template
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
        $__internal_6f60b3cc11faaf0ef713343ef617c398c7db15da3fae6a88f641148357cd4e5a = $this->env->getExtension("native_profiler");
        $__internal_6f60b3cc11faaf0ef713343ef617c398c7db15da3fae6a88f641148357cd4e5a->enter($__internal_6f60b3cc11faaf0ef713343ef617c398c7db15da3fae6a88f641148357cd4e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6f60b3cc11faaf0ef713343ef617c398c7db15da3fae6a88f641148357cd4e5a->leave($__internal_6f60b3cc11faaf0ef713343ef617c398c7db15da3fae6a88f641148357cd4e5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */

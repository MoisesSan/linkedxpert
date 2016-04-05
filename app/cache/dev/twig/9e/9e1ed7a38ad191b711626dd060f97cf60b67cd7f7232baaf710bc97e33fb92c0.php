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
        $__internal_01de4c5a810151c974253a4f0f68b2b29390c342d780bcd52e1de8f70290c15d = $this->env->getExtension("native_profiler");
        $__internal_01de4c5a810151c974253a4f0f68b2b29390c342d780bcd52e1de8f70290c15d->enter($__internal_01de4c5a810151c974253a4f0f68b2b29390c342d780bcd52e1de8f70290c15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_01de4c5a810151c974253a4f0f68b2b29390c342d780bcd52e1de8f70290c15d->leave($__internal_01de4c5a810151c974253a4f0f68b2b29390c342d780bcd52e1de8f70290c15d_prof);

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

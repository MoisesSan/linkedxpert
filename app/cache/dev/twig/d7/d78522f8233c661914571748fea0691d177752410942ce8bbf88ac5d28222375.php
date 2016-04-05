<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e044041b448597971a349bdc25e50b423a07c62ef4644afb9b79ab00c497104a extends Twig_Template
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
        $__internal_368733e95fee72b485981f5c5d885aca1884af38ada29e37a90ed0dbc5bf3165 = $this->env->getExtension("native_profiler");
        $__internal_368733e95fee72b485981f5c5d885aca1884af38ada29e37a90ed0dbc5bf3165->enter($__internal_368733e95fee72b485981f5c5d885aca1884af38ada29e37a90ed0dbc5bf3165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_368733e95fee72b485981f5c5d885aca1884af38ada29e37a90ed0dbc5bf3165->leave($__internal_368733e95fee72b485981f5c5d885aca1884af38ada29e37a90ed0dbc5bf3165_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */

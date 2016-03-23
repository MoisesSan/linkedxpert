<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0f2b4fa9cb0329280a69aaf36011bc1d59c45e6ef36bc56ebc6572ef919c6928 extends Twig_Template
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
        $__internal_65cb1a59bef97581555d88ef11e0161032368cf27287c523a06a9d16264d72c9 = $this->env->getExtension("native_profiler");
        $__internal_65cb1a59bef97581555d88ef11e0161032368cf27287c523a06a9d16264d72c9->enter($__internal_65cb1a59bef97581555d88ef11e0161032368cf27287c523a06a9d16264d72c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_65cb1a59bef97581555d88ef11e0161032368cf27287c523a06a9d16264d72c9->leave($__internal_65cb1a59bef97581555d88ef11e0161032368cf27287c523a06a9d16264d72c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */

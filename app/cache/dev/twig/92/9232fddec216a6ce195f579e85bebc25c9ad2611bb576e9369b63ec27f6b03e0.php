<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_402a0743cf1f5eec1ded157d94feb26cb2135560e9bcc3f762e4373866097bfd extends Twig_Template
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
        $__internal_63da7106745bab76db8169611c10b8d796134a923ff3aa81d8b94129a6d02963 = $this->env->getExtension("native_profiler");
        $__internal_63da7106745bab76db8169611c10b8d796134a923ff3aa81d8b94129a6d02963->enter($__internal_63da7106745bab76db8169611c10b8d796134a923ff3aa81d8b94129a6d02963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_63da7106745bab76db8169611c10b8d796134a923ff3aa81d8b94129a6d02963->leave($__internal_63da7106745bab76db8169611c10b8d796134a923ff3aa81d8b94129a6d02963_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

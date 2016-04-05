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
        $__internal_9feb99eea889e58b6b83b3903999a4c2836eb41e9b4066ae0a00e0451c7f8c2c = $this->env->getExtension("native_profiler");
        $__internal_9feb99eea889e58b6b83b3903999a4c2836eb41e9b4066ae0a00e0451c7f8c2c->enter($__internal_9feb99eea889e58b6b83b3903999a4c2836eb41e9b4066ae0a00e0451c7f8c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9feb99eea889e58b6b83b3903999a4c2836eb41e9b4066ae0a00e0451c7f8c2c->leave($__internal_9feb99eea889e58b6b83b3903999a4c2836eb41e9b4066ae0a00e0451c7f8c2c_prof);

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

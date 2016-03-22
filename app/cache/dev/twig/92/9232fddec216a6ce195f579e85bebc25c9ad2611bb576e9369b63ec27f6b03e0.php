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
        $__internal_76422fa588c4d248cc9bd3d8fed5d4ee1195d48003115b6b3928e25ab422381f = $this->env->getExtension("native_profiler");
        $__internal_76422fa588c4d248cc9bd3d8fed5d4ee1195d48003115b6b3928e25ab422381f->enter($__internal_76422fa588c4d248cc9bd3d8fed5d4ee1195d48003115b6b3928e25ab422381f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_76422fa588c4d248cc9bd3d8fed5d4ee1195d48003115b6b3928e25ab422381f->leave($__internal_76422fa588c4d248cc9bd3d8fed5d4ee1195d48003115b6b3928e25ab422381f_prof);

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

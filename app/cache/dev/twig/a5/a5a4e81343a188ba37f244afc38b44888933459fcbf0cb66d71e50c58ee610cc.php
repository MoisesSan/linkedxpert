<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_294388185cbb3e437cea5f1b04a7a807ea1e6a91d84f70d57b40204167e9d33e extends Twig_Template
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
        $__internal_8d798a1fe55d97498b99fd830ee5dfa50a0d8ee14171b0eb0c8f97c8c2f81fe7 = $this->env->getExtension("native_profiler");
        $__internal_8d798a1fe55d97498b99fd830ee5dfa50a0d8ee14171b0eb0c8f97c8c2f81fe7->enter($__internal_8d798a1fe55d97498b99fd830ee5dfa50a0d8ee14171b0eb0c8f97c8c2f81fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_8d798a1fe55d97498b99fd830ee5dfa50a0d8ee14171b0eb0c8f97c8c2f81fe7->leave($__internal_8d798a1fe55d97498b99fd830ee5dfa50a0d8ee14171b0eb0c8f97c8c2f81fe7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */

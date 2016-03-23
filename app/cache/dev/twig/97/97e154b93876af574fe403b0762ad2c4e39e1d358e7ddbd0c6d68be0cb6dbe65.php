<?php

/* @AcmeDemo/Welcome/index.html.twig */
class __TwigTemplate_d46f9b9e7868dfbe479246c9ee46796c6f0f64a3a174ac7e3ad87fcba9c49774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "@AcmeDemo/Welcome/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bd9b98b4ad5f44cc79a96e5196bd00b63766ed3af6449e6ba234a83a02319a1 = $this->env->getExtension("native_profiler");
        $__internal_4bd9b98b4ad5f44cc79a96e5196bd00b63766ed3af6449e6ba234a83a02319a1->enter($__internal_4bd9b98b4ad5f44cc79a96e5196bd00b63766ed3af6449e6ba234a83a02319a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeDemo/Welcome/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bd9b98b4ad5f44cc79a96e5196bd00b63766ed3af6449e6ba234a83a02319a1->leave($__internal_4bd9b98b4ad5f44cc79a96e5196bd00b63766ed3af6449e6ba234a83a02319a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a535d5d4c2c427f88bb27954feddd954107f2371b586c787f5d19747528b5dc5 = $this->env->getExtension("native_profiler");
        $__internal_a535d5d4c2c427f88bb27954feddd954107f2371b586c787f5d19747528b5dc5->enter($__internal_a535d5d4c2c427f88bb27954feddd954107f2371b586c787f5d19747528b5dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Welcome";
        
        $__internal_a535d5d4c2c427f88bb27954feddd954107f2371b586c787f5d19747528b5dc5->leave($__internal_a535d5d4c2c427f88bb27954feddd954107f2371b586c787f5d19747528b5dc5_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_145b25d9977b46ae19a98ed8444d80cc0caef90c6309bfc8c7c2ecc97f882a51 = $this->env->getExtension("native_profiler");
        $__internal_145b25d9977b46ae19a98ed8444d80cc0caef90c6309bfc8c7c2ecc97f882a51->enter($__internal_145b25d9977b46ae19a98ed8444d80cc0caef90c6309bfc8c7c2ecc97f882a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_145b25d9977b46ae19a98ed8444d80cc0caef90c6309bfc8c7c2ecc97f882a51->leave($__internal_145b25d9977b46ae19a98ed8444d80cc0caef90c6309bfc8c7c2ecc97f882a51_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_2634a3b33c575ab9ae91f6ca88691fce852178f77a110e0fdbbb56a0d62c6ad7 = $this->env->getExtension("native_profiler");
        $__internal_2634a3b33c575ab9ae91f6ca88691fce852178f77a110e0fdbbb56a0d62c6ad7->enter($__internal_2634a3b33c575ab9ae91f6ca88691fce852178f77a110e0fdbbb56a0d62c6ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $context["version"] = ((twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1 class=\"title\">Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/quick_tour/index.html\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Read the Quick Tour</span>
                    </span>
                </span>
            </a>
        </div>
        ";
        // line 27
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array()) == "dev")) {
            // line 28
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("_configurator_home");
            echo "\" class=\"sf-button sf-button-selected\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Configure</span>
                        </span>
                    </span>
                </a>
            </div>
        ";
        }
        // line 41
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Run The Demo</span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
        
        $__internal_2634a3b33c575ab9ae91f6ca88691fce852178f77a110e0fdbbb56a0d62c6ad7->leave($__internal_2634a3b33c575ab9ae91f6ca88691fce852178f77a110e0fdbbb56a0d62c6ad7_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeDemo/Welcome/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 79,  160 => 63,  156 => 62,  152 => 61,  148 => 60,  144 => 59,  127 => 45,  122 => 43,  118 => 41,  106 => 32,  101 => 30,  97 => 28,  95 => 27,  84 => 19,  79 => 17,  69 => 9,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AcmeDemoBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Symfony - Welcome{% endblock %}*/
/* */
/* {% block content_header '' %}*/
/* */
/* {% block content %}*/
/*     {% set version = constant('Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION') ~ '.' ~ constant('Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION')%}*/
/* */
/*     <h1 class="title">Welcome!</h1>*/
/* */
/*     <p>Congratulations! You have successfully installed a new Symfony application.</p>*/
/* */
/*     <div class="symfony-blocks-welcome">*/
/*         <div class="block-quick-tour">*/
/*             <div class="illustration">*/
/*                 <img src="{{ asset('bundles/acmedemo/images/welcome-quick-tour.gif') }}" alt="Quick tour" />*/
/*             </div>*/
/*             <a href="http://symfony.com/doc/{{ version }}/quick_tour/index.html" class="sf-button sf-button-selected">*/
/*                 <span class="border-l">*/
/*                     <span class="border-r">*/
/*                         <span class="btn-bg">Read the Quick Tour</span>*/
/*                     </span>*/
/*                 </span>*/
/*             </a>*/
/*         </div>*/
/*         {% if app.environment == 'dev' %}*/
/*             <div class="block-configure">*/
/*                 <div class="illustration">*/
/*                     <img src="{{ asset('bundles/acmedemo/images/welcome-configure.gif') }}" alt="Configure your application" />*/
/*                 </div>*/
/*                 <a href="{{ path('_configurator_home') }}" class="sf-button sf-button-selected">*/
/*                     <span class="border-l">*/
/*                         <span class="border-r">*/
/*                             <span class="btn-bg">Configure</span>*/
/*                         </span>*/
/*                     </span>*/
/*                 </a>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="block-demo">*/
/*             <div class="illustration">*/
/*                 <img src="{{ asset('bundles/acmedemo/images/welcome-demo.gif') }}" alt="Demo" />*/
/*             </div>*/
/*             <a href="{{ path('_demo') }}" class="sf-button sf-button-selected">*/
/*                 <span class="border-l">*/
/*                     <span class="border-r">*/
/*                         <span class="btn-bg">Run The Demo</span>*/
/*                     </span>*/
/*                 </span>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="symfony-blocks-help">*/
/*         <div class="block-documentation">*/
/*             <ul>*/
/*                 <li><strong>Documentation</strong></li>*/
/*                 <li><a href="http://symfony.com/doc/{{ version }}/book/index.html">The Book</a></li>*/
/*                 <li><a href="http://symfony.com/doc/{{ version }}/cookbook/index.html">The Cookbook</a></li>*/
/*                 <li><a href="http://symfony.com/doc/{{ version }}/components/index.html">The Components</a></li>*/
/*                 <li><a href="http://symfony.com/doc/{{ version }}/reference/index.html">Reference</a></li>*/
/*                 <li><a href="http://symfony.com/doc/{{ version }}/glossary.html">Glossary</a></li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="block-documentation-more">*/
/*             <ul>*/
/*                 <li><strong>Sensio</strong></li>*/
/*                 <li><a href="http://trainings.sensiolabs.com">Trainings</a></li>*/
/*                 <li><a href="http://books.sensiolabs.com">Books</a></li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="block-community">*/
/*             <ul>*/
/*                 <li><strong>Community</strong></li>*/
/*                 <li><a href="http://symfony.com/irc">IRC channel</a></li>*/
/*                 <li><a href="http://symfony.com/mailing-lists">Mailing lists</a></li>*/
/*                 <li><a href="http://forum.symfony-project.org">Forum</a></li>*/
/*                 <li><a href="http://symfony.com/doc/{{ version }}/contributing/index.html">Contributing</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

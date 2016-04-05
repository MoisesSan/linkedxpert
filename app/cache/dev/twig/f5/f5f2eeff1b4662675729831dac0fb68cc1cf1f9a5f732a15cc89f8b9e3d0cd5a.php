<?php

/* @usuarios/Default/index.html.twig */
class __TwigTemplate_d79c4c018841298ea25f4d8803932e01e5c991c7a94d76cdfd7cfa5b0c5b574a extends Twig_Template
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
        $__internal_bdd8e222dbf9669e05e1ae2dad09eef5d7978d69fd96ef202305ea074e727d09 = $this->env->getExtension("native_profiler");
        $__internal_bdd8e222dbf9669e05e1ae2dad09eef5d7978d69fd96ef202305ea074e727d09->enter($__internal_bdd8e222dbf9669e05e1ae2dad09eef5d7978d69fd96ef202305ea074e727d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@usuarios/Default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Login - Inicio de Sesion</title>
 <!-- jquery -->
<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>  

<!-- Bootstrap -->
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles-login.css"), "html", null, true);
        echo "\">
    
</head>

<body>
<div class=\"\">

    <div id=\"nct_login_container\">
        <br><br><br>
        <div class=\"row\">
            <div class=\"col-md-2 hidden-xs\">
                &nbsp;
            </div>
            <div class=\"col-md-3\">
                <h1><img src= \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/usuarios/img/LinkedXpert_gray.png"), "html", null, true);
        echo "\" class=\"center-block img-responsive\"></h1>
            </div>
            <div class=\"col-md-7 hidden-xs\">
            &nbsp;
            </div>
        </div>

        <div class=\"row\">
\t\t\t<div class=\"col-md-2 hidden-xs\">
                &nbsp;
            </div>
            <div class=\"col-md-5\">
                <span class=\"y-text-color-orange\"><strong>Bienvenido a tu Portal del Cliente</strong></span><br>
                <span>Tu herramienta de acceso para aliados tecnológicos de NC Tech,</span><br>
                <span>que abarca productos, servicios, licenciamiento, soporte y mucho más...</span>
                <p>&nbsp;</p>
                <h4 class=\"y-text-color-orange\">INICIAR SESIÓN</h4>
            </div>
\t\t\t<div class=\"col-md-5 hidden-xs\">
            &nbsp;
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-2 hidden-xs\">
                &nbsp;
            </div>
            <div class=\"col-md-5\">
                ";
        // line 58
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 59
            echo "                   <div><span class=\"y-text-color-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</span><br><br></div>
                ";
        }
        // line 61
        echo "                <input type=\"hidden\" name=\"login\" id=\"login\" value=\"auth\">
\t\t\t\t<form id=\"login_form\" action=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("usuarios_login_check");
        echo "\" method=\"post\">
\t\t\t\t<table border=\"0\" cellspacing=\"2\" cellpadding=\"2\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><label for=\"username\">Usuario:</label></td>
\t\t\t\t\t\t<td><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" /><br></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><label for=\"password\">Contraseña:</label></td>
\t\t\t\t\t\t<td><input type=\"password\" id=\"password\" name=\"_password\" /></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><label for=\"no_cerrar\">Recordar datos: </label></td>
\t\t\t\t\t\t<td><input type=\"checkbox\" id=\"no_cerrar\" name=\"_remember_me\" checked /></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td><button type=\"submit\" class=\"btn-sm btn-default\" align=\"right\" value=\"Acceder\">Entrar</button></td>
\t\t\t\t\t</tr>\t\t\t\t\t
\t\t\t\t</table>
\t\t\t\t</form>    
            </div>
\t\t\t<div class=\"col-md-5 hidden-xs\">
                &nbsp;
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-2 hidden-xs\">
                &nbsp;
            </div>\t\t
            <div class=\"col-md-5\">
\t\t\t\t<br><br>
                <p><span class=\"y-text-color-orange\">¿Ha olvidado su usuario o contraseña?</span></p>
\t\t\t\t<button type=\"button\" class=\"btn-sm btn-warning\" align=\"right\">Recuperar</button>
            </div>
            <div class=\"col-md-5 hidden-xs\">
                &nbsp;
            </div>\t\t\t
        </div>
    </div>
</div>

<div id=\"container-footer-login\" class=\"text-right\" style=\"position: fixed; bottom: 0px;\">

        <div style=\"position: relative;\">
            <canvas id=\"canvas-footer-login\" height=\"55\" width=\"1024\" style=\"width: 1159.2px; height: 50px;\">
                Your browser does not support the HTML5 canvas tag.
            </canvas>

            <a href=\"http://local.linkedxpert.com/#\"> <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/usuarios/img/logo-delcam-footer.png"), "html", null, true);
        echo "\"> </a>
            <a href=\"http://local.linkedxpert.com/#\"><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/usuarios/img/logo-sw-footer.png"), "html", null, true);
        echo "\"></a>
            <a href=\"http://local.linkedxpert.com/#\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/usuarios/img/logo-bodysystem-footer.png"), "html", null, true);
        echo "\"></a>
            <a href=\"http://local.linkedxpert.com/#\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/usuarios/img/logo-transvalor-footer.png"), "html", null, true);
        echo "\"></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href=\"https://www.facebook.com/nctech.sw\" target=\"_blank\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/usuarios/img/fb.png"), "html", null, true);
        echo "\" width=\"25\"></a>
            <a href=\"https://www.linkedin.com/company/nc-tech\" target=\"_blank\"><img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/usuarios/img/in.png"), "html", null, true);
        echo "\" width=\"25\"></a>
            <a href=\"https://www.youtube.com/c/NctechMx_Cr\" target=\"_blank\"><img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/usuarios/img/yt.png"), "html", null, true);
        echo "\" width=\"25\"></a>
            <a href=\"https://twitter.com/nctech_sw\" target=\"_blank\"><img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/usuarios/img/tw.png"), "html", null, true);
        echo "\" width=\"25\"></a>
            <a href=\"http://xpertcad.com/blog/\" target=\"_blank\"><img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/usuarios/img/blog-icono.png"), "html", null, true);
        echo "\" width=\"60\"></a>

        </div>

</div>
<script type=\"text/javascript\">

    var loginfooterCanvas = document.getElementById('canvas-footer-login');
if (loginfooterCanvas && loginfooterCanvas.getContext) {
    if (loginfooterCanvas && loginfooterCanvas.getContext) {
        var ctx = loginfooterCanvas.getContext(\"2d\");
        if(ctx){
            ctx.save();
            ctx.fillStyle=\"rgba(99,99,101,0.3)\";
            ctx.beginPath();
            ctx.moveTo(5,55);
            ctx.lineTo(1135,55);
            ctx.lineTo(1135,5);
            ctx.bezierCurveTo(1135,5,145,5,72,5);
            ctx.bezierCurveTo(21,5,15,30,5,55);
            ctx.shadowColor = 'rgba(30,30,30,0.5)';
            ctx.shadowBlur = 12;
            ctx.shadowOffsetX = -5;
            ctx.shadowOffsetY = 0;
            ctx.fill();
            ctx.restore();
        }
    }
}

   //-------------Vertically align-------------//
    function vertAlign() {
      var windowHeight = (\$(window).height())-(\$(\".head_wrapper\").outerHeight());
      var loginHeight = \$(\".nct_login_container\").outerHeight();
      \$(\".nct_login_container\").css(\"margin-top\",(windowHeight - loginHeight) / 2 + \"px\");
      \$(\".nct_login_container\").css(\"margin-bottom\",(windowHeight - loginHeight) / 2 + \"px\");
    }
    
    \$(document).ready(vertAlign);
    \$(window).load(vertAlign);
    \$(window).resize(vertAlign);\t
    
    
    //-------------Center Absolute objects-------------//
    
    function AbsoluteCenter() {
      var windowHeight = \$(window).outerHeight();
      var windowWidth = \$(window).outerWidth();
      var itemHeight = \$(\".login_box\").outerHeight();
      var itemWidth = \$(\".login_box\").outerWidth();
      \$(\".login_box\").css(\"top\",(windowHeight - itemHeight) / 2 + \"px\");
      \$(\".login_box\").css(\"left\",(windowWidth - itemWidth) / 2 + \"px\");
    }
    \$(document).ready(AbsoluteCenter);
    \$(window).load(AbsoluteCenter);
    \$(window).resize(AbsoluteCenter);
    
    //-------------Center Absolute Pop-up Overlay-------------//
    
    function popupPosition() {
      var popupY = ((\$(window).height()) - (\$(\".nct-overlay > div\").height())) / 2;
      var popupX = ((\$(window).width()) - (\$(\".nct-overlay > div\").width())) / 2;
      \$(\".nct-overlay\").height(\$(window).height());
      \$(\".nct-overlay > div\").css({\"left\": popupX + \"px\",\"top\": popupY + \"px\"});
    }
    \$(document).ready(popupPosition);
    \$(window).load(popupPosition);
    \$(window).resize(popupPosition);

    \$(document).ready(function()
    {
        try { BN_Data.ModalTemplate = \$.base64.decode('PGRpdiBjbGFzcz0ibW9kYWwgZmFkZSBibm1vZGFsd2luIiBpZD0iQk5fTW9kYWwiIHRhYmluZGV4PSItMSIgcm9sZT0iZGlhbG9nIiBhcmlhLWxhYmVsbGVkYnk9IkJOX01vZGFsTGFiZWwiIGFyaWEtaGlkZGVuPSJ0cnVlIj4NCiAgICA8ZGl2IGNsYXNzPSJtb2RhbC1kaWFsb2cgYm4tbW9kYWwiPg0KICAgICAgICA8ZGl2IGNsYXNzPSJtb2RhbC1jb250ZW50Ij4NCiAgICAgICAgICAgIDxkaXYgY2xhc3M9Im1vZGFsLWhlYWRlciI+DQogICAgICAgICAgICAgICAgPGg0IGNsYXNzPSJtb2RhbC10aXRsZSIgaWQ9IkJOX01vZGFsTGFiZWwiPlBvcmZhdm9yIGVzcGVyYTwvaDQ+DQogICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDxkaXYgY2xhc3M9Im1vZGFsLWJvZHkgY2VudGVyLWJsb2NrIj4NCiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJwcm9ncmVzcyBwcm9ncmVzcy1zdHJpcGVkIGFjdGl2ZSI+DQogICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9InByb2dyZXNzLWJhciIgcm9sZT0icHJvZ3Jlc3NiYXIiIGFyaWEtdmFsdWVub3c9Ijk5IiBhcmlhLXZhbHVlbWluPSIwIiBhcmlhLXZhbHVlbWF4PSIxMDAiIHN0eWxlPSJ3aWR0aDogMTAwJSI+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgIDwvZGl2Pg0KICAgIDwvZGl2Pg0KPC9kaXY+'); } catch(err) {}


    });
\t
</script>
</body>
</html>";
        
        $__internal_bdd8e222dbf9669e05e1ae2dad09eef5d7978d69fd96ef202305ea074e727d09->leave($__internal_bdd8e222dbf9669e05e1ae2dad09eef5d7978d69fd96ef202305ea074e727d09_prof);

    }

    public function getTemplateName()
    {
        return "@usuarios/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 120,  200 => 119,  196 => 118,  192 => 117,  188 => 116,  183 => 114,  179 => 113,  175 => 112,  171 => 111,  123 => 66,  116 => 62,  113 => 61,  107 => 59,  105 => 58,  74 => 30,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  41 => 12,  35 => 9,  31 => 8,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     */
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <title>Login - Inicio de Sesion</title>*/
/*  <!-- jquery -->*/
/* <script type="text/javascript" src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>  */
/* */
/* <!-- Bootstrap -->*/
/* <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">*/
/* <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/* <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/styles-login.css') }}">*/
/*     */
/* </head>*/
/* */
/* <body>*/
/* <div class="">*/
/* */
/*     <div id="nct_login_container">*/
/*         <br><br><br>*/
/*         <div class="row">*/
/*             <div class="col-md-2 hidden-xs">*/
/*                 &nbsp;*/
/*             </div>*/
/*             <div class="col-md-3">*/
/*                 <h1><img src= "{{ asset('bundles/usuarios/img/LinkedXpert_gray.png') }}" class="center-block img-responsive"></h1>*/
/*             </div>*/
/*             <div class="col-md-7 hidden-xs">*/
/*             &nbsp;*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/* 			<div class="col-md-2 hidden-xs">*/
/*                 &nbsp;*/
/*             </div>*/
/*             <div class="col-md-5">*/
/*                 <span class="y-text-color-orange"><strong>Bienvenido a tu Portal del Cliente</strong></span><br>*/
/*                 <span>Tu herramienta de acceso para aliados tecnológicos de NC Tech,</span><br>*/
/*                 <span>que abarca productos, servicios, licenciamiento, soporte y mucho más...</span>*/
/*                 <p>&nbsp;</p>*/
/*                 <h4 class="y-text-color-orange">INICIAR SESIÓN</h4>*/
/*             </div>*/
/* 			<div class="col-md-5 hidden-xs">*/
/*             &nbsp;*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-2 hidden-xs">*/
/*                 &nbsp;*/
/*             </div>*/
/*             <div class="col-md-5">*/
/*                 {% if error %}*/
/*                    <div><span class="y-text-color-danger">{{ error.message }}</span><br><br></div>*/
/*                 {% endif %}*/
/*                 <input type="hidden" name="login" id="login" value="auth">*/
/* 				<form id="login_form" action="{{ path('usuarios_login_check') }}" method="post">*/
/* 				<table border="0" cellspacing="2" cellpadding="2">*/
/* 					<tr>*/
/* 						<td><label for="username">Usuario:</label></td>*/
/* 						<td><input type="text" id="username" name="_username" value="{{ last_username }}" /><br></td>*/
/* 					</tr>*/
/* 					<tr>*/
/* 						<td><label for="password">Contraseña:</label></td>*/
/* 						<td><input type="password" id="password" name="_password" /></td>*/
/* 					</tr>*/
/* 					<tr>*/
/* 						<td><label for="no_cerrar">Recordar datos: </label></td>*/
/* 						<td><input type="checkbox" id="no_cerrar" name="_remember_me" checked /></td>*/
/* 					</tr>*/
/* 					<tr>*/
/* 						<td></td>*/
/* 						<td><button type="submit" class="btn-sm btn-default" align="right" value="Acceder">Entrar</button></td>*/
/* 					</tr>					*/
/* 				</table>*/
/* 				</form>    */
/*             </div>*/
/* 			<div class="col-md-5 hidden-xs">*/
/*                 &nbsp;*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-2 hidden-xs">*/
/*                 &nbsp;*/
/*             </div>		*/
/*             <div class="col-md-5">*/
/* 				<br><br>*/
/*                 <p><span class="y-text-color-orange">¿Ha olvidado su usuario o contraseña?</span></p>*/
/* 				<button type="button" class="btn-sm btn-warning" align="right">Recuperar</button>*/
/*             </div>*/
/*             <div class="col-md-5 hidden-xs">*/
/*                 &nbsp;*/
/*             </div>			*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div id="container-footer-login" class="text-right" style="position: fixed; bottom: 0px;">*/
/* */
/*         <div style="position: relative;">*/
/*             <canvas id="canvas-footer-login" height="55" width="1024" style="width: 1159.2px; height: 50px;">*/
/*                 Your browser does not support the HTML5 canvas tag.*/
/*             </canvas>*/
/* */
/*             <a href="http://local.linkedxpert.com/#"> <img src="{{ asset('bundles/usuarios/img/logo-delcam-footer.png') }}"> </a>*/
/*             <a href="http://local.linkedxpert.com/#"><img src="{{ asset('bundles/usuarios/img/logo-sw-footer.png') }}"></a>*/
/*             <a href="http://local.linkedxpert.com/#"><img src="{{ asset('bundles/usuarios/img/logo-bodysystem-footer.png') }}"></a>*/
/*             <a href="http://local.linkedxpert.com/#"><img src="{{ asset('bundles/usuarios/img/logo-transvalor-footer.png') }}"></a>*/
/*             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*             <a href="https://www.facebook.com/nctech.sw" target="_blank"><img src="{{ asset('bundles/usuarios/img/fb.png') }}" width="25"></a>*/
/*             <a href="https://www.linkedin.com/company/nc-tech" target="_blank"><img src="{{ asset('bundles/usuarios/img/in.png') }}" width="25"></a>*/
/*             <a href="https://www.youtube.com/c/NctechMx_Cr" target="_blank"><img src="{{ asset('bundles/usuarios/img/yt.png') }}" width="25"></a>*/
/*             <a href="https://twitter.com/nctech_sw" target="_blank"><img src="{{ asset('bundles/usuarios/img/tw.png') }}" width="25"></a>*/
/*             <a href="http://xpertcad.com/blog/" target="_blank"><img src="{{ asset('bundles/usuarios/img/blog-icono.png') }}" width="60"></a>*/
/* */
/*         </div>*/
/* */
/* </div>*/
/* <script type="text/javascript">*/
/* */
/*     var loginfooterCanvas = document.getElementById('canvas-footer-login');*/
/* if (loginfooterCanvas && loginfooterCanvas.getContext) {*/
/*     if (loginfooterCanvas && loginfooterCanvas.getContext) {*/
/*         var ctx = loginfooterCanvas.getContext("2d");*/
/*         if(ctx){*/
/*             ctx.save();*/
/*             ctx.fillStyle="rgba(99,99,101,0.3)";*/
/*             ctx.beginPath();*/
/*             ctx.moveTo(5,55);*/
/*             ctx.lineTo(1135,55);*/
/*             ctx.lineTo(1135,5);*/
/*             ctx.bezierCurveTo(1135,5,145,5,72,5);*/
/*             ctx.bezierCurveTo(21,5,15,30,5,55);*/
/*             ctx.shadowColor = 'rgba(30,30,30,0.5)';*/
/*             ctx.shadowBlur = 12;*/
/*             ctx.shadowOffsetX = -5;*/
/*             ctx.shadowOffsetY = 0;*/
/*             ctx.fill();*/
/*             ctx.restore();*/
/*         }*/
/*     }*/
/* }*/
/* */
/*    //-------------Vertically align-------------//*/
/*     function vertAlign() {*/
/*       var windowHeight = ($(window).height())-($(".head_wrapper").outerHeight());*/
/*       var loginHeight = $(".nct_login_container").outerHeight();*/
/*       $(".nct_login_container").css("margin-top",(windowHeight - loginHeight) / 2 + "px");*/
/*       $(".nct_login_container").css("margin-bottom",(windowHeight - loginHeight) / 2 + "px");*/
/*     }*/
/*     */
/*     $(document).ready(vertAlign);*/
/*     $(window).load(vertAlign);*/
/*     $(window).resize(vertAlign);	*/
/*     */
/*     */
/*     //-------------Center Absolute objects-------------//*/
/*     */
/*     function AbsoluteCenter() {*/
/*       var windowHeight = $(window).outerHeight();*/
/*       var windowWidth = $(window).outerWidth();*/
/*       var itemHeight = $(".login_box").outerHeight();*/
/*       var itemWidth = $(".login_box").outerWidth();*/
/*       $(".login_box").css("top",(windowHeight - itemHeight) / 2 + "px");*/
/*       $(".login_box").css("left",(windowWidth - itemWidth) / 2 + "px");*/
/*     }*/
/*     $(document).ready(AbsoluteCenter);*/
/*     $(window).load(AbsoluteCenter);*/
/*     $(window).resize(AbsoluteCenter);*/
/*     */
/*     //-------------Center Absolute Pop-up Overlay-------------//*/
/*     */
/*     function popupPosition() {*/
/*       var popupY = (($(window).height()) - ($(".nct-overlay > div").height())) / 2;*/
/*       var popupX = (($(window).width()) - ($(".nct-overlay > div").width())) / 2;*/
/*       $(".nct-overlay").height($(window).height());*/
/*       $(".nct-overlay > div").css({"left": popupX + "px","top": popupY + "px"});*/
/*     }*/
/*     $(document).ready(popupPosition);*/
/*     $(window).load(popupPosition);*/
/*     $(window).resize(popupPosition);*/
/* */
/*     $(document).ready(function()*/
/*     {*/
/*         try { BN_Data.ModalTemplate = $.base64.decode('PGRpdiBjbGFzcz0ibW9kYWwgZmFkZSBibm1vZGFsd2luIiBpZD0iQk5fTW9kYWwiIHRhYmluZGV4PSItMSIgcm9sZT0iZGlhbG9nIiBhcmlhLWxhYmVsbGVkYnk9IkJOX01vZGFsTGFiZWwiIGFyaWEtaGlkZGVuPSJ0cnVlIj4NCiAgICA8ZGl2IGNsYXNzPSJtb2RhbC1kaWFsb2cgYm4tbW9kYWwiPg0KICAgICAgICA8ZGl2IGNsYXNzPSJtb2RhbC1jb250ZW50Ij4NCiAgICAgICAgICAgIDxkaXYgY2xhc3M9Im1vZGFsLWhlYWRlciI+DQogICAgICAgICAgICAgICAgPGg0IGNsYXNzPSJtb2RhbC10aXRsZSIgaWQ9IkJOX01vZGFsTGFiZWwiPlBvcmZhdm9yIGVzcGVyYTwvaDQ+DQogICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDxkaXYgY2xhc3M9Im1vZGFsLWJvZHkgY2VudGVyLWJsb2NrIj4NCiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJwcm9ncmVzcyBwcm9ncmVzcy1zdHJpcGVkIGFjdGl2ZSI+DQogICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9InByb2dyZXNzLWJhciIgcm9sZT0icHJvZ3Jlc3NiYXIiIGFyaWEtdmFsdWVub3c9Ijk5IiBhcmlhLXZhbHVlbWluPSIwIiBhcmlhLXZhbHVlbWF4PSIxMDAiIHN0eWxlPSJ3aWR0aDogMTAwJSI+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgIDwvZGl2Pg0KICAgIDwvZGl2Pg0KPC9kaXY+'); } catch(err) {}*/
/* */
/* */
/*     });*/
/* 	*/
/* </script>*/
/* </body>*/
/* </html>*/

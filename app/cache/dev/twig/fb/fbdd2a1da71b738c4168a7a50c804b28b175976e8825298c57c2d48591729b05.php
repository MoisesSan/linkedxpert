<?php

/* @fe/Default/index.html.twig */
class __TwigTemplate_8bdcd01b5da3d10526ee91984254117ed026bea5c47f687fa9672c41dbd442d5 extends Twig_Template
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
        $__internal_8a4660aae545d0ff82d1a8507a893b5231dec2342f6a2e07ae50d1bd79b9874c = $this->env->getExtension("native_profiler");
        $__internal_8a4660aae545d0ff82d1a8507a893b5231dec2342f6a2e07ae50d1bd79b9874c->enter($__internal_8a4660aae545d0ff82d1a8507a893b5231dec2342f6a2e07ae50d1bd79b9874c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@fe/Default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
      
\t  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  \t  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>Inicio - LinkedXpert</title>
 
 <!-- jquery -->
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>  

<!-- Bootstrap -->
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  </head>
  
  <body id=\"body\">
      <div class=\"quick-access\">
          <div class=\"link-home\">
              <a href=\"\" title=\"Inicio\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fe/img/lx_favicon_white.png"), "html", null, true);
        echo "\" width=\"25\"></a>
          </div>
          <ul class=\"social-media\">
              <li><a href=\"https://www.facebook.com/nctech.sw\" target=\"_blank\" alt=\"Facebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
              <li><a href=\"https://twitter.com/nctech_sw\" target=\"_blank\" alt=\"Twitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
              <li><a href=\"https://www.linkedin.com/company/nc-tech\" target=\"_blank\" alt=\"link\" title=\"linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
              <li><a href=\"https://www.youtube.com/c/NctechMx_Cr\" target=\"_blank\" alt=\"Youtube\" title=\"Youtube\"><i class=\"fa fa-youtube\"></i></a></li>
          </ul>
          <div class=\"link-chat\">
              <a href=\"http://local.linkedxpert.com/#\" title=\"chat\">Chat</a>
          </div>
      </div>

      <div class=\"container\">
          <div class=\"row bg-head-main\">
              <div class=\"col-xs-12 col-sm-3 col-md-3 y-head-logo\" style=\"position: relative;\">
                  <a href=\"\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fe/img/lx_logo_white.png"), "html", null, true);
        echo "\" style=\"margin: 15px 0 10px 20%;\"></a>
              </div>
              <div class=\"col-xs-12 col-sm-9 col-md-9 y-head-menu\" style=\"position: relative;\">

                  <nav class=\"navbar navbar-default\" role=\"navigation\">
                      <div class=\"container-fluid\">
                          <div class=\"row\">
                              <div class=\"collapse navbar-collapse\" id=\"navbar-main\">

                                  <ul class=\"nav navbar-nav navbar-right\">
                                      <li class=\"dropdown\">
                                          <a href=\"http://local.linkedxpert.com/#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Bienvenido,  &nbsp;<i class=\"fa fa-chevron-circle-down\"></i></a>
                                          <ul class=\"dropdown-menu\">
                                              <li><a href=\"http://local.linkedxpert.com/admin/mi-cuenta/\"><i class=\"fa fa-user\"></i> Mi Cuenta</a></li>
                                              <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("usuarios_logout");
        echo "\"><i class=\"fa fa-sign-out\"></i> Cerrar sesion</a></li>
                                          </ul>
                                      </li>
                                  </ul>

                              </div>
                          </div>
                      </div>
                  </nav>

              </div>
          </div>

          <div class=\"row bg-head-breadcrums\">
              <div class=\"col-xs-12 col-sm-12 col-md-12\">
                  <ul class=\"breadcrumb\">
                                        </ul>
              </div>

          </div>
      </div>
    
      <div class=\"container\">
        <div class=\"col-xs-12 col-sm-12 col-md-12\">
    <div class=\"y-title-page\">
        <h3>Cliente: XXX</h3>
        <span class=\"divider-inner\"></span>
    </div>
</div>
<div class=\"col-xs-12 col-sm-12 col-md-12\">
    <div class=\"y-subtitle-page\">
        <h5>Bienvenidos a LinkedXpert <span class=\"small\">®</span>, la comunidad de Clientes de NC Tech <span class=\"small\">®</span></h5>
    </div>
</div>

<div class=\"col-xs-12 col-sm-8 col-md-8\">
    <div class=\"pane-hexagon\">
        <div class=\"row row-hexagon\">
            <div class=\"col-xs-4 col-sm-4 col-md-4\" style=\"height: 225px;\"><a href=\"\" class=\"block-hexagon bh1\" style=\"height: 225px;\"></a></div>
            <div class=\"col-xs-4 col-sm-4 col-md-4\" style=\"height: 225px;\"><a href=\"http://local.linkedxpert.com/xpertcad/\" class=\"block-hexagon bh2\" style=\"height: 225px;\"></a></div>
            <div class=\"col-xs-4 col-sm-4 col-md-4\" style=\"height: 225px;\"><a href=\"\" class=\"block-hexagon bh3\" style=\"height: 225px;\"></a></div>
        </div>
        <div class=\" row row-hexagon\">
            <div class=\"col-xs-4 col-sm-4 col-md-4\" style=\"height: 225px;\"><a href=\"\" class=\"block-hexagon bh0\" style=\"height: 225px;\"></a></div>
            <div class=\"col-xs-4 col-sm-4 col-md-4\" style=\"height: 225px;\"><a href=\"\" class=\"block-hexagon bh5\" style=\"height: 225px;\"></a></div>
            <div class=\"col-xs-4 col-sm-4 col-md-4\" style=\"height: 225px;\"><a href=\"\" class=\"block-hexagon bh0\" style=\"height: 225px;\"></a></div>
        </div>
        <div class=\"row row-hexagon\">
            <div class=\"col-xs-4 col-sm-4 col-md-4\" style=\"height: 225px;\"><a href=\"http://my.solidworks.com/\" target=\"_blank\" class=\"block-hexagon bh7\" style=\"height: 225px;\"></a></div>
            <div class=\"col-xs-4 col-sm-4 col-md-4\" style=\"height: 225px;\"><a href=\"http://local.linkedxpert.com/soporte/\" class=\"block-hexagon bh8\" style=\"height: 225px;\"></a></div>
            <div class=\"col-xs-4 col-sm-4 col-md-4\" style=\"height: 225px;\"><a href=\"\" class=\"block-hexagon bh9\" style=\"height: 225px;\"></a></div>
        </div>
    </div>
</div>
<div class=\"col-xs-12 col-sm-4 col-md-4\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12\">
            <div class=\"section-next-events\">
                <h3>EVENTOS</h3>
                <div class=\"single-event\">
                    <div class=\"col-xs-2 col-sm-3 col-md-3\">
                        <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fe/img/sw_2016.png"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Lanzamiento SolidWorks 2016\">
                    </div>
                    <div class=\"col-xs-9 col-sm-9 col-md-9\">
                        <span class=\"title\">Lanzamiento SolidWorks 2016</span>
                        <span class=\"date\"><i class=\"fa fa-calendar\"></i> &nbsp;Oct 08, 2015</span>
                        <span class=\"time\"><i class=\"fa fa-clock-o\"></i> &nbsp;17:30 - 20:30 Hrs</span>
                        <span class=\"place\"><i class=\"fa fa-map-marker\"></i> &nbsp;Crowne Plaza, Querétaro</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12\">
            <div class=\"section-help-chat\">
                <a href=\"http://local.linkedxpert.com/#\"><span class=\"b-chat\">Chat</span> ATENCIÓN A CLIENTES</a>
                <a href=\"http://local.linkedxpert.com/#\"><span class=\"b-chat\">Chat</span> COTIZACIÓN</a>
                <a href=\"http://local.linkedxpert.com/#\"><span class=\"b-chat\">Chat</span> CONTÁCTANOS</a>
            </div>
        </div>
    </div>
</div>


      </div>

      <footer style=\"position: static;\">
        <div class=\"container\">
            <div class=\"social-media\">
                <a href=\"https://www.facebook.com/nctech.sw\" target=\"_blank\"><img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fe/img/fb.png"), "html", null, true);
        echo "\" width=\"25\"></a>
                <a href=\"https://www.linkedin.com/company/nc-tech\" target=\"_blank\"><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fe/img/in.png"), "html", null, true);
        echo "\" width=\"25\"></a>
                <a href=\"https://www.youtube.com/c/NctechMx_Cr\" target=\"_blank\"><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fe/img/yt.png"), "html", null, true);
        echo "\" width=\"25\"></a>
                <a href=\"https://twitter.com/nctech_sw\" target=\"_blank\"><img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fe/img/tw.png"), "html", null, true);
        echo "\" width=\"25\"></a>
                <a href=\"http://xpertcad.com/blog/\" target=\"_blank\"><img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fe/img/blog-icono.png"), "html", null, true);
        echo "\" width=\"60\"></a>
            </div>

            <div class=\"products\">
                <a href=\"http://local.linkedxpert.com/#\"><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fe/img/logo-delcam-footer.png"), "html", null, true);
        echo "\"> </a>
                <a href=\"http://local.linkedxpert.com/#\"><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fe/img/logo-sw-footer.png"), "html", null, true);
        echo "\"></a>
                <a href=\"http://local.linkedxpert.com/#\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fe/img/logo-bodysystem-footer.png"), "html", null, true);
        echo "\"></a>
                <a href=\"http://local.linkedxpert.com/#\"><img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fe/img/logo-transvalor-footer.png"), "html", null, true);
        echo "\"></a>
            </div>
        </div>
      </footer>
    
    
    
\t<script type=\"text/javascript\">
\t
\t    \$(document).ready(function(){

      \$(\"#home-overlay button.dismiss\").click(function(){
          \$(\"#home-overlay\").fadeOut(150, function() {
              \$(this).remove();
          });
      });
      \$(\".login_box a\").click(function(){
          \$(this).parent().fadeOut(200);
          \$(\"#overlay\").fadeOut(200);
          return false;
      });
      \$(\"#overlay\").click(function(){
          \$(this).fadeOut(200);
          \$(document).find(\".login_box\").fadeOut(200);
      });

      //---Navbar---//


      \$(\".nct_navbar ul li.has_dropdown > a\").append(\"<i class='fa fa-angle-down'></i>&nbsp;\");

      \$(\".nct_navbar > ul li.has_dropdown\").hover(function(){
        \$(this).find(\"ul.dropdown_menu\").stop(false,true).slideDown(150);
      },function(){
        \$(this).find(\"ul.dropdown_menu\").stop(true,false).slideUp(150);
      });

        \$(\".nct_navbar > ul > li.has_dropdown ul.dropdown_menu li.has_submenu > a\").append(\"&nbsp;<i class='fa fa-caret-right'></i>\");
      \$(\".nct_navbar > ul > li.has_dropdown ul.dropdown_menu li.has_submenu\").each(function(){
        \$(this).hover(function(){
          \$(this).find(\"> ul\").stop(false,true).slideDown(150);
        },function(){
          \$(this).find(\"> ul\").stop(true,false).slideUp(150);
        });
      });

        /*main menu*/
        \$('.navbar a.dropdown-toggle').on('click', function(e) {
            var elmnt = \$(this).parent().parent();
            if (!elmnt.hasClass('nav')) {
                var li = \$(this).parent();
                var heightParent = parseInt(elmnt.css('height').replace('px', '')) / 2;
                heightParent= 0;
                var widthParent = parseInt(elmnt.css('width').replace('px', '')) - 2;

                if(!li.hasClass('open')) li.addClass('open');
                else li.removeClass('open');
                \$(this).next().css('top', heightParent + 'px');
                \$(this).next().css('left', widthParent + 'px');

                return false;
            }
        });

      //---Dashboard---//
      \$(\".submenu_wrapper .dash_nav_right\").hover(function(){
        \$(this).find(\"#user_dropdown\").stop(false,true).fadeIn(100);
      },function(){
        \$(this).find(\"#user_dropdown\").stop(true,false).fadeOut(100);
      });
      \$(\".body_wrapper .grid_block div ul.dashboard_sidebar li:first-child a\").click(function(){
        return false;
      });
      \$(\"div.breadcrumb ul li\").not(\":first-child\").prepend(\"&nbsp;&nbsp;/&nbsp;&nbsp;\");
      \$(\"div.breadcrumb ul li.active a\").click(function(){return false;});

      //---Dropdown sidebar---//
      \$(\"div.nct_menubar ul > li > a\").click(function(){
        \$(this).parent().find(\"ul\").stop(true,false).slideToggle(300);
        \$(this).find(\"i\").toggleClass(\"fa-rotate-180\");
      });
      \$(\"div.nct_menubar ul > li > ul.active\").parent().find(\"a:first i\").addClass(\"fa-rotate-180\");

      //---Footer hover---//
      \$(\".nct_bottom_menubar li a\").hover(function(){
        var buttonCopy = \$(this).attr(\"rel\");
        \$(document).find(\"#nct_bottom_hoverbar span\").text(buttonCopy);
      },function(){
        \$(document).find(\"#nct_bottom_hoverbar span\").text(\"\");
      });


        /*tooltip*/
        \$('[data-toggle=\\'tooltip\\']').tooltip({container: 'body', html: true});

        \$(document).ajaxStop(function() {
            \$('[data-toggle=\\'tooltip\\']').tooltip({container: 'body'});
        });

        /*Menu de xpertcad*/
        \$( \".y-overlay-menu-xp\" ).hover(function() {
            \$(this).find(\".menu-xp-info\").slideDown();
        }, function() {
            \$(this).find(\".menu-xp-info\").slideUp(\"slow\");
        });



    });

    //-------------Document min-height-------------//
    function docHeight() {
      var winH = \$(window).height();
      var contentH = \$(\".nav_wrapper\").outerHeight() + \$(\".submenu_wrapper\").outerHeight() + \$(\".pre_footer_wrapper\").outerHeight() + \$(\".footer_wrapper\").outerHeight();
      \$(\".content_wrapper\").css(\"min-height\",winH - contentH - 25 + \"px\");
    }
    \$(document).ready(docHeight);
    \$(window).load(docHeight);
    \$(window).resize(docHeight);

    //-------------Hexagons-------------//
    function HexaHeight() {

        var wh=\$(\".block-hexagon\").width();
        \$(\".block-hexagon\").height(wh*.9);
        \$(\".block-hexagon\").parent().height(wh*.9);

    }
    \$(document).ready(HexaHeight);
    \$(window).load(HexaHeight);
    \$(window).scroll(HexaHeight);
    \$(window).resize(HexaHeight);

    //-------------Hexagons xpertcad-------------//
    function HexaHeightXpertCAD() {

        var wh=\$(\".block-hexagon-xpertcad\").width();
        \$(\".block-hexagon-xpertcad\").height(wh*1.3);
        \$(\".block-hexagon-xpertcad\").parent().height(wh*1.31);

    }
    \$(document).ready(HexaHeightXpertCAD);
    \$(window).load(HexaHeightXpertCAD);
    \$(window).scroll(HexaHeightXpertCAD);
    \$(window).resize(HexaHeightXpertCAD);

    //-------------Xpertcad Tabs-------------//
    \$('.y-tabs-xpertcad .nav-tabs > li > a').hover( function(){
        \$(this).tab('show');
    });

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

    function footer_fixed(){
        var mFoo = \$(\"body>footer\");
        if (((\$(document.body).height() + mFoo.outerHeight()) < \$(window).height() && mFoo.css(\"position\") == \"fixed\") || (\$(document.body).height() < \$(window).height() && mFoo.css(\"position\") != \"fixed\")) {
            mFoo.css({ position: \"fixed\", bottom: \"0px\" });
        } else {
            mFoo.css({ position: \"static\" });
        }
    }

    \$(document).ready(footer_fixed);
    \$(window).load(footer_fixed);
    \$(window).resize(footer_fixed);
\t</script>

<div id=\"1457645986900\" style=\"position: fixed; top: 0px; left: 0px; opacity: 0.5; display: none; z-index: 9999; background-color: rgb(0, 0, 0);\"></div>
<div class=\"jquery-msgbox\" style=\"display: none; position: absolute; top: 0px; left: 0px; width: 420px; height: auto; z-index: 10000; word-wrap: break-word; box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 15px; border-radius: 6px; background-color: rgb(255, 255, 255);\">
<div class=\"jquery-msgbox-wrapper\" style=\"height: auto; min-height: 80px; zoom: 1;\"><form action=\"http://local.linkedxpert.com/undefined\" method=\"post\"></form></div>
</div>
</body>
</html>";
        
        $__internal_8a4660aae545d0ff82d1a8507a893b5231dec2342f6a2e07ae50d1bd79b9874c->leave($__internal_8a4660aae545d0ff82d1a8507a893b5231dec2342f6a2e07ae50d1bd79b9874c_prof);

    }

    public function getTemplateName()
    {
        return "@fe/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 155,  231 => 154,  227 => 153,  223 => 152,  216 => 148,  212 => 147,  208 => 146,  204 => 145,  200 => 144,  167 => 114,  103 => 53,  86 => 39,  67 => 23,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  36 => 10,  32 => 9,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*       */
/* 	  <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   	  <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*       <title>Inicio - LinkedXpert</title>*/
/*  */
/*  <!-- jquery -->*/
/* <script type="text/javascript" src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>  */
/* */
/* <!-- Bootstrap -->*/
/* <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">*/
/* <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/* <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">*/
/* <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">*/
/*   </head>*/
/*   */
/*   <body id="body">*/
/*       <div class="quick-access">*/
/*           <div class="link-home">*/
/*               <a href="" title="Inicio"><img src="{{ asset('bundles/fe/img/lx_favicon_white.png') }}" width="25"></a>*/
/*           </div>*/
/*           <ul class="social-media">*/
/*               <li><a href="https://www.facebook.com/nctech.sw" target="_blank" alt="Facebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>*/
/*               <li><a href="https://twitter.com/nctech_sw" target="_blank" alt="Twitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>*/
/*               <li><a href="https://www.linkedin.com/company/nc-tech" target="_blank" alt="link" title="linkedin"><i class="fa fa-linkedin"></i></a></li>*/
/*               <li><a href="https://www.youtube.com/c/NctechMx_Cr" target="_blank" alt="Youtube" title="Youtube"><i class="fa fa-youtube"></i></a></li>*/
/*           </ul>*/
/*           <div class="link-chat">*/
/*               <a href="http://local.linkedxpert.com/#" title="chat">Chat</a>*/
/*           </div>*/
/*       </div>*/
/* */
/*       <div class="container">*/
/*           <div class="row bg-head-main">*/
/*               <div class="col-xs-12 col-sm-3 col-md-3 y-head-logo" style="position: relative;">*/
/*                   <a href=""><img src="{{ asset('bundles/fe/img/lx_logo_white.png') }}" style="margin: 15px 0 10px 20%;"></a>*/
/*               </div>*/
/*               <div class="col-xs-12 col-sm-9 col-md-9 y-head-menu" style="position: relative;">*/
/* */
/*                   <nav class="navbar navbar-default" role="navigation">*/
/*                       <div class="container-fluid">*/
/*                           <div class="row">*/
/*                               <div class="collapse navbar-collapse" id="navbar-main">*/
/* */
/*                                   <ul class="nav navbar-nav navbar-right">*/
/*                                       <li class="dropdown">*/
/*                                           <a href="http://local.linkedxpert.com/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bienvenido,  &nbsp;<i class="fa fa-chevron-circle-down"></i></a>*/
/*                                           <ul class="dropdown-menu">*/
/*                                               <li><a href="http://local.linkedxpert.com/admin/mi-cuenta/"><i class="fa fa-user"></i> Mi Cuenta</a></li>*/
/*                                               <li><a href="{{ path('usuarios_logout') }}"><i class="fa fa-sign-out"></i> Cerrar sesion</a></li>*/
/*                                           </ul>*/
/*                                       </li>*/
/*                                   </ul>*/
/* */
/*                               </div>*/
/*                           </div>*/
/*                       </div>*/
/*                   </nav>*/
/* */
/*               </div>*/
/*           </div>*/
/* */
/*           <div class="row bg-head-breadcrums">*/
/*               <div class="col-xs-12 col-sm-12 col-md-12">*/
/*                   <ul class="breadcrumb">*/
/*                                         </ul>*/
/*               </div>*/
/* */
/*           </div>*/
/*       </div>*/
/*     */
/*       <div class="container">*/
/*         <div class="col-xs-12 col-sm-12 col-md-12">*/
/*     <div class="y-title-page">*/
/*         <h3>Cliente: XXX</h3>*/
/*         <span class="divider-inner"></span>*/
/*     </div>*/
/* </div>*/
/* <div class="col-xs-12 col-sm-12 col-md-12">*/
/*     <div class="y-subtitle-page">*/
/*         <h5>Bienvenidos a LinkedXpert <span class="small">®</span>, la comunidad de Clientes de NC Tech <span class="small">®</span></h5>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="col-xs-12 col-sm-8 col-md-8">*/
/*     <div class="pane-hexagon">*/
/*         <div class="row row-hexagon">*/
/*             <div class="col-xs-4 col-sm-4 col-md-4" style="height: 225px;"><a href="" class="block-hexagon bh1" style="height: 225px;"></a></div>*/
/*             <div class="col-xs-4 col-sm-4 col-md-4" style="height: 225px;"><a href="http://local.linkedxpert.com/xpertcad/" class="block-hexagon bh2" style="height: 225px;"></a></div>*/
/*             <div class="col-xs-4 col-sm-4 col-md-4" style="height: 225px;"><a href="" class="block-hexagon bh3" style="height: 225px;"></a></div>*/
/*         </div>*/
/*         <div class=" row row-hexagon">*/
/*             <div class="col-xs-4 col-sm-4 col-md-4" style="height: 225px;"><a href="" class="block-hexagon bh0" style="height: 225px;"></a></div>*/
/*             <div class="col-xs-4 col-sm-4 col-md-4" style="height: 225px;"><a href="" class="block-hexagon bh5" style="height: 225px;"></a></div>*/
/*             <div class="col-xs-4 col-sm-4 col-md-4" style="height: 225px;"><a href="" class="block-hexagon bh0" style="height: 225px;"></a></div>*/
/*         </div>*/
/*         <div class="row row-hexagon">*/
/*             <div class="col-xs-4 col-sm-4 col-md-4" style="height: 225px;"><a href="http://my.solidworks.com/" target="_blank" class="block-hexagon bh7" style="height: 225px;"></a></div>*/
/*             <div class="col-xs-4 col-sm-4 col-md-4" style="height: 225px;"><a href="http://local.linkedxpert.com/soporte/" class="block-hexagon bh8" style="height: 225px;"></a></div>*/
/*             <div class="col-xs-4 col-sm-4 col-md-4" style="height: 225px;"><a href="" class="block-hexagon bh9" style="height: 225px;"></a></div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="col-xs-12 col-sm-4 col-md-4">*/
/*     <div class="row">*/
/*         <div class="col-xs-12 col-sm-12 col-md-12">*/
/*             <div class="section-next-events">*/
/*                 <h3>EVENTOS</h3>*/
/*                 <div class="single-event">*/
/*                     <div class="col-xs-2 col-sm-3 col-md-3">*/
/*                         <img src="{{ asset('bundles/fe/img/sw_2016.png') }}" class="img-responsive" title="Lanzamiento SolidWorks 2016">*/
/*                     </div>*/
/*                     <div class="col-xs-9 col-sm-9 col-md-9">*/
/*                         <span class="title">Lanzamiento SolidWorks 2016</span>*/
/*                         <span class="date"><i class="fa fa-calendar"></i> &nbsp;Oct 08, 2015</span>*/
/*                         <span class="time"><i class="fa fa-clock-o"></i> &nbsp;17:30 - 20:30 Hrs</span>*/
/*                         <span class="place"><i class="fa fa-map-marker"></i> &nbsp;Crowne Plaza, Querétaro</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <hr>*/
/*     <div class="row">*/
/*         <div class="col-xs-12 col-sm-12 col-md-12">*/
/*             <div class="section-help-chat">*/
/*                 <a href="http://local.linkedxpert.com/#"><span class="b-chat">Chat</span> ATENCIÓN A CLIENTES</a>*/
/*                 <a href="http://local.linkedxpert.com/#"><span class="b-chat">Chat</span> COTIZACIÓN</a>*/
/*                 <a href="http://local.linkedxpert.com/#"><span class="b-chat">Chat</span> CONTÁCTANOS</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/*       </div>*/
/* */
/*       <footer style="position: static;">*/
/*         <div class="container">*/
/*             <div class="social-media">*/
/*                 <a href="https://www.facebook.com/nctech.sw" target="_blank"><img src="{{ asset('bundles/fe/img/fb.png') }}" width="25"></a>*/
/*                 <a href="https://www.linkedin.com/company/nc-tech" target="_blank"><img src="{{ asset('bundles/fe/img/in.png') }}" width="25"></a>*/
/*                 <a href="https://www.youtube.com/c/NctechMx_Cr" target="_blank"><img src="{{ asset('bundles/fe/img/yt.png') }}" width="25"></a>*/
/*                 <a href="https://twitter.com/nctech_sw" target="_blank"><img src="{{ asset('bundles/fe/img/tw.png') }}" width="25"></a>*/
/*                 <a href="http://xpertcad.com/blog/" target="_blank"><img src="{{ asset('bundles/fe/img/blog-icono.png') }}" width="60"></a>*/
/*             </div>*/
/* */
/*             <div class="products">*/
/*                 <a href="http://local.linkedxpert.com/#"><img src="{{ asset('bundles/fe/img/logo-delcam-footer.png') }}"> </a>*/
/*                 <a href="http://local.linkedxpert.com/#"><img src="{{ asset('bundles/fe/img/logo-sw-footer.png') }}"></a>*/
/*                 <a href="http://local.linkedxpert.com/#"><img src="{{ asset('bundles/fe/img/logo-bodysystem-footer.png') }}"></a>*/
/*                 <a href="http://local.linkedxpert.com/#"><img src="{{ asset('bundles/fe/img/logo-transvalor-footer.png') }}"></a>*/
/*             </div>*/
/*         </div>*/
/*       </footer>*/
/*     */
/*     */
/*     */
/* 	<script type="text/javascript">*/
/* 	*/
/* 	    $(document).ready(function(){*/
/* */
/*       $("#home-overlay button.dismiss").click(function(){*/
/*           $("#home-overlay").fadeOut(150, function() {*/
/*               $(this).remove();*/
/*           });*/
/*       });*/
/*       $(".login_box a").click(function(){*/
/*           $(this).parent().fadeOut(200);*/
/*           $("#overlay").fadeOut(200);*/
/*           return false;*/
/*       });*/
/*       $("#overlay").click(function(){*/
/*           $(this).fadeOut(200);*/
/*           $(document).find(".login_box").fadeOut(200);*/
/*       });*/
/* */
/*       //---Navbar---//*/
/* */
/* */
/*       $(".nct_navbar ul li.has_dropdown > a").append("<i class='fa fa-angle-down'></i>&nbsp;");*/
/* */
/*       $(".nct_navbar > ul li.has_dropdown").hover(function(){*/
/*         $(this).find("ul.dropdown_menu").stop(false,true).slideDown(150);*/
/*       },function(){*/
/*         $(this).find("ul.dropdown_menu").stop(true,false).slideUp(150);*/
/*       });*/
/* */
/*         $(".nct_navbar > ul > li.has_dropdown ul.dropdown_menu li.has_submenu > a").append("&nbsp;<i class='fa fa-caret-right'></i>");*/
/*       $(".nct_navbar > ul > li.has_dropdown ul.dropdown_menu li.has_submenu").each(function(){*/
/*         $(this).hover(function(){*/
/*           $(this).find("> ul").stop(false,true).slideDown(150);*/
/*         },function(){*/
/*           $(this).find("> ul").stop(true,false).slideUp(150);*/
/*         });*/
/*       });*/
/* */
/*         /*main menu*//* */
/*         $('.navbar a.dropdown-toggle').on('click', function(e) {*/
/*             var elmnt = $(this).parent().parent();*/
/*             if (!elmnt.hasClass('nav')) {*/
/*                 var li = $(this).parent();*/
/*                 var heightParent = parseInt(elmnt.css('height').replace('px', '')) / 2;*/
/*                 heightParent= 0;*/
/*                 var widthParent = parseInt(elmnt.css('width').replace('px', '')) - 2;*/
/* */
/*                 if(!li.hasClass('open')) li.addClass('open');*/
/*                 else li.removeClass('open');*/
/*                 $(this).next().css('top', heightParent + 'px');*/
/*                 $(this).next().css('left', widthParent + 'px');*/
/* */
/*                 return false;*/
/*             }*/
/*         });*/
/* */
/*       //---Dashboard---//*/
/*       $(".submenu_wrapper .dash_nav_right").hover(function(){*/
/*         $(this).find("#user_dropdown").stop(false,true).fadeIn(100);*/
/*       },function(){*/
/*         $(this).find("#user_dropdown").stop(true,false).fadeOut(100);*/
/*       });*/
/*       $(".body_wrapper .grid_block div ul.dashboard_sidebar li:first-child a").click(function(){*/
/*         return false;*/
/*       });*/
/*       $("div.breadcrumb ul li").not(":first-child").prepend("&nbsp;&nbsp;/&nbsp;&nbsp;");*/
/*       $("div.breadcrumb ul li.active a").click(function(){return false;});*/
/* */
/*       //---Dropdown sidebar---//*/
/*       $("div.nct_menubar ul > li > a").click(function(){*/
/*         $(this).parent().find("ul").stop(true,false).slideToggle(300);*/
/*         $(this).find("i").toggleClass("fa-rotate-180");*/
/*       });*/
/*       $("div.nct_menubar ul > li > ul.active").parent().find("a:first i").addClass("fa-rotate-180");*/
/* */
/*       //---Footer hover---//*/
/*       $(".nct_bottom_menubar li a").hover(function(){*/
/*         var buttonCopy = $(this).attr("rel");*/
/*         $(document).find("#nct_bottom_hoverbar span").text(buttonCopy);*/
/*       },function(){*/
/*         $(document).find("#nct_bottom_hoverbar span").text("");*/
/*       });*/
/* */
/* */
/*         /*tooltip*//* */
/*         $('[data-toggle=\'tooltip\']').tooltip({container: 'body', html: true});*/
/* */
/*         $(document).ajaxStop(function() {*/
/*             $('[data-toggle=\'tooltip\']').tooltip({container: 'body'});*/
/*         });*/
/* */
/*         /*Menu de xpertcad*//* */
/*         $( ".y-overlay-menu-xp" ).hover(function() {*/
/*             $(this).find(".menu-xp-info").slideDown();*/
/*         }, function() {*/
/*             $(this).find(".menu-xp-info").slideUp("slow");*/
/*         });*/
/* */
/* */
/* */
/*     });*/
/* */
/*     //-------------Document min-height-------------//*/
/*     function docHeight() {*/
/*       var winH = $(window).height();*/
/*       var contentH = $(".nav_wrapper").outerHeight() + $(".submenu_wrapper").outerHeight() + $(".pre_footer_wrapper").outerHeight() + $(".footer_wrapper").outerHeight();*/
/*       $(".content_wrapper").css("min-height",winH - contentH - 25 + "px");*/
/*     }*/
/*     $(document).ready(docHeight);*/
/*     $(window).load(docHeight);*/
/*     $(window).resize(docHeight);*/
/* */
/*     //-------------Hexagons-------------//*/
/*     function HexaHeight() {*/
/* */
/*         var wh=$(".block-hexagon").width();*/
/*         $(".block-hexagon").height(wh*.9);*/
/*         $(".block-hexagon").parent().height(wh*.9);*/
/* */
/*     }*/
/*     $(document).ready(HexaHeight);*/
/*     $(window).load(HexaHeight);*/
/*     $(window).scroll(HexaHeight);*/
/*     $(window).resize(HexaHeight);*/
/* */
/*     //-------------Hexagons xpertcad-------------//*/
/*     function HexaHeightXpertCAD() {*/
/* */
/*         var wh=$(".block-hexagon-xpertcad").width();*/
/*         $(".block-hexagon-xpertcad").height(wh*1.3);*/
/*         $(".block-hexagon-xpertcad").parent().height(wh*1.31);*/
/* */
/*     }*/
/*     $(document).ready(HexaHeightXpertCAD);*/
/*     $(window).load(HexaHeightXpertCAD);*/
/*     $(window).scroll(HexaHeightXpertCAD);*/
/*     $(window).resize(HexaHeightXpertCAD);*/
/* */
/*     //-------------Xpertcad Tabs-------------//*/
/*     $('.y-tabs-xpertcad .nav-tabs > li > a').hover( function(){*/
/*         $(this).tab('show');*/
/*     });*/
/* */
/*     //-------------Center Absolute Pop-up Overlay-------------//*/
/* */
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
/*     function footer_fixed(){*/
/*         var mFoo = $("body>footer");*/
/*         if ((($(document.body).height() + mFoo.outerHeight()) < $(window).height() && mFoo.css("position") == "fixed") || ($(document.body).height() < $(window).height() && mFoo.css("position") != "fixed")) {*/
/*             mFoo.css({ position: "fixed", bottom: "0px" });*/
/*         } else {*/
/*             mFoo.css({ position: "static" });*/
/*         }*/
/*     }*/
/* */
/*     $(document).ready(footer_fixed);*/
/*     $(window).load(footer_fixed);*/
/*     $(window).resize(footer_fixed);*/
/* 	</script>*/
/* */
/* <div id="1457645986900" style="position: fixed; top: 0px; left: 0px; opacity: 0.5; display: none; z-index: 9999; background-color: rgb(0, 0, 0);"></div>*/
/* <div class="jquery-msgbox" style="display: none; position: absolute; top: 0px; left: 0px; width: 420px; height: auto; z-index: 10000; word-wrap: break-word; box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 15px; border-radius: 6px; background-color: rgb(255, 255, 255);">*/
/* <div class="jquery-msgbox-wrapper" style="height: auto; min-height: 80px; zoom: 1;"><form action="http://local.linkedxpert.com/undefined" method="post"></form></div>*/
/* </div>*/
/* </body>*/
/* </html>*/

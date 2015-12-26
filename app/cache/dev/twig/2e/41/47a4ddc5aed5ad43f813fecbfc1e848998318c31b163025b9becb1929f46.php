<?php

/* JCIBundle::layout.html.twig */
class __TwigTemplate_2e4147a4ddc5aed5ad43f813fecbfc1e848998318c31b163025b9becb1929f46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'task' => array($this, 'block_task'),
            'notif' => array($this, 'block_notif'),
            'msg' => array($this, 'block_msg'),
            'MenuPerso' => array($this, 'block_MenuPerso'),
            'container' => array($this, 'block_container'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class=\"ie8 no-js\" lang=\"en\"><![endif]-->
<!--[if IE 9]><html class=\"ie9 no-js\" lang=\"en\"><![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\" class=\"no-js\">
\t<!--<![endif]-->
\t<!-- start: HEAD -->
\t
<!-- Mirrored from www.cliptheme.com/preview/admin/clip-one/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Dec 2015 21:01:37 GMT -->
<head>
\t\t<title>JCI Hammam-Chatt - JCI Perform System</title>
\t\t<!-- start: META -->
\t\t<meta charset=\"utf-8\" />
\t\t<!--[if IE]><meta http-equiv='X-UA-Compatible' content=\"IE=edge,IE=9,IE=8,chrome=1\" /><![endif]-->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">
\t\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t\t<meta content=\"\" name=\"description\" />
\t\t<meta content=\"\" name=\"author\" />
\t\t<!-- end: META -->
\t\t<!-- start: MAIN CSS -->
\t\t<link rel=\"stylesheet\" href=\"assets/plugins/bootstrap/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/plugins/font-awesome/css/font-awesome.min.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/fonts/style.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/main.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/main-responsive.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/plugins/iCheck/skins/all.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/theme_light.css\" type=\"text/css\" id=\"skin_color\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/print.css\" type=\"text/css\" media=\"print\"/>
\t\t<!--[if IE 7]>
\t\t<link rel=\"stylesheet\" href=\"assets/plugins/font-awesome/css/font-awesome-ie7.min.css\">
\t\t<![endif]-->
\t\t<!-- end: MAIN CSS -->
\t\t<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
\t\t<link rel=\"stylesheet\" href=\"assets/plugins/fullcalendar/fullcalendar/fullcalendar.css\">
\t\t<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
\t\t<link rel=\"shortcut icon\" href=\"favicon.ico\" />
\t</head>
\t<!-- end: HEAD -->
\t<!-- start: BODY -->
\t<body>
\t\t<!-- start: HEADER -->
\t\t<div class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t\t<!-- start: TOP NAVIGATION CONTAINER -->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<!-- start: RESPONSIVE MENU TOGGLER -->
\t\t\t\t\t<button data-target=\".navbar-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle\" type=\"button\">
\t\t\t\t\t\t<span class=\"clip-list-2\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- end: RESPONSIVE MENU TOGGLER -->
\t\t\t\t\t<!-- start: LOGO -->
\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\">
\t\t\t\t\t\tJCI HC <i class=\"clip-clip\"></i> Perform System
\t\t\t\t\t</a>
\t\t\t\t\t<!-- end: LOGO -->
\t\t\t\t</div>
\t\t\t\t<div class=\"navbar-tools\">
\t\t\t\t\t<!-- start: TOP NAVIGATION MENU -->                                
                                        <ul class=\"nav navbar-right\">
\t\t\t\t\t\t<!-- start: TO-DO DROPDOWN -->
                                                
                                            ";
        // line 66
        $this->displayBlock('task', $context, $blocks);
        // line 169
        echo "                                                
                                                <!-- end: TO-DO DROPDOWN-->
\t\t\t\t\t\t<!-- start: NOTIFICATION DROPDOWN -->
                                                
                                            ";
        // line 173
        $this->displayBlock('notif', $context, $blocks);
        // line 288
        echo "                                                
                                                <!-- end: NOTIFICATION DROPDOWN -->
\t\t\t\t\t\t<!-- start: MESSAGE DROPDOWN -->
\t\t\t\t\t\t
                                            ";
        // line 292
        $this->displayBlock('msg', $context, $blocks);
        // line 386
        echo "                                                
                                                <!-- end: MESSAGE DROPDOWN -->
\t\t\t\t\t\t<!-- start: USER DROPDOWN -->
                                                
                                            ";
        // line 390
        $this->displayBlock('MenuPerso', $context, $blocks);
        // line 429
        echo "                                                
                                                <!-- end: USER DROPDOWN -->
\t\t\t\t\t\t<!-- start: PAGE SIDEBAR TOGGLE -->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"sb-toggle\" href=\"#\"><i class=\"fa fa-outdent\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- end: PAGE SIDEBAR TOGGLE -->
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- end: TOP NAVIGATION MENU -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end: TOP NAVIGATION CONTAINER -->
\t\t</div>
\t\t<!-- end: HEADER -->
\t\t<!-- start: MAIN CONTAINER -->
\t\t
            ";
        // line 445
        $this->displayBlock('container', $context, $blocks);
        // line 1400
        echo "                
                <!-- end: MAIN CONTAINER -->
\t\t<!-- start: FOOTER -->
\t\t<div class=\"footer clearfix\">
\t\t\t<div class=\"footer-inner\">
\t\t\t\t2014 &copy; clip-one by cliptheme.
\t\t\t</div>
\t\t\t<div class=\"footer-items\">
\t\t\t\t<span class=\"go-top\"><i class=\"clip-chevron-up\"></i></span>
\t\t\t</div>
\t\t</div>
\t\t<!-- end: FOOTER -->
\t\t<!-- start: RIGHT SIDEBAR -->
\t\t<div id=\"page-sidebar\">
\t\t\t<a class=\"sidebar-toggler sb-toggle\" href=\"#\"><i class=\"fa fa-indent\"></i></a>
\t\t\t<div class=\"sidebar-wrapper\">
\t\t\t\t<ul class=\"nav nav-tabs nav-justified\" id=\"sidebar-tab\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"#users\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-users\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#favorites\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-heart\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#settings\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-gear\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"users\">
\t\t\t\t\t\t<div class=\"users-list\">
\t\t\t\t\t\t\t<h5 class=\"sidebar-title\">On-line</h5>
\t\t\t\t\t\t\t<ul class=\"media-list\">
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle status-online\"></i>
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-2.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Nicole Bell</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Content Designer </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"user-label\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">3</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle status-online\"></i>
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-3.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Steven Thompson</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Visual Designer </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle status-online\"></i>
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-4.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Ella Patterson</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Web Editor </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle status-online\"></i>
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-5.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Kenneth Ross</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Senior Designer </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<h5 class=\"sidebar-title\">Off-line</h5>
\t\t\t\t\t\t\t<ul class=\"media-list\">
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-6.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Nicole Bell</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Content Designer </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"user-label\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">3</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-7.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Steven Thompson</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Visual Designer </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-8.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Ella Patterson</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Web Editor </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-9.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Kenneth Ross</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Senior Designer </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-10.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Ella Patterson</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Web Editor </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-5.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Kenneth Ross</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Senior Designer </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user-chat\">
\t\t\t\t\t\t\t<div class=\"sidebar-content\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-back\" href=\"#\"><i class=\"fa fa-chevron-circle-left\"></i> Back</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"user-chat-form sidebar-content\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Type a message here...\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-right\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ol class=\"discussion sidebar-content\">
\t\t\t\t\t\t\t\t<li class=\"other\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatar-4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"messages\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> 51 min </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"self\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatar-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"messages\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> 37 mins </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"other\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatar-4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"messages\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"favorites\">
\t\t\t\t\t\t<div class=\"users-list\">
\t\t\t\t\t\t\t<h5 class=\"sidebar-title\">Favorites</h5>
\t\t\t\t\t\t\t<ul class=\"media-list\">
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-7.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Nicole Bell</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Content Designer </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"user-label\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">3</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-6.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Steven Thompson</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Visual Designer </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-10.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Ella Patterson</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Web Editor </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-2.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Kenneth Ross</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Senior Designer </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-4.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Ella Patterson</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Web Editor </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"assets/images/avatar-5.jpg\" class=\"media-object\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Kenneth Ross</h4>
\t\t\t\t\t\t\t\t\t\t\t<span> Senior Designer </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user-chat\">
\t\t\t\t\t\t\t<div class=\"sidebar-content\">
\t\t\t\t\t\t\t\t<a class=\"sidebar-back\" href=\"#\"><i class=\"fa fa-chevron-circle-left\"></i> Back</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ol class=\"discussion sidebar-content\">
\t\t\t\t\t\t\t\t<li class=\"other\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatar-4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"messages\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> 51 min </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"self\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatar-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"messages\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> 37 mins </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"other\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatar-4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"messages\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"settings\">
\t\t\t\t\t\t<h5 class=\"sidebar-title\">General Settings</h5>
\t\t\t\t\t\t<ul class=\"media-list\">
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"checkbox sidebar-content\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" class=\"green\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\tEnable Notifications
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"checkbox sidebar-content\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" class=\"green\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\tShow your E-mail
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"checkbox sidebar-content\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" class=\"green\">
\t\t\t\t\t\t\t\t\t\tShow Offline Users
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"checkbox sidebar-content\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" class=\"green\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\tE-mail Alerts
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"checkbox sidebar-content\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" class=\"green\">
\t\t\t\t\t\t\t\t\t\tSMS Alerts
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"sidebar-content\">
\t\t\t\t\t\t\t<button class=\"btn btn-success\">
\t\t\t\t\t\t\t\t<i class=\"icon-settings\"></i> Save Changes
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end: RIGHT SIDEBAR -->
\t\t<div id=\"event-management\" class=\"modal fade\" tabindex=\"-1\" data-width=\"760\" style=\"display: none;\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
\t\t\t\t\t\t\t&times;
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<h4 class=\"modal-title\">Event Management</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\"></div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-light-grey\">
\t\t\t\t\t\t\tClose
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger remove-event no-display\">
\t\t\t\t\t\t\t<i class='fa fa-trash-o'></i> Delete Event
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type='submit' class='btn btn-success save-event'>
\t\t\t\t\t\t\t<i class='fa fa-check'></i> Save
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- start: MAIN JAVASCRIPTS -->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"assets/plugins/respond.min.js\"></script>
\t\t<script src=\"assets/plugins/excanvas.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"assets/plugins/jQuery-lib/1.10.2/jquery.min.js\"></script>
\t\t<![endif]-->
\t\t<!--[if gte IE 9]><!-->
\t\t<script src=\"assets/plugins/jQuery-lib/2.0.3/jquery.min.js\"></script>
\t\t<!--<![endif]-->
\t\t<script src=\"assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js\"></script>
\t\t<script src=\"assets/plugins/bootstrap/js/bootstrap.min.js\"></script>
\t\t<script src=\"assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js\"></script>
\t\t<script src=\"assets/plugins/blockUI/jquery.blockUI.js\"></script>
\t\t<script src=\"assets/plugins/iCheck/jquery.icheck.min.js\"></script>
\t\t<script src=\"assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js\"></script>
\t\t<script src=\"assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js\"></script>
\t\t<script src=\"assets/plugins/less/less-1.5.0.min.js\"></script>
\t\t<script src=\"assets/plugins/jquery-cookie/jquery.cookie.js\"></script>
\t\t<script src=\"assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js\"></script>
\t\t<script src=\"assets/js/main.js\"></script>
\t\t<!-- end: MAIN JAVASCRIPTS -->
\t\t<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
\t\t<script src=\"assets/plugins/flot/jquery.flot.js\"></script>
\t\t<script src=\"assets/plugins/flot/jquery.flot.pie.js\"></script>
\t\t<script src=\"assets/plugins/flot/jquery.flot.resize.min.js\"></script>
\t\t<script src=\"assets/plugins/jquery.sparkline/jquery.sparkline.js\"></script>
\t\t<script src=\"assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js\"></script>
\t\t<script src=\"assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js\"></script>
\t\t<script src=\"assets/plugins/fullcalendar/fullcalendar/fullcalendar.js\"></script>
\t\t<script src=\"assets/js/index.js\"></script>
\t\t<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
\t\t<script>
\t\t\tjQuery(document).ready(function() {
\t\t\t\tMain.init();
\t\t\t\tIndex.init();
\t\t\t});
\t\t</script>
\t</body>
\t<!-- end: BODY -->

<!-- Mirrored from www.cliptheme.com/preview/admin/clip-one/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Dec 2015 21:01:37 GMT -->
</html>";
    }

    // line 66
    public function block_task($context, array $blocks = array())
    {
        // line 67
        echo "                                                
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-close-others=\"true\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"clip-list-5\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge\"> 12</span>
\t\t\t\t\t\t\t</a>
                                                    
\t\t\t\t\t\t\t<ul class=\"dropdown-menu todo\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"dropdown-menu-title\"> You have 12 pending tasks</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"drop-down-wrapper\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\" style=\"opacity: 1; text-decoration: none;\">Staff Meeting</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"opacity: 1;\"> today</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\" style=\"opacity: 1; text-decoration: none;\"> New frontend layout</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"opacity: 1;\"> today</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\"> Hire developers</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\"> tommorow</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\">Staff Meeting</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\"> tommorow</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\"> New frontend layout</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\"> this week</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\"> Hire developers</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\"> this week</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\"> New frontend layout</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\"> this month</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\"> Hire developers</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\"> this month</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\" style=\"opacity: 1; text-decoration: none;\">Staff Meeting</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"opacity: 1;\"> today</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\" style=\"opacity: 1; text-decoration: none;\"> New frontend layout</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"opacity: 1;\"> today</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\"> Hire developers</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\"> tommorow</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"view-all\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\tSee all tasks <i class=\"fa fa-arrow-circle-o-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
                                            ";
    }

    // line 173
    public function block_notif($context, array $blocks = array())
    {
        // line 174
        echo "\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-close-others=\"true\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"clip-notification-2\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge\"> 11</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu notifications\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"dropdown-menu-title\"> You have 11 notifications</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"drop-down-wrapper\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-primary\"><i class=\"fa fa-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\"> New user registration</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> 1 min</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\"><i class=\"fa fa-comment\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\"> New comment</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> 7 min</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\"><i class=\"fa fa-comment\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\"> New comment</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> 8 min</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\"><i class=\"fa fa-comment\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\"> New comment</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> 16 min</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-primary\"><i class=\"fa fa-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\"> New user registration</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> 36 min</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\"><i class=\"fa fa-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\"> 2 items sold</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> 1 hour</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"warning\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\"><i class=\"fa fa-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\"> User deleted account</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> 2 hour</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"warning\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\"><i class=\"fa fa-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\"> Transaction was canceled</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> 6 hour</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\"><i class=\"fa fa-comment\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\"> New comment</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> yesterday</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-primary\"><i class=\"fa fa-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\"> New user registration</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> yesterday</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-primary\"><i class=\"fa fa-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\"> New user registration</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> yesterday</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\"><i class=\"fa fa-comment\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\"> New comment</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> yesterday</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\"><i class=\"fa fa-comment\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\"> New comment</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> yesterday</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"view-all\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\tSee all notifications <i class=\"fa fa-arrow-circle-o-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
                                            ";
    }

    // line 292
    public function block_msg($context, array $blocks = array())
    {
        // line 293
        echo "                                                <li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-close-others=\"true\" data-hover=\"dropdown\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"clip-bubble-3\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge\"> 9</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu posts\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"dropdown-menu-title\"> You have 9 messages</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"drop-down-wrapper\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thread-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"assets/images/avatar-2.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thread-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"author\">Nicole Bell</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> Just Now</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thread-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"assets/images/avatar-1.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thread-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"author\">Peter Clark</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">2 mins</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thread-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"assets/images/avatar-3.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thread-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"author\">Steven Thompson</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">8 hrs</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thread-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"assets/images/avatar-1.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thread-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"author\">Peter Clark</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">9 hrs</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thread-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"assets/images/avatar-5.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thread-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"author\">Kenneth Ross</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">14 hrs</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"view-all\">
\t\t\t\t\t\t\t\t\t<a href=\"pages_messages.html\">
\t\t\t\t\t\t\t\t\t\tSee all messages <i class=\"fa fa-arrow-circle-o-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
                                            ";
    }

    // line 390
    public function block_MenuPerso($context, array $blocks = array())
    {
        echo "    
\t\t\t\t\t\t<li class=\"dropdown current-user\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-close-others=\"true\" href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/avatar-1-small.jpg\" class=\"circle-img\" alt=\"\">
\t\t\t\t\t\t\t\t<span class=\"username\">Peter Clark</span>
\t\t\t\t\t\t\t\t<i class=\"clip-chevron-down\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"pages_user_profile.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"clip-user-2\"></i>
\t\t\t\t\t\t\t\t\t\t&nbsp;My Profile
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"pages_calendar.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"clip-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t&nbsp;My Calendar
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"pages_messages.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"clip-bubble-4\"></i>
\t\t\t\t\t\t\t\t\t\t&nbsp;My Messages (3)
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"utility_lock_screen.html\"><i class=\"clip-locked\"></i>
\t\t\t\t\t\t\t\t\t\t&nbsp;Lock Screen </a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"login_example1.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"clip-exit\"></i>
\t\t\t\t\t\t\t\t\t\t&nbsp;Log Out
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
                                            ";
    }

    // line 445
    public function block_container($context, array $blocks = array())
    {
        // line 446
        echo "                <div class=\"main-container\">
\t\t\t<div class=\"navbar-content\">
\t\t\t\t<!-- start: SIDEBAR -->
\t\t\t\t<div class=\"main-navigation navbar-collapse collapse\">
\t\t\t\t\t<!-- start: MAIN MENU TOGGLER BUTTON -->
\t\t\t\t\t<div class=\"navigation-toggler\">
\t\t\t\t\t\t<i class=\"clip-chevron-left\"></i>
\t\t\t\t\t\t<i class=\"clip-chevron-right\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end: MAIN MENU TOGGLER BUTTON -->
\t\t\t\t\t<!-- start: MAIN NAVIGATION MENU -->
                                        
                                        ";
        // line 458
        $this->displayBlock('menu', $context, $blocks);
        // line 597
        echo "                                        
                                        <!-- end: MAIN NAVIGATION MENU -->
\t\t\t\t</div>
\t\t\t\t<!-- end: SIDEBAR -->
\t\t\t</div>
\t\t\t<!-- start: PAGE -->
\t\t\t<div class=\"main-content\">
\t\t\t\t<!-- start: PANEL CONFIGURATION MODAL FORM -->
\t\t\t\t<div class=\"modal fade\" id=\"panel-config\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t&times;
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<h4 class=\"modal-title\">Panel Configuration</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\tHere will be a configuration form
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">
\t\t\t\t\t\t\t\t\tClose
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\tSave changes
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.modal-content -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.modal-dialog -->
\t\t\t\t</div>
\t\t\t\t<!-- /.modal -->
\t\t\t\t<!-- end: SPANEL CONFIGURATION MODAL FORM -->
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- start: PAGE HEADER -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<!-- start: STYLE SELECTOR BOX -->
\t\t\t\t\t\t\t<div id=\"style_selector\" class=\"hidden-xs\">
\t\t\t\t\t\t\t\t<div id=\"style_selector_container\" style=\"display:block\">
\t\t\t\t\t\t\t\t\t<div class=\"style-main-title\">
\t\t\t\t\t\t\t\t\t\tStyle Selector
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box-title\">
\t\t\t\t\t\t\t\t\t\tChoose Your Layout Style
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"layout\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"default\">Wide</option><option value=\"boxed\">Boxed</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box-title\">
\t\t\t\t\t\t\t\t\t\tChoose Your Header Style
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"header\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"fixed\">Fixed</option><option value=\"default\">Default</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box-title\">
\t\t\t\t\t\t\t\t\t\tChoose Your Footer Style
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"default\">Default</option><option value=\"fixed\">Fixed</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box-title\">
\t\t\t\t\t\t\t\t\t\tBackgrounds for Boxed Version
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"images boxed-patterns\">
\t\t\t\t\t\t\t\t\t\t<a id=\"bg_style_1\" href=\"#\"><img alt=\"\" src=\"assets/images/bg.png\"></a>
\t\t\t\t\t\t\t\t\t\t<a id=\"bg_style_2\" href=\"#\"><img alt=\"\" src=\"assets/images/bg_2.png\"></a>
\t\t\t\t\t\t\t\t\t\t<a id=\"bg_style_3\" href=\"#\"><img alt=\"\" src=\"assets/images/bg_3.png\"></a>
\t\t\t\t\t\t\t\t\t\t<a id=\"bg_style_4\" href=\"#\"><img alt=\"\" src=\"assets/images/bg_4.png\"></a>
\t\t\t\t\t\t\t\t\t\t<a id=\"bg_style_5\" href=\"#\"><img alt=\"\" src=\"assets/images/bg_5.png\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box-title\">
\t\t\t\t\t\t\t\t\t\t5 Predefined Color Schemes
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"images icons-color\">
\t\t\t\t\t\t\t\t\t\t<a id=\"light\" href=\"#\"><img class=\"active\" alt=\"\" src=\"assets/images/lightgrey.png\"></a>
\t\t\t\t\t\t\t\t\t\t<a id=\"dark\" href=\"#\"><img alt=\"\" src=\"assets/images/darkgrey.png\"></a>
\t\t\t\t\t\t\t\t\t\t<a id=\"black_and_white\" href=\"#\"><img alt=\"\" src=\"assets/images/blackandwhite.png\"></a>
\t\t\t\t\t\t\t\t\t\t<a id=\"navy\" href=\"#\"><img alt=\"\" src=\"assets/images/navy.png\"></a>
\t\t\t\t\t\t\t\t\t\t<a id=\"green\" href=\"#\"><img alt=\"\" src=\"assets/images/green.png\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box-title\">
\t\t\t\t\t\t\t\t\t\tStyle it with LESS
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"images\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\tBasic
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"#ffffff\" class=\"color-base\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"add-on dropdown-toggle\" data-toggle=\"dropdown\"><i style=\"background-color: #ffffff\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"colorpalette\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\tText
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"#555555\" class=\"color-text\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"add-on dropdown-toggle\" data-toggle=\"dropdown\"><i style=\"background-color: #555555\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"colorpalette\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\tElements
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"#007AFF\" class=\"color-badge\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"add-on dropdown-toggle\" data-toggle=\"dropdown\"><i style=\"background-color: #007AFF\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"colorpalette\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\"height:25px;line-height:25px; text-align: center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"clear_style\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\tClear Styles
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"save_style\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\tSave Styles
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"style-toggle open\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end: STYLE SELECTOR BOX -->
\t\t\t\t\t\t\t<!-- start: PAGE TITLE & BREADCRUMB -->
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"clip-home-3\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"search-box\">
\t\t\t\t\t\t\t\t\t<form class=\"sidebar-search\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Start Searching...\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"clip-search-3\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t\t\t<h1>Dashboard <small>overview &amp; stats </small></h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end: PAGE TITLE & BREADCRUMB -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end: PAGE HEADER -->
\t\t\t\t\t<!-- start: PAGE CONTENT -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"core-box\">
\t\t\t\t\t\t\t\t<div class=\"heading\">
\t\t\t\t\t\t\t\t\t<i class=\"clip-user-4 circle-icon circle-green\"></i>
\t\t\t\t\t\t\t\t\t<h2>Manage Users</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"view-more\" href=\"#\">
\t\t\t\t\t\t\t\t\tView More <i class=\"clip-arrow-right-2\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"core-box\">
\t\t\t\t\t\t\t\t<div class=\"heading\">
\t\t\t\t\t\t\t\t\t<i class=\"clip-clip circle-icon circle-teal\"></i>
\t\t\t\t\t\t\t\t\t<h2>Manage Orders</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"view-more\" href=\"#\">
\t\t\t\t\t\t\t\t\tView More <i class=\"clip-arrow-right-2\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"core-box\">
\t\t\t\t\t\t\t\t<div class=\"heading\">
\t\t\t\t\t\t\t\t\t<i class=\"clip-database circle-icon circle-bricky\"></i>
\t\t\t\t\t\t\t\t\t<h2>Manage Data</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"view-more\" href=\"#\">
\t\t\t\t\t\t\t\t\tView More <i class=\"clip-arrow-right-2\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<i class=\"clip-stats\"></i>
\t\t\t\t\t\t\t\t\tSite Visits
\t\t\t\t\t\t\t\t\t<div class=\"panel-tools\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-collapse collapses\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-refresh\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<div class=\"flot-medium-container\">
\t\t\t\t\t\t\t\t\t\t<div id=\"placeholder-h1\" class=\"flot-placeholder\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"clip-pie\"></i>
\t\t\t\t\t\t\t\t\t\t\tAcquisition
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-tools\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-collapse collapses\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-refresh\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flot-mini-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"placeholder-h2\" class=\"flot-placeholder\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"clip-bars\"></i>
\t\t\t\t\t\t\t\t\t\t\tPageviews real-time
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-tools\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-collapse collapses\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-refresh\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flot-mini-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"placeholder-h3\" class=\"flot-placeholder\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t<div class=\"row space12\">
\t\t\t\t\t\t\t\t<ul class=\"mini-stats col-sm-12\">
\t\t\t\t\t\t\t\t\t<li class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"sparkline_bar_good\">
\t\t\t\t\t\t\t\t\t\t\t<span>3,5,9,8,13,11,14</span>+10%
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"values\">
\t\t\t\t\t\t\t\t\t\t\t<strong>18304</strong>
\t\t\t\t\t\t\t\t\t\t\tVisits
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"sparkline_bar_neutral\">
\t\t\t\t\t\t\t\t\t\t\t<span>20,15,18,14,10,12,15,20</span>0%
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"values\">
\t\t\t\t\t\t\t\t\t\t\t<strong>3833</strong>
\t\t\t\t\t\t\t\t\t\t\tUnique Visitors
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"sparkline_bar_bad\">
\t\t\t\t\t\t\t\t\t\t\t<span>4,6,10,8,12,21,11</span>+50%
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"values\">
\t\t\t\t\t\t\t\t\t\t\t<strong>18304</strong>
\t\t\t\t\t\t\t\t\t\t\tPageviews
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t<div class=\"row space12\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"easy-pie-chart\">
\t\t\t\t\t\t\t\t\t\t<span class=\"bounce number\" data-percent=\"44\"> <span class=\"percent\">44</span> </span>
\t\t\t\t\t\t\t\t\t\t<div class=\"label-chart\">
\t\t\t\t\t\t\t\t\t\t\tBounce Rate
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"easy-pie-chart\">
\t\t\t\t\t\t\t\t\t\t<span class=\"cpu number\" data-percent=\"82\"> <span class=\"percent\">82</span> </span>
\t\t\t\t\t\t\t\t\t\t<div class=\"label-chart\">
\t\t\t\t\t\t\t\t\t\t\tNew Visits
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<i class=\"clip-users-2\"></i>
\t\t\t\t\t\t\t\t\tUsers
\t\t\t\t\t\t\t\t\t<div class=\"panel-tools\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-collapse collapses\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-refresh\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body panel-scroll\" style=\"height:300px\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-hover\" id=\"sample-table-1\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"center\">Photo</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Full Name</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"hidden-xs\">Email</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img src=\"assets/images/avatar-1.jpg\" alt=\"image\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Peter Clark</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" rel=\"nofollow\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\tpeter@example.com
\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul role=\"menu\" class=\"dropdown-menu pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i> Edit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-share\"></i> Share
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i> Remove
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img src=\"assets/images/avatar-2.jpg\" alt=\"image\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Nicole Bell</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" rel=\"nofollow\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\tnicole@example.com
\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul role=\"menu\" class=\"dropdown-menu pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i> Edit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-share\"></i> Share
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i> Remove
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img src=\"assets/images/avatar-3.jpg\" alt=\"image\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Steven Thompson</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" rel=\"nofollow\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\tsteven@example.com
\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul role=\"menu\" class=\"dropdown-menu pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i> Edit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-share\"></i> Share
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i> Remove
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img src=\"assets/images/avatar-5.jpg\" alt=\"image\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Kenneth Ross</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" rel=\"nofollow\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\tkenneth@example.com
\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul role=\"menu\" class=\"dropdown-menu pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i> Edit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-share\"></i> Share
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i> Remove
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img src=\"assets/images/avatar-4.jpg\" alt=\"image\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Ella Patterson</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" rel=\"nofollow\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\tella@example.com
\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul role=\"menu\" class=\"dropdown-menu pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i> Edit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-share\"></i> Share
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i> Remove
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<i class=\"clip-checkbox\"></i>
\t\t\t\t\t\t\t\t\tTo Do
\t\t\t\t\t\t\t\t\t<div class=\"panel-tools\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-collapse collapses\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-refresh\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body panel-scroll\" style=\"height:300px\">
\t\t\t\t\t\t\t\t\t<ul class=\"todo\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\" style=\"opacity: 1; text-decoration: none;\">Staff Meeting</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"opacity: 1;\"> today</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\" style=\"opacity: 1; text-decoration: none;\"> New frontend layout</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"opacity: 1;\"> today</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\"> Hire developers</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\"> tommorow</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\">Staff Meeting</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\"> tommorow</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\"> New frontend layout</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\"> this week</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\"> Hire developers</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\"> this week</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\"> New frontend layout</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\"> this month</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\"> Hire developers</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\"> this month</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\" style=\"opacity: 1; text-decoration: none;\">Staff Meeting</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"opacity: 1;\"> today</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\" style=\"opacity: 1; text-decoration: none;\"> New frontend layout</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"opacity: 1;\"> today</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"todo-actions\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"desc\"> Hire developers</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\"> tommorow</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<i class=\"clip-calendar\"></i>
\t\t\t\t\t\t\t\t\tCalendar
\t\t\t\t\t\t\t\t\t<div class=\"panel-tools\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-collapse collapses\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-refresh\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-expand\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-resize-full\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<div id='calendar'></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"clip-bubble-4\"></i>
\t\t\t\t\t\t\t\t\t\t\tChats
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-tools\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-collapse collapses\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-refresh\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-expand\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-resize-full\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body panel-scroll\" style=\"height:460px\">
\t\t\t\t\t\t\t\t\t\t\t<ol class=\"discussion\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"other\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"assets/images/avatar-4.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"messages\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> 51 min </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"self\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"assets/images/avatar-1.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"messages\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\"> 37 mins </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"other\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"assets/images/avatar-3.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"messages\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"self\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"assets/images/avatar-1.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"messages\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"other\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"assets/images/avatar-4.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"messages\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"chat-form\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-mask-date\" placeholder=\"Type a message here...\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-teal\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button> </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end: PAGE CONTENT-->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end: PAGE -->
\t\t</div>
            ";
    }

    // line 458
    public function block_menu($context, array $blocks = array())
    {
        // line 459
        echo "\t\t\t\t\t<ul class=\"main-navigation-menu\">
\t\t\t\t\t\t<li class=\"active open\">
\t\t\t\t\t\t\t<a href=\"index-2.html\"><i class=\"clip-home-3\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\"> Dashboard </span><span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"><i class=\"clip-pencil\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\"> Formation </span><i class=\"icon-arrow\"></i>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"layouts_horizontal_menu1.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> Calendrier </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-new\">new</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"layouts_sidebar_closed.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> List Formateurs </span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"layouts_boxed_layout.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> Suivie Formation </span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"layouts_footer_fixed.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> Suivie Forum </span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"http://www.cliptheme.com/preview/admin/clip-one-rtl/index.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> Statistique </span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"><i class=\"clip-user-2\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\"> Developpement </span><i class=\"icon-arrow\"></i>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"layouts_horizontal_menu1.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> Calendrier </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-new\">new</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"layouts_sidebar_closed.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> action 1 </span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"layouts_boxed_layout.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> acition 2 </span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"layouts_footer_fixed.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> action 3 </span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"http://www.cliptheme.com/preview/admin/clip-one-rtl/index.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> Statistique </span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
                                                <li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"><i class=\"clip-screen\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\"> Action </span><i class=\"icon-arrow\"></i>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"layouts_horizontal_menu1.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> Calendrier </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-new\">new</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"layouts_sidebar_closed.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> action 1 </span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"layouts_boxed_layout.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> acition 2 </span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"layouts_footer_fixed.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> action 3 </span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"http://www.cliptheme.com/preview/admin/clip-one-rtl/index.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> Statistique </span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
                                                <li>
\t\t\t\t\t\t\t<a href=\"http://www.cliptheme.com/preview/frontend/clip-one/index.html\" target=\"_blank\"><i class=\"clip-bars\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\"> Tresorie </span><span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"><i class=\"clip-cog-2\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\"> Gestion General </span><i class=\"icon-arrow\"></i>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"ui_elements.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> Ajouter Membre </span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"ui_buttons.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> Liste Membres </span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"ui_animations.html\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\"> Cotisation </span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
                                        ";
    }

    public function getTemplateName()
    {
        return "JCIBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1750 => 459,  1747 => 458,  941 => 597,  939 => 458,  925 => 446,  922 => 445,  878 => 390,  782 => 293,  779 => 292,  662 => 174,  659 => 173,  554 => 67,  551 => 66,  138 => 1400,  136 => 445,  118 => 429,  116 => 390,  110 => 386,  108 => 292,  102 => 288,  100 => 173,  94 => 169,  92 => 66,  25 => 1,);
    }
}

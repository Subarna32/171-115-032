<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Essential Information of Sylhet</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?=base_url()?>asset2/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?=base_url()?>asset2/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?=base_url()?>asset2/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='<?=base_url()?>asset2///fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?=base_url()?>asset2/css/font.css" type="text/css"/>
<link href="<?=base_url()?>asset2/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="<?=base_url()?>asset2/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="<?=base_url()?>asset2/css/monthly.css">

<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="<?=base_url()?>asset2/js/jquery2.0.3.min.js"></script>
<script src="<?=base_url()?>asset2/js/raphael-min.js"></script>
<script src="<?=base_url()?>asset2/js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="<?=base_url()?>" class="logo">
        Essential Info
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?=base_url()?>asset2/images/2.jpg">
                <span class="username">Hotel</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="<?=base_url()?>Logout"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                 <li>
                    <a href="<?=base_url()?>hotel/">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
				<li <?php if($this->uri->segment(2)=='home'){ echo 'class="active"'; } ?> >
                    <a href="<?=base_url()?>">
                        <i class="fa fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
				<li <?php if($this->uri->segment(2)=='about'){ echo 'class="active"'; } ?> >
                    <a  href="<?=base_url()?>welcome/about">
                        <i class="fa fa-info"></i>
                        <span>About</span>
                    </a>
                </li>
				<li <?php if($this->uri->segment(2)=='contact'){ echo 'class="active"'; } ?> >
                    <a href="<?=base_url()?>welcome/contact">
                        <i class="fa fa-phone"></i>
                        <span>Contact</span>
                    </a>
                </li>
				
                <li class="sub-menu">
                    <a href="javascript:;" class="<?php if($this->uri->segment(2)=='insert_gallery'||$this->uri->segment(2)=='insert_hotel'||$this->uri->segment(2)=='insert_room'){ echo 'active'; } ?>" >
                        <i class="fa fa-plus"></i>
                        <span>Insert Information</span>
                    </a>
                    <ul class="sub">
                        <li><a class="<?php if($this->uri->segment(2)=='insert_hotel'){ echo 'active';} ?>" href="<?=base_url()?>hotel/insert_hotel">Hotel Information</a></li>
                        <li><a class="<?php if($this->uri->segment(2)=='insert_gallery'){ echo 'active';} ?>" href="<?=base_url()?>hotel/insert_gallery">Gallery</a></li>
                        </ul>
                </li>
				
				<li class="sub-menu">
                    <a href="javascript:;" class="<?php if($this->uri->segment(2)=='view_bookings'||$this->uri->segment(2)=='view_gallery'||$this->uri->segment(2)=='view_hotel'||$this->uri->segment(2)=='view_room'){ echo 'active'; } ?>" >
                        <i class="fa fa-eye"></i>
                        <span>View Information</span>
                    </a>
                    <ul class="sub">
                        <li><a class="<?php if($this->uri->segment(2)=='view_hotel'){ echo 'active';} ?>" href="<?=base_url()?>hotel/view_hotel">Hotel Information</a></li>
                        <li><a class="<?php if($this->uri->segment(2)=='view_bookings'){ echo 'active';} ?>" href="<?=base_url()?>hotel/view_bookings">New Bookings</a></li>
                        <li><a class="<?php if($this->uri->segment(2)=='view_gallery'){ echo 'active';} ?>" href="<?=base_url()?>hotel/view_gallery">Gallery</a></li>
                    </ul>
                </li>
                
            </ul>            
			</div>
        <!-- sidebar menu end-->
    </div>
</aside>

<!--sidebar end-->
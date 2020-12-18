<!DOCTYPE html>
<html lang="en">
<head>
<title>Corporative a Corporate Category Flat Bootstrap Responsive Website Template | Services :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Corporative Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="<?=base_url()?>asset4/application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?=base_url()?>asset4/css/bootstrap.css" rel="stylesheet" type="<?=base_url()?>asset4/text/css" media="all" />
<link href="<?=base_url()?>asset4/css/style.css" rel="stylesheet" type="<?=base_url()?>asset4/text/css" media="all" />
<!-- js -->
<script type="<?=base_url()?>asset4/text/javascript" src="<?=base_url()?>asset4/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?=base_url()?>asset4/css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="<?=base_url()?>asset4/https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href='<?=base_url()?>asset4///fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
 <!-- banner -->
    <div class="inner-banner" id="home">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">

                <h1>
                    <a class="navbar-brand text-white" href="<?=base_url()?>">
                        Healthy Tips 
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item  mr-3">
                            <a class="nav-link text-white" href="<?=base_url()?>">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-3 <?php if($this->uri->segment(2)=='about'){ echo 'class="active"'; } ?>">
                            <a class="nav-link text-white text-capitalize" href="<?=base_url()?>welcome/about">about</a>
                        </li>
                        <li class="nav-item  mr-3 <?php if($this->uri->segment(1)=='services'){ echo 'class="active"'; } ?>">
                            <a class="nav-link text-white text-capitalize" href="<?=base_url()?>signup">Sign Up</a>
                        </li>
						<li class="nav-item  mr-3 <?php if($this->uri->segment(1)=='services'){ echo 'class="active"'; } ?>">
                            <a class="nav-link text-white text-capitalize" href="<?=base_url()?>login">Login</a>
                        </li>
                        <li class="nav-item dropdown mr-3 ">
                            <a class="nav-link dropdown-toggle  text-white text-capitalize" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='fitness'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/fitness">Fitnesss</a>
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='depression'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/depression">Depression</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='pregnancy'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/pregnancy">Pregnancy Care</a>
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='skincare'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/skincare">Skin Care</a>
                            </div>
                        </li>
						
                        <li class="nav-item <?php if($this->uri->segment(2)=='contact'){ echo 'class="active"'; } ?>">
                            <a class="nav-link  text-white text-capitalize" href="<?=base_url()?>welcome/contact">contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- //header -->

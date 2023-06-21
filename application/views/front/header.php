<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Risevilla</title>
    <!-- Stylesheets -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION SETTINGS STYLES -->
    <link href="<?php echo base_url();?>assets/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="<?php echo base_url();?>assets/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Color Switcher Mockup-->
    <link href="<?php echo base_url();?>assets/css/color-switcher-design.css" rel="stylesheet">

    <!--Color Themes-->
    <link id="theme-color-file" href="<?php echo base_url();?>assets/css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="<?php echo base_url();?>assets/https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="<?php echo base_url();?>assets/js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader"></div> -->

        <!-- Main Header-->
    <header class="main-header style-v1">
    	
        <!--Header Top-->
    	<div class="header-top">
            <div class="outer-container">
                <div class="row clearfix">
                    <!--Top Left-->
                    <div class="top-left col-md-4 col-sm-12 col-xs-12">
                    	<ul class="clearfix">
                        	<li>welcome to sproperty</li>
                        </ul>
                    </div>
                    <!--Top Right-->
                    <div class="top-right pull-right col-md-8 col-sm-12 col-xs-12">
                    	<ul class="social-nav">
                        	<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    	<ul class="list">
                        	<li><span class="icon fa fa-phone"></span>(+05) 025 024 0245</li>
                            <li><a href="#"><span class="icon fa fa-envelope"></span>example.12@domain.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Box -->
    	<div class="main-box">
            <div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo"><a href="index.html"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></a></div>
                </div>
                
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Homepage One</a></li>
                                        <li><a href="index-2.html">Homepage Two</a></li>
                                        <li><a href="index-3.html">Homepage Three</a></li>
                                        <li class="dropdown"><a href="#">Headers Style</a>
                                            <ul>
                                                <li><a href="index.html">Header Style One</a></li>
                                                <li><a href="index-2.html">Header Style Two</a></li>
                                                <li><a href="index-3.html">Header Style Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">AboutUs</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="agents.html">Agents</a></li>
                                        <li><a href="agents-single.html">Agents Single</a></li>
                                        <li><a href="appointment.html">Appointment</a></li>
                                    </ul>
                                </li>
                                <li><a href="features.html">Features</a></li>
                                <li class="dropdown"><a href="#">Gallery</a>
                                    <ul>
                                        <li><a href="gallery.html">Gallery Fullwidth</a></li>
                                        <li><a href="gallery-grid.html">Gallery Three Column</a></li>
                                        <li><a href="gallery-single.html">Gallery Single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-grid.html">Our Blog</a></li>
                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact us</a></li>
                             </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    
                    <!--Options Box-->
                    <div class="options-box">
                        <ul class="options-nav">
                            
                            <!--Search Box-->
                            <!-- <li class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->
                            <li class="menu-btn hidden-bar-opener"><span class="flaticon-menu-button-of-three-lines"></span></li>
                        </ul>
                    </div>
                    
                </div>
                <!--Nav Outer End-->
                
            </div>
        </div>
    
    	<!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container">
            	
                <div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box pull-left">
                        <div class="logo"><a href="index.html"><img src="<?php echo base_url();?>assets/images/logo-small.png" alt=""></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="#">Home</a>
                                        <ul>
                                            <li><a href="index.html">Homepage One</a></li>
                                            <li><a href="index-2.html">Homepage Two</a></li>
                                            <li><a href="index-3.html">Homepage Three</a></li>
                                            <li class="dropdown"><a href="#">Headers Style</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                    <li><a href="index-3.html">Header Style Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">AboutUs</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="agents.html">Agents</a></li>
                                            <li><a href="agents-single.html">Agents Single</a></li>
                                            <li><a href="appointment.html">Appointment</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="features.html">Features</a></li>
                                    <li class="dropdown"><a href="#">Gallery</a>
                                        <ul>
                                            <li><a href="gallery.html">Gallery Fullwidth</a></li>
                                            <li><a href="gallery-grid.html">Gallery Three Column</a></li>
                                            <li><a href="gallery-single.html">Gallery Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog-grid.html">Our Blog</a></li>
                                            <li><a href="blog-detail.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact us</a></li>
                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                    </div>
                    <!--Nav Outer End-->
                    
            	</div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->



    <section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button><span class="flaticon-cancel-1"></span></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
            
            <div class="logo">
            	<a href="index.html"><img src="<?php echo base_url();?>assets/images/logo.png" alt="" /></a>
            </div>
            <div class="content-box">
            	<h2>About Us</h2>
                <div class="text">Consectetur adipiscing elit. Maecenas bibendum nisl ut mi cursus maximus. Etiam et eros massa. Vestibulum scelerisque enim pulvinar, aliquam erat sit amet, hendrerit dui</div>
                <a href="#" class="theme-btn btn-style-two">Consultation</a>
            </div>
            <div class="contact-info">
            	<h2>Contact us</h2>
                <ul class="list-style-six">
                	<li><span class="icon fa fa-map-marker"></span>Rock St 12, Newyork City, USA</li>
                    <li><span class="icon fa fa-phone"></span>(000) 000-000-00000</li>
                    <li><span class="icon fa fa-envelope-o"></span>sproperty@gmail.com</li>
                    <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 <br> Sunday: Closed</li>
                </ul>
            </div>
        </div><!-- / Hidden Bar Wrapper -->
        
    </section>




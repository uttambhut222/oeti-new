<?php
    //settings
    $cache_ext  = '.html'; //file extension
    $cache_time     = 3600;  //Cache file expires afere these seconds (1 hour = 3600 sec)
    $cache_folder   = 'cache/'; //folder to store Cache files
    $ignore_pages   = array('', '');

    $dynamic_url    = 'http://'.$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']; // requested dynamic page (full url)
    $cache_file     = $cache_folder.md5($dynamic_url).$cache_ext; // construct a cache file
    $ignore = (in_array($dynamic_url,$ignore_pages))?true:false; //check if url is in ignore list

    if (!$ignore && file_exists($cache_file) && time() - $cache_time < filemtime($cache_file)) { //check Cache exist and it's not expired.
        ob_start('ob_gzhandler'); //Turn on output buffering, "ob_gzhandler" for the compressed page with gzip.
        readfile($cache_file); //read Cache file
        echo '<!-- cached page - '.date('l jS \of F Y h:i:s A', filemtime($cache_file)).', Page : '.$dynamic_url.' -->';
        ob_end_flush(); //Flush and turn off output buffering
        exit(); //no need to proceed further, exit the flow.
    }
    //Turn on output buffering with gzip compression.
    ob_start('ob_gzhandler');
    ######## Your Website Content Starts Below #########
	?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link type="image/x-icon" rel="shortcut icon" href="assets/images/favicon.ico"/>
	<title>OpenEyes Technologies Inc.</title>
	<link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"/>
	<link href="assets/css/style.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/timeline.css">
	<link type="text/css" rel="stylesheet" href="assets/css/flaticon.css"/>
	<link type="text/css" rel="stylesheet" href="assets/css/sweetalert2.min.css"/>
</head>
<body class="body-full-page">
	<div class="loader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<div class="click-capture"></div>
	
	<!-- Sidebar Menu-->

    <div class="menu"> 
      <span class="close-menu icon-cross2 right-boxed"></span>	  
	  <ul class="nav">
		<li class="dropdown">
		  <a href="AboutUs" class="dropdown-toggle" data-toggle="dropdown">Who<b class="caret"></b></a>
		  <ul class="dropdown-menu">
			<li><a href="Milestones"><i class="fa fa-angle-right"></i>Milestones</a></li>
				<li><a href="VisionMission"><i class="fa fa-angle-right"></i>Vision & Mission</a></li>
				<li><a href="Family"><i class="fa fa-angle-right"></i>Family</a></li>
		  </ul>
		</li>		
		<li>
			<a href="Services">What</a>
        </li>
        <li>
			<a href="Portfolio">Work</a>
        </li>
        <li>
			<a href="Process">How</a>
        </li>
		 <li>
			<a href="OurClients">Whom</a>
        </li>                          
		<li class="dropdown">
		  <a href="WhyUs" class="dropdown-toggle" data-toggle="dropdown">Why<b class="caret"></b></a>
		  <ul class="dropdown-menu">
			<li><a href="Career"><i class="fa fa-angle-right"></i>Career</a></li>
		  </ul>
		</li>  
		<li>
		  <a href="index#ContactUs">Where</a>
		</li> 		
	  </ul> 	  
    </div>	
	<!-- End Sidebar Menu-->
	
	<header class="navbar navbar-2 navbar-white boxed">
		<div class="navbar-bg"></div>
		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<div class="content_form">
			<a class="inquire_now">Contact us</a>
		</div>
		<ul class="social_links header_links">
			<li><a href="https://twitter.com/OpenEyesTech" target="_blank"><i class="flaticon-twitter-logo-silhouette"></i></a>
			</li>
			<li><a href="https://www.linkedin.com/company/13243146/" target="_blank"><i class="flaticon-linkedin"></i></a>
			</li>
		</ul>
		<a class="brand" href="index#WelcomeOpenEyes">
        <img class="brand-img" alt="" src="assets/images/brand.png">
      </a>
	</header>
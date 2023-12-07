<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title> <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<meta charset="utf-8" />
	<meta name="description" content="Edventure Infotech There are design companies, and then there are user experience, design, consulting, interface design, brilliant, and professional. ">
	<!-- Mobile Meta -->
	<!--<link rel="preconnect" href="https://fonts.googleapis.com">-->
	<!--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
	<!--<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700;800;900&display=swap" rel="preload">-->
	<link rel="preload" href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap">
	</noscript>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Favicons and Icons -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/">
	 <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"> 
	<!-- or, set /favicon.ico for IE10 win -->
	<meta name="msapplication-TileColor" content="#F01D4F">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/">
	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->
	
<!-- 		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-32579931-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-32579931-1');
		</script> 

</head>

<body <?php body_class(); ?>>

	<header class="header light">
		<div class="headerFiexd">
			<div class="container">
				<div>
					<div id="header-logo" class="row d-flex">
<!-- 						<div class="col-sm-5 bgLogocss col-md-3"> -->
						<div class="col-sm-5 col-md-4">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="">								
								<img src="<?php echo get_template_directory_uri(); ?>/images/edventure-logo.png" class="header-logo" alt="Logo"  height="100%" width="100%"/>
							</a>
						</div>
						<div class="col-sm-12 col-md-8 text-center res_menu hidden-sm-down" id="site-navigation">
							<!-- <span class="responsive-menu" id="responsive-menu"><i class="fa fa-bars"></i></span> -->
							<nav class="primary-menu">
								<div class="menu">
									<?php
									//menu behaving odd? check it's assigned in appearance > menus
									$args = array(
										'theme_location'    => 'main-menu',
										'container'         => false,
										'menu_class'        => 'menus-header',
										'href'              => 'javascript:void(0)',
										'menu-header'       => 'menus-header',
								// 		'href'              => 'javascript:void(0)',
										//'depth'           => 1
									);
									wp_nav_menu($args); ?>
								</div>
							</nav>
						</div>
						<div class="responsive-menu" id="responsive-menu">
							<i class="fa fa-bars"></i>
							<?php //echo do_shortcode('[wp_megamenu menu="8"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--container-->
	</header>   
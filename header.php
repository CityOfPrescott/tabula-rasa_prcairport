<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie10 lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie10 lt-ie9"><![endif]-->
<!--[if (IE 9)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie10"><![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.min.js" type="text/javascript"></script>
		<![endif]-->

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="inner-header">
			<div class="site-branding">
				<h1 class="logo"><a href="http://www.cityofprescott.net/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Prescott Municipal Airport" /></a></h1>
				<h2 class="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h2>
				<h2 class="site-description"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'description' ); ?></a></h2>
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="menu-wrapper">
					<h2 class="menu-title"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h2>
					<h3 class="menu-toggle"><?php _e( 'Menu', 'tabula_rasa' ); ?></h3>
					<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'tabula_rasa' ); ?>"><?php _e( 'Skip to content', 'tabula_rasa' ); ?></a>
				</div>
				<?php tr_main_nav(); ?>
			</nav><!-- #site-navigation -->

			<?php $header_image = get_header_image();
			if ( ! empty( $header_image ) ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
			<?php endif; ?>
		</div>
	</header><!-- #masthead -->

	<div class="site-main-wrapper">
	<div id="main" class="site-main">
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="http://www.chictweak.com/images/favicon.ico">
	<meta property="og:image" content="http://www.chictweak.com/images/logo.gif">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link type="text/css" rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<script src="<?php echo get_template_directory_uri(); ?>/js/chictweak.js"></script>
</head>

<body <?php body_class(); ?>>
	<div id="topbar" class="container">
		<div class="row">
			<div id="site-search" class="col-xs-6 col-md-6 col-lg-6">
				<?php get_search_form(); ?>
			</div>
			<div id="mailing-list" class="col-xs-6 col-md-6 col-lg-6">
				<?php chictweak_get_mailinglist_form(); ?>
			</div>
		</div>
	</div>
	<div id="page" class="hfeed site container">
		<header id="masthead" class="site-header row" role="banner">
			<div class="col-xs-8 col-md-9 col-lg-9">
				<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg"/>
				</a>
			</div>
			<div id="shop-here" class="col-xs-4 col-md-3 col-lg-3">
				<a id="shop-here-link" href="http://www.chictweak.com" target="_blank">
					<img id="shop-here-img" src="<?php echo get_template_directory_uri(); ?>/images/shop-here.png" on-hover-src="<?php echo get_template_directory_uri(); ?>/images/shop-here.gif" alt="shop here!"/>
				</a>
				<div id="shipping">Free shipping on orders over $75</div>
			</div>
		</header><!-- #masthead -->
		<div id="nav" class="row">
			<div id="navbar" class="navbar col-xs-8 col-md-9 col-lg-9">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
			<div class="col-xs-4 col-md-3 col-lg-3">
			</div>
		</div>

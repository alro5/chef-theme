<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>chef sitet</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Marck+Script' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri (); ?>/css/all.css" />
	<script src="<?php echo get_template_directory_uri (); ?>/src/js/modernizr.custom.js" type="text/javascript"></script>
	<script src="https://use.fontawesome.com/48e12978be.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav>
		<div class="centered">
			<a class="logo--graphical" href="<?php bloginfo('url'); ?>/">
				A
			</a>
			<?php 
				wp_nav_menu( array(
			    	'menu' => 'Menu',
			    	'container' => ''
				));
			?>
		</div>
	</nav>

	<div class="mobile__nav-wrap">
		<div class="button-nav--mobile">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<a class="logo logo--graphical show--portable" href="<?php bloginfo('url'); ?>/">
			A
		</a>
		<nav class="mobile__nav">
			<?php 
				wp_nav_menu( array(
			    	'menu' => 'Menu',
			    	'container' => ''
				));
			?>
		</nav>
	</div>
	<aside>
		<div class="button--aside">
			<i class="fa fa-phone"></i>
		</div>
		<h3>Kontakt os</h3>
		<?php echo do_shortcode( '[contact-form-7 id="41" title="Kontakt os"]' ); ?>
	</aside>
	<main>

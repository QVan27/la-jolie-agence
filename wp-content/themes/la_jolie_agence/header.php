<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package la_jolie_agence
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="wrap">

		<!-- header -->
		<header id="header">
			<nav class="navbar">
				<div class="container">
					<a href="" class="nav-brand"><img src="" alt=" Logo" class="nav-logo"></a>
					<ul class="nav">
						<li class="nav-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link">Accueil</a></li>
						
						<li class="nav-item"><a href="<?php echo esc_url(home_url('about')); ?>" class="nav-link">À propos</a></li>
						
						<li class="nav-item"><a href="<?php echo esc_url(home_url('prestation')); ?>" class="nav-link">Prestation</a></li>
						
						<li class="nav-item"><a href="<?php echo esc_url(home_url('contact')); ?>" class="nav-link">Contact</a></li>
						
						<li class="nav-item"><a href="<?php echo esc_url(home_url('gallerie')); ?>" class="nav-link">Gallerie</a></li>
					</ul>
				</div>
			</nav>
			<!-- <nav class="navbar">
				<div class="container">
					<a href="" class="nav-brand"><img src="" alt=" Logo" class="nav-logo"></a>
					<ul class="nav">
						<li class="nav-item"><a href="" class="nav-link">Accueil</a></li>
						
						<li class="nav-item"><a href="" class="nav-link">À propos</a></li>
						
						<li class="nav-item"><a href="" class="nav-link">Prestation</a></li>
						
						<li class="nav-item"><a href="" class="nav-link">Contact</a></li>
						
						<li class="nav-item"><a href="" class="nav-link">Gallerie</a></li>
					</ul>
				</div>
			</nav> -->
		</header>
		
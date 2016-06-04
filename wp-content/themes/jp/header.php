<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jp
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="c-overlay"></div>
<nav class="c-mobile-nav" role="navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu',
		'menu_class' => 'c-mobile-nav__menu',
		'container' => false,
		) ); ?>
</nav>
<div class="o-wrapper">
	<div class="o-container">
		<header class="c-header">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="c-header__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<h2 class="c-header__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
				<?php
				endif;?>

			<nav class="c-nav" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu',
					'menu_class' => 'c-nav__menu',
					'container' => false,
					) ); ?>
			</nav>
			<button class="c-hamburger j-menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="c-hamburger__patty"></span></button>
		</header>
	</div>
<div class="o-wrapper">

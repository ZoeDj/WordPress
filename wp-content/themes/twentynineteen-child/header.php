<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header' : 'site-header'; ?>">
        
			<nav class="top-nav menu">
				<?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
			</nav>
			
			<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
				
				<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
				<?php rewind_posts(); ?>
			</div>
		    <?php endif; ?>
	</header>
	<div id="content" class="site-content">
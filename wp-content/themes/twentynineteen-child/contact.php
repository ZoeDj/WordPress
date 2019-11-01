<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			while ( have_posts() ) :
				the_post();
                $main_title = get_field('main_title');
				$main_text = get_field('main_text');
				$img_top = get_field('img_top'); 
			endwhile; // End of the loop.
			?>

        </main><!-- #main -->
        <div class="top_part">
			<img src="<?php echo $img_top; ?>" />
			<h3><?php echo $main_title; ?></h3>
			<p><?php echo $main_text; ?></p>
		</div>
	</section><!-- #primary -->

<?php
get_footer();

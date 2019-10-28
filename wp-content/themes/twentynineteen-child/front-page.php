<?php
/**
 * The template for displaying homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); 
				$main_title = get_field('main_title');
				$main_text = get_field('main_text');
				$img_top = get_field('img_top'); 
				$img_1 = get_field('img_1'); 
				$services_title = get_field('services_title'); 
				$services_text = get_field('services_text'); 
				$reasons_title = get_field('reasons_title'); 
				$reasons_title2 = get_field('reasons_title2'); 
				$reasons_title3 = get_field('reasons_title3'); 
				$reasons_text = get_field('reasons_text'); 
				$reasons_text2 = get_field('reasons_text2'); 
				$reasons_text3 = get_field('reasons_text3'); 
				$reasons_main_title = get_field('reasons_main_title'); 
				$reasons_main_text = get_field('reasons_main_text'); 
				$process_title  = get_field('process_title'); 
				$number_1  = get_field('number_1'); 
				$number_2  = get_field('number_2'); 
				$number_3  = get_field('number_3');
				$phase1 = get_field('phase1');  
				$phase2 = get_field('phase2'); 
				$phase3 = get_field('phase3'); 
				$phase1_text = get_field('phase1_text'); 
				$phase2_text = get_field('phase2_text'); 
				$phase3_text = get_field('phase3_text');
				$benefits_title = get_field('benefits_title');
				$benefits_subtitle1 = get_field('benefits_subtitle1');
				$benefits_subtitle2 = get_field('benefits_subtitle2');
				$benefits_subtitle3 = get_field('benefits_subtitle3');
				$benefits_text1 = get_field('benefits_text1');
				$benefits_text2 = get_field('benefits_text2');
				$benefits_text3 = get_field('benefits_text3');
				$img_2 = get_field('img_2');
				$contact_us_title = get_field('contact_us_title');  
				$link_3 = get_field('link_3');  
			 ?>
				<?php the_content(); ?>

				<div class="top_part">
					<img src="<?php echo $img_top; ?>" />
					<h3><?php echo $main_title; ?></h3>
					<p><?php echo $main_text; ?></p>
					<a href="<?php echo site_url('http://localhost:8888/refineryhaus_2/?page_id=30'); ?>" class="btn">Contact us</a>
				</div>

				<div class="services-photo">
					<img src="<?php echo $img_1; ?>" />
				</div>
				<div class="services">
					<h3><?php echo $services_title; ?></h3>
					<p><?php echo $services_text; ?></p>
					<a href="<?php echo site_url('http://localhost:8888/refineryhaus_2/?page_id=27'); ?>" class="btn services">SEE WHAT YOU MIGHT PAY </a>
				</div>
				
				<div class="reasons">
					<h4><strong><?php echo $reasons_title; ?></strong></h4>
					<p><?php echo $reasons_text; ?></p>
					<h4><strong><?php echo $reasons_title2; ?></strong></h4>
					<p><?php echo $reasons_text2; ?></p>
					<h4><strong><?php echo $reasons_title3; ?></strong></h4>
					<p><?php echo $reasons_text3; ?></p>
				</div>
				
				<div class="main-reason">
					<h3><?php echo $reasons_main_title; ?></h3>
					<p><?php echo $reasons_main_text; ?></p>
				</div>
				
				<div class="process">
					<h3><?php echo $process_title; ?></h3>
					<div class="background-image"></div>
				<div class="phase">
					<h3 class="number"><?php echo $number_1; ?></h3>
					<h4><?php echo $phase1; ?></h4>
					<p><?php echo $phase1_text; ?></p>
				</div>
				<div class="phase">
					<h3 class="number"><?php echo $number_2; ?></h3>
					<h4><?php echo $phase2; ?></h4>
					<p><?php echo $phase2_text; ?></p>
				</div>
				<div class="phase">
					<h3 class="number"><?php echo $number_3; ?></h3>
					<h4><?php echo $phase3; ?></h4>
					<p><?php echo $phase3_text; ?></p>
				</div>
				</div>

				<div class= "benefits">
					<h4><?php echo $benefits_title; ?></h4>
					<p><strong><?php echo $benefits_subtitle1; ?></strong></p>
					<p><strong><?php echo $benefits_subtitle2; ?></strong></p>
					<p><strong><?php echo $benefits_subtitle3; ?></strong></p>
				</div>
				<div class="benefits-text">
					<p><?php echo $benefits_text1; ?></p>
				</div>
				<br>
				<div class="contact-us">
					<img src="<?php echo $img_2; ?>" />
					<h3><?php echo $contact_us_title; ?></h3>
					<a href="<?php echo site_url('http://localhost:8888/refineryhaus_2/?page_id=30'); ?>" class="btn services">CONTACT US TO GET STARTED</a>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php
get_footer();
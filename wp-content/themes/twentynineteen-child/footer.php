<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation white-text" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
                    <?php
                
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
                </nav><!-- .footer-navigation -->
                <div class="social-btns">
					<a href="" class="soc-icon fb"></a>
					<a href="" class="soc-icon ln"></a>
				    </div>
			<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
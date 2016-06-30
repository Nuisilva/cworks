<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _scorch
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-links">
		<?php
		if(is_active_sidebar('footer-1')){
			dynamic_sidebar('footer-1');
		}
		if(is_active_sidebar('footer-2')){
			dynamic_sidebar('footer-2');
		}
		if(is_active_sidebar('footer-3')){
			dynamic_sidebar('footer-3');
		}
		if(is_active_sidebar('footer-4')){
			dynamic_sidebar('footer-4');
		}
		if(is_active_sidebar('footer-5')){
			dynamic_sidebar('footer-5');
		}
		?>
	</div>
	<div class="footer-links">
		<div class="site-info">
			<?php printf( __( '&copy; Copyright  %1$s %2$s <br> %3$s', 'dot' ), date("Y"), bloginfo('name').' |  All rights reserved.', '<a href="/terms-conditions/">Terms and Conditions</a>' ); ?>
		</div>
		<div class="social">
			<?php if( have_rows('social_links', 'option') ): ?>
				<?php while( have_rows('social_links', 'option') ): the_row(); ?>
					<a href="<?php the_sub_field('social_link')?>" <?php if(get_sub_field('social_icon')=="gplus"):?>rel="publisher"<?php endif;?>><span class="icon-<?php the_sub_field('social_icon')?>"></span></a>
				<?php endwhile; ?>
			<?php endif; ?>

		</div><!-- .social -->
	</div>
	<?php echo get_field('footer_message', 'option');?>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

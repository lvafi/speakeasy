<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package speakeasy
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="footer-sections">
		    	<?php $footer_page = get_page_by_title ('footer'); ?>
				  <img src="<?php the_field('footer_image', $footer_page)?>" />
			</div>
			<div class="footer-sections">
				     <h2>Hours of Operation</h2>
				     <label>Monday: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label> <span><?php the_field('monday', $footer_page)?> </span>
				     <label>Tuseday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><span><?php the_field('tuseday', $footer_page)?></span>
						 <label>Wednesday: </label><span><?php the_field('wednesday', $footer_page) ?></span>
						 <label>Thursday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><span><?php the_field('thursday', $footer_page) ?></span>
             <label>Friday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><span><?php the_field('friday', $footer_page) ?></span>
			       <label>Saturday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><span><?php the_field('friday', $footer_page) ?></span>
						 <label>Sunday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><span><?php the_field('friday', $footer_page) ?></span>
			</div>
			<div class="footer-sections"> 
				<h2>Location</h2>
				<p>921 Granville St, Vancouver, BC V6Z 1L3</p>
				<h2>Phone</h2>
				<p>(604) 685-553</p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

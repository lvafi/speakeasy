<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package speakeasy
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>
				<section class="home-hero-container">

					    <div class="home-hero">
								<img src='http://localhost:8888/speakeasy/wp-content/uploads/2019/04/speakeasy-logo-whitetext-laptop.png'/>
            
								<?php
												wp_nav_menu( array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
												) );
								?>
							</div>
								<p>who's hungry?</p>
							
						  
				</section>
			
			

	  <?php 	endwhile; // End of the loop. ?>
  
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

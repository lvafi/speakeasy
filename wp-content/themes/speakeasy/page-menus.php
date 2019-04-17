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

		<?php	while ( have_posts() ) :	the_post();   ?>

			   <section>
              <div class="w3-bar w3-black">
                  <button class="w3-bar-item w3-button" onclick="openCity('London')">London</button>
                  <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Paris</button>
              </div>
              <div id="London" class="w3-container city">
                  <h2>London</h2>
                  <p>London is the capital city of England.</p>
              </div>

              <div id="Paris" class="w3-container city" style="display:none">
                  <h2>Paris</h2>
                  <p>Paris is the capital of France.</p> 
              </div>
         </section>

		<?php endwhile; // End of the loop.	?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

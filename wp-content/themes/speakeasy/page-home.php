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
							<div class="my-h1">
									<div><h1>there is no better place </h1><h1> to enjoy a game</h1></div>
									<div class="button-1"><button class="my-button">book a table</button></div>
						  </div>
						  
				</section>
				<section class="hungry">
						<h1>Hungry? We got you</h1>
						<p>Local craft beers, cocktails and comfort food, on tap</p>
				</section>

				<div class="container-figure">
					   	<figure class="figurefx pushup food-menu"> 
								<img  src="<?php the_field('food_menu_image')?>" />
								<figcaption>food menu</figcaption>
							</figure>
					
							<figure class="figurefx pushup food-menu">
								<img src="<?php the_field('drink_menu_image')?>" />
								<figcaption>drinks menu</figcaption>
							</figure>
					</div>
					<section class="casual-bar">
						<div class="casual-bar-image">
								<img src="<?php the_field('casual_bar_image')?>" />
						</div>
						<div class="casual-bar-content">
					      	<?php the_field('casual_bar_content')?>
								  <button class="my-button">view more</button>
						</div>
					</section>

					<section class="pizza">
						<div class="pizza-content">
								<?php the_field('egg_content')?>
								<button class="black-button">see our menu</button>
						</div>
						<div class="egg-image"><img src="<?php the_field('egg_image')?>" />
					  </div>
					</section>
					<section class="pizza">
						<div class="egg-content">
								<?php the_field('pizza_content')?>
								<button class="black-button">see our menu</button>
						</div>
						<div class="egg-image"><img src="<?php the_field('pizza_image')?>" />
					  </div>
					</section>
				
			
			

	  <?php 	endwhile; // End of the loop. ?>
  
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

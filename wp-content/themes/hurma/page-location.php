<?php
/**
 * Template Name: Location
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hurmaEducation
 */


get_header(); ?>


<main class="main scroll-animate animate-in">

	<div data-wow-duration="1.5s" class="main__in container wow fadeInUp">
		<div class="main__row row">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			<!-- <h1 data-wow-duration="1.5s" data-wow-delay="1s" data-title="hurma insider" class="main__title wow break-lines">
				<div class="break-lines__inner">Место проведения</div>
			</h1> -->
		</div>
	</div>
</main>
<div class="map map_second">
	<?php

		$address = get_field('gl__address', 'option');
		$phone   = get_field('gl__phone', 'option');
		$email   = get_field('gl__email', 'option');


	?>

	<div data-wow-duration="1.5s" class="map__in container wow fadeInUp">
		<div class="map__row row">
			<h2 class="map__title">Адрес</h2>
			<div class="map__text">
				<?php if ($address): ?>

					<p><?php echo $address; ?></p>

				<?php endif; ?>

				<?php if ($email): ?>

					<a href="mailto:<?php echo $email; ?>" class="map__mail"><?php echo $email; ?></a>

				<?php endif; ?>

				<?php if ($phone): ?>

					<a href="<?php echo 'tel:' . str_replace( array( ")", "(", " ", "-", ), "", $phone ); ?>" class="map__phone">+<?php echo $phone; ?></a>

				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="map__area-w">
		<div id="map" class="map__area"></div>
	</div>
</div>


<?php
get_footer();

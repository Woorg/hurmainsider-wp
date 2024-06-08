<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hurmaEducation
 */

?>

<div class="main__row row <?php post_class(); ?>">
	<h1 data-title="hurma insider" class="main__title wow break-lines">
		<div data-wow-duration="1.5s" data-wow-delay="2s" class="break-lines__line">
			<div class="break-lines__inner"><?php the_title(); ?></div>
		</div>
	</h1>
	<?php the_content(); ?>
</div>

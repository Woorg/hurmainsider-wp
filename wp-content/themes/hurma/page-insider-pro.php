<?php
/**
 * Template Name: Hurma Insider Pro
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



<?php

if ( have_rows('blocks')):

	while( have_rows('blocks') ): the_row();

		if( get_row_layout() == 'hero' ):

			get_template_part( 'components/'. get_row_layout() );

		elseif( get_row_layout() == 'courses' ):

			get_template_part( 'components/'. get_row_layout() );

		elseif( get_row_layout() == 'advantages' ):

			get_template_part( 'components/'. get_row_layout() );
		elseif( get_row_layout() == 'problems' ):

			get_template_part( 'components/'. get_row_layout() );

		elseif( get_row_layout() == 'complete' ):

			get_template_part( 'components/'. get_row_layout() );

		elseif( get_row_layout() == 'teachers' ):

			get_template_part( 'components/'. get_row_layout() );

		elseif( get_row_layout() == 'graduates' ):

			get_template_part( 'components/'. get_row_layout() );

		elseif( get_row_layout() == 'video-reviews' ):

			get_template_part( 'components/'. get_row_layout() );

		elseif( get_row_layout() == 'process' ):

			get_template_part( 'components/'. get_row_layout() );

		elseif( get_row_layout() == 'course' ):

			get_template_part( 'components/'. get_row_layout() );

		elseif( get_row_layout() == 'programm' ):

			get_template_part( 'components/'. get_row_layout() );

		elseif( get_row_layout() == 'participation' ):

			get_template_part( 'components/'. get_row_layout() );

		elseif( get_row_layout() == 'schedule' ):

			get_template_part( 'components/'. get_row_layout() );

		elseif( get_row_layout() == 'map' ):

			get_template_part( 'components/'. get_row_layout() );

		elseif( get_row_layout() == 'questions' ):

			get_template_part( 'components/'. get_row_layout() );

		endif;

	endwhile;

endif; ?>


<?php
get_footer();

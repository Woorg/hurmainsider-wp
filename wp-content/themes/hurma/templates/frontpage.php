<?php

/**

 * Template Name: Главная страница

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

		endif;

	endwhile;

endif; ?>

<?php get_footer();


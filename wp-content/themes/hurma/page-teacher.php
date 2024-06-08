<?php
/**
 * Template Name: Teacher
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

<main class="main">
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

						elseif( get_row_layout() == 'teachersfull' ):

							get_template_part( 'components/'. get_row_layout() );

						endif;

					endwhile;

				endif; ?>


		</div>
	</div>
</main>


<?php
get_footer();

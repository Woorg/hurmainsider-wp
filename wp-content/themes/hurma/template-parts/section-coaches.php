<section class="coaches">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="section__title">Преподаватели</h2>
			</div>
		</div>

		<div class="coaches__wrap">
			<div class="row">
				<div class="col">
					<div class="coach-carousel">
						<?php

						$args = array(
							'post_type' => 'tribe_organizer'
						);

						$query = new WP_Query( $args );

						// Цикл
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post(); ?>

								<div class="coach__item">
									<div class="coach__image">
										<img src="<?php the_field('coach__photo'); ?>" alt="<?php the_title(); ?>">
									</div>

                                    <h2 class="coach__name"><?php the_title(); ?></h2>

                                    <div class="coach__desc"><?php the_content(); ?></div>
									
								</div>

						<?php }}
						/* Возвращаем оригинальные данные поста. Сбрасываем $post. */
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
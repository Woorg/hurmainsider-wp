<div id="courses" class="courses">
	<div data-wow-duration="1.5s" class="courses__in container wow fadeInUp">
		<div class="courses__row row">

			<?php if( have_rows('course', 'option') ): ?>

				<?php while ( have_rows('course', 'option') ) : the_row(); ?>

				<div class="courses__col col-md-6">

					<?php

						$courseImage = get_sub_field('course_image', 'option');
						$courseTitle = get_sub_field('course_title', 'option');
						$courseText = get_sub_field('course_text', 'option');
						$courseDesc = get_sub_field('course_desc', 'option');
						$courseLink = get_sub_field('course_link', 'option');

					?>

					<div class="courses__course course">
						<a href="<?=$courseLink; ?>" class="course__link">
							<div style="background-image: url('<?=$courseImage['url']; ?>')" class="course__top">
								<?php if ($courseTitle): ?>
									<h2 class="course__title"><?=$courseTitle; ?></h2>
								<?php endif ?>

							<?php if( have_rows('course_info', 'option') ): ?>

								<ul class="course__info">

								<?php while ( have_rows('course_info', 'option') ) : the_row(); ?>
									<?php
										$courseInfoItem = get_sub_field('course_info-item', 'option');
									?>

									<li class="course__info-item"><?=$courseInfoItem; ?></li>

								<?php endwhile; ?>

								</ul>

							<?php endif; ?>

							</div>
							<div class="course__body">
								<div class="course__text">
									<?=$courseText; ?>
								</div>
								<div class="course__desc">
									<?=$courseDesc; ?>
								</div>
							</div>

						</a>

					</div>

				</div>
				<?php endwhile;; ?>


			<?php endif; ?>



		</div>
	</div>
</div>

<!-- end courses -->

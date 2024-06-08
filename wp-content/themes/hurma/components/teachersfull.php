<section class="teachers teachers_second">
	<div class="teachers__in container">
		<div class="teachers__row row tabs">

			<?php if( have_rows('teachersfull_tabs') ): ?>

				<?php
					$s_inc_1 = 0;
					$s_inc_2 = 0;
				?>

			<div class="teachers__tabs-nav">
				<ul class="tabs__nav service__tabs-nav">

					<?php while( have_rows('teachersfull_tabs') ): the_row(); $s_inc_1++; ?>

						<?php

							$teachersTabName = get_sub_field('teachersfull__tab_name');
							$class = $s_inc_1 == 1 ? "tabs__item tabs__item_active" : "tabs__item ";

						?>

						<li class="<?php echo $class; ?>">
							<a href="#tab-<?php echo $s_inc_1; ?>" class="tabs__link"><?=$teachersTabName; ?></a>
						</li>

					<?php endwhile; wp_reset_query(); ?>

				</ul>
			</div>

			<?php endif; ?>


			<?php while( have_rows('teachersfull_tabs') ): the_row(); $s_inc_2++; ?>

				<?php

					$class_2 = $s_inc_2 == 1 ? "tabs__tab tabs__tab_active" : "tabs__tab ";

				?>

				<div id="tab-<?=$s_inc_2; ?>" class="<?=$class_2; ?>">

					<?php if( have_rows('teachersfull__list') ): ?>

						<ul class="teachers__list">

							<?php while( have_rows('teachersfull__list') ): the_row(); ?>

								<?php

									$teacherFullPhotoPopup = get_sub_field('teachersfull_photo_popup');
									$teacherFullName       = get_sub_field('teachersfull_name');
									$teacherFullPhoto      = get_sub_field('teachersfull_photo');
									$teacherFullText       = get_sub_field('teachersfull_text');
									$teacherFullResume     = get_sub_field('teachersfull_resume');
								?>

								<li class="teachers__teacher teacher">
									<a href="#" class="teacher__link" data-name="<?=$teacherFullName; ?>" data-text="<?=$teacherFullText;  ?>" data-resume="<?=$teacherFullResume;  ?>" data-image="<?=$teacherFullPhotoPopup['url']; ?>">

										<?php if ($teacherFullPhoto): ?>

											<div class="teacher__image">
												<?=wp_get_attachment_image($teacherFullPhoto, 'full'); ?>
											</div>

										<?php endif; ?>

										<?php if ($teacherFullName): ?>

											<div class="teacher__title"><?=$teacherFullName; ?></div>

										<?php endif ?>

										<?php if ($teacherFullText): ?>

											<div class="teacher__text"><?=$teacherFullText;  ?></div>

										<?php endif ?>
									</a>
								</li>

							<?php endwhile; ?>

						</ul>

					<?php endif; ?>

				</div>

			<?php endwhile; ?>

		</div>
	</div>
</section>

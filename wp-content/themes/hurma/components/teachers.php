<?php

	$teachTitle = get_sub_field('teachers_title');

?>

<section class="teachers">
	<div data-wow-duration="1.5s" class="teachers__in container wow fadeInUp">
		<div class="teachers__row row">
			<?php if ($teachTitle): ?>

			<h2 data-wow-duration="1.5s" data-wow-delay="1s" class="teachers__title wow break-lines">
				<div class="break-lines__inner">Преподаватели</div>
			</h2>

			<?php endif; ?>

			<?php if( have_rows('teachers_list') ): ?>

			<ul class="teachers__slider">

				<?php while ( have_rows('teachers_list') ) : the_row(); $inc++; ?>

					<?php

						$teachName = get_sub_field('teachers_couch');
						$teachText = get_sub_field('teachers_couch-text');
						$teachPhoto = get_sub_field('teachers_couch-photo');

					?>

					<li class="teachers__slide teacher">
						<div class="teachers__col teachers__col_wide">
							<?php if ($teachName): ?>

								<h3 class="teacher__title"><?=$teachName; ?></h3>

							<?php endif; ?>

							<?php if ($teachText): ?>

								<div class="teacher__text">
									<?=$teachText; ?>
								</div>

							<?php endif; ?>
						</div>
						<div class="teachers__col">
							<?php if ($teachPhoto): ?>

								<div class="teachers__image">
									<?=wp_get_attachment_image( $teachPhoto, 'full' ); ?>
								</div>

							<?php endif; ?>

						</div>
					</li>

				<?php endwhile; ?>


			</ul>

			<?php endif; ?>

			<div class="teachers__controls">
				<div class="teachers__nav"></div>
				<div class="teachers__count"></div>
			</div>
		</div>
	</div>
</section>

<!-- end teachers -->

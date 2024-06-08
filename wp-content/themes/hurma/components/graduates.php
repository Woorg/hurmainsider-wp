<?php

	$gradTitle = get_sub_field('graduates_title');

?>

<section class="graduates">
	<div data-wow-duration="1.5s" class="graduates__in container wow fadeInUp">
		<div class="graduates__row row">
			<?php if ($gradTitle): ?>

				<h2 data-wow-duration="1.5s" data-wow-delay="1s" class="graduates__title wow break-lines">
					<div class="break-lines__inner"><?php echo $gradTitle; ?></div>
				</h2>

			<?php endif; ?>

			<?php if( have_rows('graduates_list') ): ?>

			<ul class="graduates__carousel">

				<?php while ( have_rows('graduates_list') ) : the_row(); ?>

					<?php

						$gradName = get_sub_field('graduate_name');
						$gradTxt = get_sub_field('graduate_text');
						$gradPhoto = get_sub_field('graduate_photo');

					?>

					<li class="graduates__item">
						<?php if ($gradPhoto): ?>

							<div style="background-image: url('<?=$gradPhoto['url']; ?>');" class="graduates__photo"></div>

						<?php endif; ?>

						<div class="graduates__bottom">
							<?php if ($gradName): ?>

								<div class="graduates__name"><?=$gradName; ?></div>

							<?php endif; ?>

							<?php if ($gradTxt): ?>

								<div class="graduates__position"><?=$gradTxt; ?></div>

							<?php endif; ?>
						</div>
					</li>

				<?php endwhile; ?>

			</ul>

			<?php endif; ?>
		</div>
	</div>
</section>

<!-- end graduates -->

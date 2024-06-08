<?php

	$procTitle = get_sub_field('process_title');
	$procTxt = get_sub_field('process_text');
	$procImages = get_sub_field('process_photos');
	$procPage = get_sub_field('process_page');

?>



<section class="process">
	<div data-wow-duration="1.5s" class="process__in container wow fadeInUp">
		<div class="process__row row">
			<?php if ($procTitle): ?>

				<h2 data-wow-duration="1.5s" data-wow-delay="1s" data-wow-offset="10" class="process__title wow break-lines">
					<div class="break-lines__inner"><?=$procTitle; ?></div>
				</h2>

			<?php endif; ?>

			<?php if ($procTxt): ?>

				<div class="process__text">
					<?=$procTxt; ?>
				</div>

			<?php endif; ?>

			<?php if ($procImages): ?>

			<ul class="process__photos">
				<?php foreach ($procImages as $pImage): ?>

					<li class="process__photo">
						<a href="<?=$pImage['url']; ?>" class="process__photo-link">

							<?=wp_get_attachment_image( $pImage['ID'], 'full' ) ?>

						</a>
					</li>

				<?php endforeach; ?>


			</ul>

			<?php endif; ?>


			<?php if ($procPage): ?>

				<div class="process__more-w">
					<a href="<?=$procPage; ?>" data-text="смотреть ещё" class="process__more button button_additional button_additional-big">
						<span>смотреть ещё</span>
					</a>
				</div>

			<?php endif; ?>
		</div>
	</div>
</section>

<!-- end process -->

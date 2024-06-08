<?php

	$problmsTitle = get_sub_field('problems_title');
	$problmsText = get_sub_field('problems_text');
	$problmsImage = get_sub_field('problems_image');

?>

<section class="problems">
	<div data-wow-duration="1.5s" data-wow-offset="10" class="problems__in container wow fadeInUp">
		<div class="problems__row row">
			<div class="problems__col col-md-6">
			<?php if ($problmsTitle): ?>

				<h2 class="problems__title">
					<div data-wow-duration="1.5s" data-wow-delay="1s" data-wow-offset="10" class="break-lines__line wow break-lines">
						<div class="break-lines__inner"><?=$problmsTitle; ?></div>
					</div>
				</h2>

			<?php endif; ?>

			<?php if ($problmsText): ?>
				<div class="problems__text">
					<?=$problmsText; ?>
				</div>

			<?php endif; ?>

			</div>
			<div class="problems__col col-md-6">
				<?php if ($problmsImage): ?>

				<div class="problems__image">

					<?=wp_get_attachment_image( $problmsImage, 'full' ); ?>

				</div>

				<?php endif ?>
			</div>
		</div>
	</div>
</section>

<!-- end problems -->

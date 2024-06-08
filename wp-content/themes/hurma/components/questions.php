<?php

	$questionsTitle = get_sub_field('questions_title');
	$questionsText  = get_sub_field('questions_text');
	$questionsForm  = get_sub_field('questions_form');

?>

<section class="questions">
	<div data-wow-duration="1.5s" class="questions__in container wow fadeInUp">
		<div class="questions__row row">
			<div class="questions__w">

				<?php if ($questionsTitle): ?>

				<h2 data-wow-duration="1.5s" data-wow-delay="1s" data-wow-offset="10" class="questions__title wow break-lines">
					<div class="break-lines__inner"><?= $questionsTitle; ?></div>
				</h2>

				<?php endif; ?>


				<?php if ($questionsText): ?>

				<div class="questions__text">

					<?=$questionsText ?>

				</div>

				<?php endif; ?>

				<div class="questions__form">

					<?php if ($questionsForm): ?>

					<div class="form">

						<?=do_shortcode($questionsForm); ?>

					</div>

					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>

<?php

	$vRevText = get_sub_field('reviews_text');

?>


<div class="video-reviews">
	<div data-wow-duration="1.5s" class="video-reviews__in container wow fadeInUp">
		<div class="video-reviews__row row">
			<div class="video-reviews__col col-md-4 col-sm-12 col-xs-12">
				<div class="video-reviews__button video-button">Воспроизвести</div>

				<?php if ($vRevText): ?>

					<div class="video-reviews__text"><?=$vRevText; ?></div>

				<?php endif; ?>

			</div>
		</div>
	</div>
</div>

<!-- end video-reviews -->

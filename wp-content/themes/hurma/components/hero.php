<?php

	$heroText = get_sub_field('hero_text');
	$heroImage = get_sub_field('hero_img');
	$heroMore = get_sub_field('hero_more');

?>

<section class="hero">
	<div data-wow-duration="1.5s" class="hero__in container wow fadeInUp">
		<div class="hero__row row">
			<div class="hero__col hero__col_first">

			<?php if( have_rows('hero_title') ): ?>
				<?php $inc = 0; ?>
				<h1 data-title="hurma insider" class="hero__title">
					<?php while ( have_rows('hero_title') ) : the_row(); $inc++; ?>
						<?php
							$heroTitle = get_sub_field('hero_title_line');
						?>

						<?php if ($inc == 1): ?>
							<div data-wow-duration="1.5s" data-wow-delay="<?=$inc; ?>s" class="break-lines__line wow break-lines">
								<span class="hero__unique break-lines__inner"><?=$heroTitle; ?></span>
							</div>
						<?php else: ?>

							<div data-wow-duration="1.5s" data-wow-delay="<?=$inc; ?>s" class="break-lines__line wow break-lines">
								<div class="break-lines__inner"><?=$heroTitle; ?></div>
							</div>

						<?php endif; ?>


					<?php endwhile; ?>
				</h1>

			<?php endif; ?>

				<?php if ($heroText): ?>

					<div class="hero__text">
						<?=$heroText; ?>
					</div>

				<?php endif; ?>

				<div class="hero__buttons">
					<a href="#" data-text="записаться на курс" class="hero__button button button_primary">записаться на курс</a>
				<?php if ($heroMore): ?>

					<a href="<?=$heroMore; ?>" data-text="узнать подробнее" class="hero__button button button_additional">
						<span>узнать подробнее</span>
					</a>

				<?php endif; ?>
				</div>
			</div>
			<div class="hero__col hero__col_second">
				<div class="hero__video">
					<button class="hero__video-button">Воспроизведение</button>
					<div class="hero__video-text">Узнайте о нас за 2 минуты</div>
				</div>
			</div>
		</div>
		<a class="hero__down" href='#courses'>Вниз</a>
	</div>
</section>
<!-- end hero -->

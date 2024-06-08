<?php

	$advTitle = get_sub_field('advantages_title');
	$advStyle = get_sub_field('advantages_style');


?>


<?php if( $advStyle == 'first' ): ?>

<div class="advantages">

<?php elseif( $advStyle == 'second' ): ?>

<div class="advantages advantages_second">

<?php elseif( $advStyle == 'third' ): ?>

<div class="advantages advantages_third">

<?php endif; ?>

	<div data-wow-duration="1.5s" class="advantages__in container wow fadeInUp">
		<div class="advantages__row row">

		<?php if ($advTitle): ?>

			<h2 data-wow-duration="1.5s" data-wow-delay="2s" class="advantages__title wow break-lines">
				<div class="break-lines__inner"><?=$advTitle; ?></div>
			</h2>

		<?php endif; ?>


		<?php if( have_rows('advantages_item') ): ?>
			<?php $inc = 0; ?>
			<ul class="advantages__list">

			<?php while ( have_rows('advantages_item') ) : the_row(); $inc++; ?>

				<?php

					$advItemTitle = get_sub_field('advantages_item-title');
					$advItemText = get_sub_field('advantages_item-text');

				?>

				<li class="advantages__item advantages__item_<?=$inc; ?>">
					<div class="advantages__icon"></div>

					<?php if ($advItemTitle): ?>
						<h2 class="advantages__title"><?=$advItemTitle; ?></h2>
					<?php endif ?>

					<?php if ($advItemText): ?>
						<div class="advantages__text">
							<?=$advItemText; ?>
						</div>
					<?php endif ?>

				</li>

			<?php endwhile; ?>

			</ul>

		<?php endif; ?>

		</div>
	</div>
</div>

<!-- end advantages -->

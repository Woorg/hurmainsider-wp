<?php

	$participationTitle = get_sub_field('participation_title');
	$participationText = get_sub_field('partic_text');
?>


<section class="participation">
	<div data-wow-duration="1.5s" class="participation__in container wow fadeInUp">

		<?php if ($participationTitle): ?>

			<div class="participation__row row">
				<h2 data-wow-duration="1.5s" data-wow-delay="1s" class="participation__title wow break-lines">
					<div class="break-lines__inner"><?=$participationTitle; ?></div>
				</h2>
			</div>

		<?php endif; ?>

		<div class="participation__cols row">

			<?php if( have_rows('participation_item') ): ?>

				<?php while( have_rows('participation_item') ): the_row(); $s_inc_1++; ?>

					<?php

						$partItemTitle = get_sub_field('participation_item_title');
						$partItemText  = get_sub_field('participation_item_text');
						$partItemPrice = get_sub_field('participation_price');
						$partItemCta   = get_sub_field('participation_participate');
						$partItemImage = get_sub_field('participation_image');

					?>

					<div class="participation__col col-md-6">
						<div class="participation__item">
							<div style="background-image: url('<?=$partItemImage['url']; ?>')" class="participation__top"></div>
							<div class="participation__body">

								<h2 class="participation__item-title"><?=$partItemTitle; ?></h2>
								<div class="participation__text">
									<?=$partItemText; ?>
								</div>
								<div class="participation__price"><?=$partItemPrice; ?></div>
								<a href="<?=$partItemCta; ?>" data-text="записаться на курс" class="participation__button button button_primary">записаться на курс</a>
							</div>
						</div>
					</div>

				<?php endwhile; ?>

			<?php endif; ?>


		</div>

		<?php if ($participationText): ?>

		<div class="participation__note">
			<?php echo $participationText; ?>
		</div>

		<?php endif; ?>

	</div>
</section>

<?php

	$cmpltTitle = get_sub_field('complete_title');
	$cmpltImage = get_sub_field('complete_image');

?>

<div class="complete-w">

	<section class="complete">
		<div data-wow-duration="1.5s" data-wow-offset="10" class="complete__in container wow fadeInUp">
			<div class="complete__row row">
				<div class="complete__col col-md-5 col-sm-12 col-xs-12">
					<?php if ($cmpltImage): ?>

					<div class="complete__image">
						<?=wp_get_attachment_image( $cmpltImage, 'full' ); ?>
					</div>

					<?php endif; ?>
				</div>
				<div class="complete__col complete__col_second col-md-7 col-sm-12 col-xs-12">
					<?php if ($cmpltTitle): ?>

						<h2 data-wow-duration="1.5s" data-wow-delay="1s" data-wow-offset="10" class="complete__title wow break-lines">
							<div class="break-lines__inner"><?=$cmpltTitle; ?></div>
						</h2>

					<?php endif; ?>

					<?php if( have_rows('complete_list') ): ?>

					<ul class="complete__list">
						<?php while ( have_rows('complete_list') ) : the_row(); $inc++; ?>
							<?php
								$cmpltListItem = get_sub_field('complete_list-item');
							?>
							<?php if ($cmpltListItem): ?>

								<li class="complete__item"><?=$cmpltListItem; ?></li>

							<?php endif; ?>

						<?php endwhile; ?>

					</ul>

					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>

</div>

<!-- end complete -->

<?php

	$courseTitle = get_sub_field('course_title');
	$courseText = get_sub_field('course_text');
	$courseCond = get_sub_field('course_pro');
?>

	<?php if ($courseCond): ?>

<div class="course course_insider-pro">

	<?php else: ?>

<div class="course course_insider">

	<?php endif; ?>

	<div data-wow-duration="1.5s" class="course__in container wow fadeInUp">
		<div data-title="hurma insider pro" class="course__w">
			<?php if ($courseTitle): ?>

			<h1 data-wow-duration="1.5s" data-wow-delay="1s" class="course__title wow break-lines">
				<div class="break-lines__inner"><?=$courseTitle; ?></div>
			</h1>

			<?php endif; ?>

			<?php if ($courseText): ?>

			<div class="course__text">
				<?=$courseText; ?>
			</div>

			<?php endif ?>

			<?php if( have_rows('course_info') ): ?>

			<ul class="course__info">

			<?php while ( have_rows('course_info') ) : the_row(); ?>
				<?php
					$courseInfoItem = get_sub_field('course_info-item');
				?>

				<li class="course__info-item"><?=$courseInfoItem; ?></li>


			<?php endwhile; ?>

			</ul>

			<?php endif; ?>

		</div>
	</div>
</div>


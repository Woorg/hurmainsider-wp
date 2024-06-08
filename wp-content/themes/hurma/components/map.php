<?php

	$mapTitle = get_sub_field('map_title');
	$mapTxt = get_sub_field('map_text');


?>


<div class="map">
	<div data-wow-duration="1.5s" class="map__in container wow fadeInUp">
		<div class="map__row row">

			<?php if ($mapTitle): ?>

			<h2 data-wow-duration="1.5s" data-wow-delay="1s" data-wow-offset="10" class="map__title wow break-lines">
				<div class="break-lines__inner"><?=$mapTitle; ?></div>
			</h2>

			<?php endif; ?>

		</div>
	</div>
	<div class="map__area-w">
		<div id="map" class="map__area"></div>
		<div class="map__address-w container">
			<div class="map__address">
				<div class="map__address-title">One door community</div>

				<?php if ($mapTxt): ?>

					<div class="map__address-text"><?=$mapTxt; ?></div>

				<?php endif; ?>

			</div>
		</div>
	</div>
</div>

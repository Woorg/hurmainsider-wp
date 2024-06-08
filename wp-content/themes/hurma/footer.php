<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hurmaEducation
 */

?>


<footer class="footer">
	<div class="footer__in container">
		<div class="footer__row row">
			<nav class="footer__nav f-nav">
				<h4 class="f-nav__title">Курсы</h4>

				<?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-2',
						'menu_id' => '',
						'container' => '',
						'menu_class' => 'nav__list'
					) );
				?>



			</nav>
			<nav class="footer__nav f-nav">
				<h4 class="f-nav__title">Информация</h4>

				<?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-3',
						'menu_id' => '',
						'container' => '',
						'menu_class' => 'nav__list'
					) );
				?>


			</nav>
			<nav class="footer__nav f-nav">
				<h4 class="f-nav__title">Формальности</h4>

				<?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-4',
						'menu_id' => '',
						'container' => '',
						'menu_class' => 'nav__list'
					) );
				?>

			</nav>
			<nav class="footer__nav f-nav">
				<h4 class="f-nav__title">Другие проекты</h4>

				<?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-5',
						'menu_id' => '',
						'container' => '',
						'menu_class' => 'nav__list'
					) );
				?>

			</nav>
		</div>
		<div class="footer__row footer__row_bottom row">
			<div class="footer__created-by created-by">Дизайн
				<div class="created-by__logo">Brainst</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<div style="display: none;">
    <div class="box-modal" id="regModal">
        <div class="box-modal_close arcticmodal-close">X</div>

        <?php echo do_shortcode('[contact-form-7 id="60" title="Контактная форма 1"]') ?>
    </div>
</div>

<div style="display: none;">
    <div class="box-modal" id="videoModal">
        <div class="box-modal_close arcticmodal-close"></div>

        <iframe width="800" height="450" src="https://www.youtube.com/embed/ReKVeX5917U?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
</div>

		<script>
			function mapInit()
			{

				var styleArray = [
				{
					featureType: 'all',
					stylers: [
					{
						saturation: -100
					}]
				}];

				var mapOptions = {
					zoom: 17,
					center: new google.maps.LatLng(55.782201, 37.599588),
					styles: styleArray,
					scrollwheel: false,
					disableDefaultUI: true
				};


				var map = new google.maps.Map(document.getElementById('map'),
					mapOptions);

				var image = '<?php echo get_template_directory_uri(); ?>/assets/images/general/map-marker.png';

				var marker = new google.maps.Marker(
				{
					position:
					{
						lat: 55.782201,
						lng: 37.599588
					},
					map: map,
					icon: image
				});

				google.maps.event.addDomListener(window, 'resize', function()
				{
					var center = map.getCenter();
					google.maps.event.trigger(map, 'resize');
					map.setCenter(center);
				});

			}

			google.maps.event.addDomListener(window, 'load', mapInit);

		</script>

</body>
</html>

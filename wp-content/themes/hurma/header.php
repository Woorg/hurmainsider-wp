<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hurmaEducation
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="imagetoolbar" content="no">
		<meta name="msthemecompatible" content="no">
		<meta name="cleartype" content="on">
		<meta name="HandheldFriendly" content="True">
		<meta name="format-detection" content="telephone=no">
		<meta name="format-detection" content="address=no">
		<meta name="theme-color" content="#ffffff">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<?php wp_head(); ?>
	</head>

<?php if (is_front_page()): ?>
	<body <?php body_class('page'); ?> id="page-top">
<?php endif; ?>

<?php if (is_page('76') || is_single('52')): ?>
	<body <?php body_class('page page_inner page_insider single_courses_insider'); ?> id="page-top">
<?php endif; ?>

<?php if (is_page('78') || is_single('53')): ?>
	<body <?php body_class('page page_inner page_insider-pro single_courses_insider_pro'); ?> id="page-top">
<?php endif; ?>

<?php if (is_page('82')): ?>
	<body <?php body_class('page page_inner page_teachers'); ?> id="page-top">
<?php endif; ?>

<?php if (is_page('86')): ?>
	<body <?php body_class('page page_inner page_location'); ?> id="page-top">

<?php elseif ( is_page() ): ?>
	<body <?php body_class('page page_inner'); ?> id="page-top">

<?php else: ?>
	<body <?php body_class('page page_inner'); ?> id="page-top">

<?php endif; ?>

<!-- <div class="preload">
	<div class="preload__logo"></div>
</div> -->

<?php

	$glCta = get_field( 'gl__cta', 'option' );

?>

<header class="header">
	<div class="header__top">
		<div class="header__in container">
			<div class="header__row row">
				<nav class="header__nav nav">
					<label for="nav-checkbox" class="nav__trigger-w">
						<span class="nav__trigger-item"></span>
						<span class="nav__trigger-item"></span>
						<span class="nav__trigger-item"></span>
					</label>
					<input id="nav-checkbox" type="checkbox" value="" class="nav__checkbox" />

					<?php bem_menu('menu-1', 'nav-list'); ?>

				</nav>
				<a href="<?php echo $glCta; ?>" class="header__button">
					<span>Записаться на курс</span>
				</a>
				<?php if( have_rows('social-networks', 'option') ): ?>

					<?php $inc = 0; ?>
				<div class="header__social social">
					<?php while( have_rows('social-networks', 'option') ): the_row(); $inc++ ?>

						<?php

							$sNetName = get_sub_field('social-networks__name');
							$sNetLink = get_sub_field('social-networks__link');

						?>

						<a href="<?php echo $sNetLink; ?>" class="social__link social__link_<?php echo $inc; ?>"><?php echo $sNetName; ?></a>

					<?php endwhile; ?>
				</div>

				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="header__body">
		<div class="header__in container">
			<div class="header__row row">

				<?php if (is_front_page()): ?>

					<a href="/" class="header__logo logo">Hurma insider - теория и практика ресторанного дела</a>

				<?php else: ?>

					<a href="/" class="header__logo logo logo_white">Hurma insider - теория и практика ресторанного дела</a>

				<?php endif; ?>

			</div>

		</div>
	</div>

</header>

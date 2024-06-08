<?php

	$prgrmTitle = get_sub_field('programm_title');
	$prgrmTxt   = get_sub_field('programm_text');

?>

<section class="programm">
	<div data-wow-duration="1.5s" class="programm__in container wow fadeInUp">
		<div class="programm__row row">

			<?php if ( $prgrmTitle ): ?>

			<h2 data-wow-duration="1.5s" data-wow-delay="2s" data-wow-offset="10" class="programm__title wow break-lines">
				<div class="break-lines__inner"><?=$prgrmTitle; ?></div>
			</h2>

			<?php endif; ?>

			<?php if ($prgrmTxt): ?>

			<div class="programm__text">

				<?=$prgrmTxt; ?>

			</div>

			<?php endif; ?>

			<div class="programm__control tabs">
				<div class="programm__control-nav">

					<?php if( have_rows('programm_tabs') ): ?>

					<div class="programm__control-title">управление:</div>

						<?php
							$s_inc_1 = 0;
							$s_inc_2 = 0;
						?>

					<ul class="tabs__nav service__tabs-nav">

						<?php while( have_rows('programm_tabs') ): the_row(); $s_inc_1++; ?>

							<?php

								$prgrmTabName = get_sub_field('programm__tab_name');
								$class        = $s_inc_1 == 1 ? "tabs__item tabs__item_active" : "tabs__item ";

							?>

							<li class="<?=$class; ?>">
								<a href="#tab-<?=$s_inc_1; ?>" class="tabs__link"><?=$prgrmTabName; ?></a>
							</li>

						<?php endwhile; wp_reset_query(); ?>

					</ul>

					<?php endif; ?>
				</div>

			<?php while( have_rows('programm_tabs') ): the_row(); $s_inc_2++; ?>

					<?php

						$class_2 = $s_inc_2 == 1 ? "tabs__tab tabs__tab_active" : "tabs__tab ";

					?>

				<div id="tab-<?=$s_inc_2; ?>" class="<?=$class_2; ?>">

					<div class="programm__days">

						<?php

							$s_inc_3  = 0;

						?>

						<?php if( have_rows('programm_col-first') ): ?>

							<div class="programm__col">

							<?php while( have_rows('programm_col-first') ): the_row(); ?>


								<?php if( have_rows('day') ): ?>

									<?php while( have_rows('day') ): the_row(); $s_inc_3++; ?>

										<?php
											$dayTitle    = get_sub_field('day_title');
											$daySubTitle = get_sub_field('day_subtitle');
										?>

										<div class="programm__day">

											<?php if ($dayTitle): ?>

												<div class="programm__day-title">
													<span><?=$dayTitle; ?></span>/ День <?=$s_inc_3; ?>
												</div>

											<?php endif; ?>


											<?php if( have_rows('day_list') ): ?>

												<ul class="programm__list">

													<?php while( have_rows('day_list') ): the_row(); ?>

														<?php

															$dayListItem     = get_sub_field('day_list-item');
															$dayListItemImp  = get_sub_field('day_list-item-imp');
														?>

														<?php if ($dayListItemImp): ?>

														<li class="programm__list-item programm__list-item_imp"><?=$dayListItem; ?></li>

														<?php else: ?>

														<li class="programm__list-item"><?=$dayListItem; ?></li>

														<?php endif; ?>

													<?php endwhile; ?>

												</ul>

											<?php endif; ?>
											<!-- end day sec list -->


										</div>
										<!-- end day -->

									<?php endwhile; ?>

								<?php endif; ?>


							<?php endwhile; ?>

							</div>

						<?php endif; ?>
						<!-- end col first -->

						<?php if( have_rows('programm_col-second') ): ?>

							<div class="programm__col programm__col_second">

							<?php while( have_rows('programm_col-second') ): the_row(); ?>
								<?php
									$progPrice = get_sub_field('programm_price');
									$progPage = get_sub_field('programm_page');


								?>

								<?php if( have_rows('day_sec') ): ?>

									<?php while( have_rows('day_sec') ): the_row(); $s_inc_3++; ?>

										<?php
											$daySecTitle    = get_sub_field('day_sec_title');
											$daySecSubTitle = get_sub_field('day_sec_subtitle');
										?>

										<div class="programm__day">

											<?php if ($daySecTitle): ?>

												<div class="programm__day-title">
													<span><?php echo $daySecTitle; ?></span>/ День <?php echo $s_inc_3; ?>
												</div>

											<?php endif; ?>


											<?php if( have_rows('day_sec_list') ): ?>

												<ul class="programm__list">

													<?php while( have_rows('day_sec_list') ): the_row(); ?>

														<?php

															$daySecListItem     = get_sub_field('day_sec_list-item');
															$daySecListItemImp  = get_sub_field('day_sec_list-item-imp');
														?>

														<?php if ($daySecListItemImp): ?>

														<li class="programm__list-item programm__list-item_imp"><?=$daySecListItem; ?></li>

														<?php else: ?>

														<li class="programm__list-item"><?=$daySecListItem; ?></li>

														<?php endif; ?>

													<?php endwhile; ?>

												</ul>

											<?php endif; ?>
											<!-- end day sec list -->

										</div>
										<!-- end day -->




									<?php endwhile; ?>



								<?php endif; ?>


							<?php endwhile; ?>


								<?php if ($progPrice): ?>

									<div class="programm__total">
										<div class="programm__price"><?php echo $progPrice; ?> -</div>
										<a href="<?php echo $progPage; ?>" data-text="записаться на курс" class="programm__button button button_primary">записаться на курс</a>
									</div>
									<!-- end total -->

								<?php endif ?>


							</div>

						<?php endif; ?>
						<!-- end col second -->




					</div>
					<!-- end days -->
				</div>

				<!-- end tab -->

			<?php endwhile; ?>


				<div class="programm__days">

					<?php if( have_rows('programm_pro_col_first') ): ?>


							<div class="programm__col">

								<?php while( have_rows('programm_pro_col_first') ): the_row(); ?>

									<?php if( have_rows('day_pro') ): ?>

										<?php while( have_rows('day_pro') ): the_row();  ?>

											<?php
												$dayProTitle    = get_sub_field('day_pro_title');
												$dayProSubTitle = get_sub_field('day_pro_subtitle');
												$dayProSubTitleSecond = get_sub_field('day_pro_subtitle_second');

											?>


											<div class="programm__day">

												<?php if ($dayProTitle): ?>

													<div class="programm__day-title">
														<span><?php echo $dayProTitle; ?></span>
													</div>

												<?php endif; ?>

												<?php if ($dayProSubTitle): ?>

													<div class="programm__sub-title"><?php $dayProSubTitle; ?></div>

												<?php endif; ?>


												<?php if( have_rows('day_pro_list') ): ?>

													<ul class="programm__list">

														<?php while( have_rows('day_pro_list') ): the_row(); ?>

															<?php

																$dayProListItem = get_sub_field('day_pro_list-item');

															?>

																<?php if ($dayProListItem): ?>

																<li class="programm__list-item"><?php echo $dayProListItem; ?></li>

																<?php endif; ?>

															<?php // endif; ?>

														<?php endwhile; ?>

													</ul>

												<?php endif; ?>
												<!-- end day sec list -->

												<?php if( have_rows('day_pro_list_second') ): ?>

													<ul class="programm__list">

														<?php while( have_rows('day_pro_list_second') ): the_row(); ?>

															<?php

																$dayProListItemSecond  = get_sub_field('day_pro_list_item_second');

															?>

																<?php if ($dayProListItemSecond): ?>

																	<li class="programm__list-item"><?php echo $dayProListItemSecond; ?></li>

																<?php endif; ?>


															<?php // endif; ?>

														<?php endwhile; ?>

													</ul>

												<?php endif; ?>
												<!-- end day sec list -->


											</div>

											<!-- end day -->


										<?php endwhile; ?>

									<?php endif; ?>

								<?php endwhile; ?>

							</div>

					<?php endif; ?>

					<!-- end first col -->

					<?php if( have_rows('programm_pro_col_sec') ): ?>

						<div class="programm__col programm__col_second">

							<?php while( have_rows('programm_pro_col_sec') ): the_row(); ?>

								<?php

									$progProPrice = get_sub_field('programm_pro_price');
									$progProCta = get_sub_field('programm_pro_cta');

								?>

								<?php if( have_rows('day_pro_sec') ): ?>

									<?php while( have_rows('day_pro_sec') ): the_row();  ?>

										<?php
											$dayProTitleSec    = get_sub_field('day_pro_title_sec');
											$dayProSubTitleSec = get_sub_field('day_pro_subtitle_sec');
											$dayProSubTitleThird = get_sub_field('day_pro_subtitle_third');

										?>


										<div class="programm__day">

											<?php if ($dayProTitleSec): ?>

												<div class="programm__day-title">
													<span><?php echo $dayProTitleSec; ?></span>
												</div>

											<?php endif; ?>

											<?php if ($dayProSubTitleSec): ?>

												<div class="programm__sub-title"><?php echo $dayProSubTitleSec; ?></div>

											<?php endif; ?>


											<?php if( have_rows('day_pro_list_sec') ): ?>

												<ul class="programm__list">

													<?php while( have_rows('day_pro_list_sec') ): the_row(); ?>

														<?php

															$dayProListSecItem  = get_sub_field('day_pro_list_sec_item');

														?>

															<?php if ($dayProListSecItem): ?>

																<li class="programm__list-item"><?php echo $dayProListSecItem; ?></li>

															<?php endif; ?>


													<?php endwhile; ?>

												</ul>

											<?php endif; ?>
											<!-- end day sec list -->

											<?php if( have_rows('day_pro_list_third') ): ?>

												<ul class="programm__list">

													<?php while( have_rows('day_pro_list_third') ): the_row(); ?>

														<?php

															$dayProListItemThird  = get_sub_field('day_pro_list_third_item');

														?>

															<?php if ($dayProListItemThird): ?>

																<li class="programm__list-item"><?php echo $dayProListItemThird; ?></li>

															<?php endif; ?>


													<?php endwhile; ?>

												</ul>

											<?php endif; ?>
											<!-- end day sec list -->


										</div>

										<!-- end day -->


									<?php endwhile; ?>

								<?php endif; ?>

								<?php if ($progProPrice): ?>

									<div class="programm__total">
										<div class="programm__price"><?php echo $progProPrice; ?> -</div>
										<a href="<?php echo $progProCta; ?>" data-text="записаться на курс" class="programm__button button button_primary">записаться на курс</a>
									</div>
									<!-- end total -->

								<?php endif ?>

							<?php endwhile; ?>

						</div>

					<?php endif; ?>

					<!-- end second col -->

				</div>

				<!-- end programm_days -->

			</div>
		</div>
	</div>
</section>

<!-- end programm -->

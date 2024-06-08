<?php

	$scheduleTitle = get_sub_field('schedule_title');
	$schedulePro = get_sub_field('schedule_pro');
?>

<?php if ($schedulePro): ?>

<section class="schedule schedule_second">

<?php else: ?>

<section class="schedule">

<?php endif; ?>


	<div data-wow-duration="1.5s" class="schedule__in container wow fadeInUp">
		<div class="schedule__row row">

			<?php if ($scheduleTitle): ?>

			<h2 data-wow-duration="1.5s" data-wow-delay="1s" data-wow-offset="10" class="schedule__title wow break-lines">
				<div class="break-lines__inner"><?=$scheduleTitle ?></div>
			</h2>

			<?php endif; ?>

			<div class="schedule__calendar">
				<div class="schedule__calendar-nav">
					<a href="#" class="schedule__calendar-back">Назад</a>
					<div class="schedule__calendar-month">Август 2017</div>
					<a href="#" class="schedule__calendar-next">Вперед</a>
				</div>
				<table class="schedule__calendar-table">
					<thead>
						<tr>
							<th title="Sunday" data-day-abbr="Пн">Понедельник</th>
							<th title="Monday" data-day-abbr="ВТ">вторник</th>
							<th title="Tuesday" data-day-abbr="СР">среда</th>
							<th title="Wednesday" data-day-abbr="ЧТ">четверг</th>
							<th title="Thursday" data-day-abbr="ПТ">пятница</th>
							<th title="Friday" data-day-abbr="Сб">суббота</th>
							<th title="Saturday" data-day-abbr="ВС">воскресенье</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="schedule__calendar-othermonth">
								<div class="schedule__calendar-day">31</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">1</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">2</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">3</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">4</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">5</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">6</div>
								<!-- Events List-->
							</td>
						</tr>
						<tr>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">7</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">8</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">9</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">10</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">11</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">12</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">13</div>
								<!-- Events List-->
							</td>
						</tr>
						<tr>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">14</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">15</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">16</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">17</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">18</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">19</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">20</div>
								<!-- Events List-->
							</td>
						</tr>
						<tr>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-event-w">
									<div class="schedule__calendar-day">21</div>
									<!-- Events List-->
									<div class="schedule__calendar-event">Hurma insider</div>
								</div>
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-event-w">
									<div class="schedule__calendar-day">22</div>
									<!-- Events List-->
									<div class="schedule__calendar-event">Hurma insider</div>
								</div>
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-event-w">
									<div class="schedule__calendar-day">23</div>
									<!-- Events List-->
									<div class="schedule__calendar-event">Hurma insider</div>
								</div>
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">24</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">25</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">26</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">27</div>
								<!-- Events List-->
							</td>
						</tr>
						<tr>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">28</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">29</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">30</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-thismonth">
								<div class="schedule__calendar-day">31</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-othermonth">
								<div class="schedule__calendar-day">1</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-othermonth">
								<div class="schedule__calendar-day">2</div>
								<!-- Events List-->
							</td>
							<td class="schedule__calendar-othermonth">
								<div class="schedule__calendar-day">3</div>
								<!-- Events List-->
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

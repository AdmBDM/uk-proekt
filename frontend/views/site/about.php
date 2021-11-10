<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

?>

<div class="site-about">
	<div id="site-about">
		<div class="block-img col-sm-6">
			<?= Html::img('/images/about.jpg', ['alt' => '']) ?>
		</div>
		<div class="block-info col-sm-6">
			<div class="info-head">
				Управляющая компания<br>ООО «УК «Проект»
			</div>
			<div class="info-items">
				<div class="info-item col-sm-6">
					<div class="service-img">
						<div class="service-img-round">
							<?= Html::img('/images/rocket.png', ['alt' => '']) ?>
						</div>
					</div>
					<div class="service-txt col-sm-10">
						<div class="service-header">Управление финансами</div>
						<div class="service-text">Приумножайте ваши доходы с помощью наших инструментов</div>
					</div>
				</div>
				<div class="info-item col-sm-6">
					<div class="service-img">
						<div class="service-img-round">
							<?= Html::img('/images/team.png', ['alt' => '']) ?>
						</div>
					</div>
					<div class="service-txt col-sm-10">
						<div class="service-header">Торговая платформа</div>
						<div class="service-text">Надёжное управление вашими активами, широкий выбор инвестиционных возможностей</div>
					</div>
				</div>
				<div class="info-item col-sm-6">
					<div class="service-img">
						<div class="service-img-round">
							<?= Html::img('/images/doc.png', ['alt' => '']) ?>
						</div>
					</div>
					<div class="service-txt col-sm-10">
						<div class="service-header">Консалтинг</div>
						<div class="service-text">Мы предлагаем инвестиционные решения под разные цели, сроки и суммы, не требующие от вас опыта или времени на управление деньгами</div>
					</div>
				</div>
				<div class="info-item col-sm-6">
					<div class="service-img">
						<div class="service-img-round">
							<?= Html::img('/images/cash.png', ['alt' => '']) ?>
						</div>
					</div>
					<div class="service-txt col-sm-10">
						<div class="service-header">Надёжность</div>
						<div class="service-text">Деятельность управляющей компании контролируется специализированным депозитарием и ЦБ РФ</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

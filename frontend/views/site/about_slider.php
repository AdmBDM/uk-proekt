<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

?>

<div class="site-index" id="section-main">
	<div id="main-slider" class="owl-carousel owl-theme">
		<div class="item">
			<div class="item-text-half_left">
				<div class="slide-1">
					<h2>Приветствуем Вас на сайте</h2>
					<h2>ООО «УК «Проект»</h2>
					<h3>в разделе меню "Раскрытие информации" Вы можете найти раскрываемую информацию в соответствии с Указанием Банка России № 5609-У</h3>
				</div>
			</div>
			<?= Html::img('/images/slider1.jpg', ['alt' => '']) ?>
		</div>

		<div class="item">
			<div class="item-text-centered">
				<div class="slide-2">
					<h3>Общество с ограниченной ответственностью</h3>
					<h1>«УК «Проект»</h1>
					<a href="#" target="_self">Обратная связь</a>
				</div>
			</div>
			<?= Html::img('/images/slider2.jpg', ['alt' => '']) ?>
		</div>
	</div>
</div>

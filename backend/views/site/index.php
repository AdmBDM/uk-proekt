<?php

/* @var $this yii\web\View */

dmstr\web\AdminLteAsset::register($this);

//$this->title = 'My Yii Application';
Yii::$app->name = 'ООО «УК «Проект»';
$this->title = Yii::$app->name;
?>
<div class="site-index">

	<div class="jumbotron text-center bg-transparent">
		<h1 class="display-4">Мы в админке!</h1>
	</div>

	<div class="body-content">

		<div class="row">
			<div class="col-lg-4">
				<h2>Heading</h2>

				<p>Повседневная практика показывает, что рамки и место обучения кадров представляет собой интересный эксперимент проверки системы обучения кадров, соответствует насущным потребностям. Товарищи! постоянный количественный рост и сфера нашей активности представляет собой интересный эксперимент проверки новых предложений.</p>

			</div>
			<div class="col-lg-4">
				<h2>Heading</h2>

				<p>Таким образом реализация намеченных плановых заданий в значительной степени обуславливает создание соответствующий условий активизации. Разнообразный и богатый опыт начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки модели развития.</p>

			</div>
			<div class="col-lg-4">
				<h2>Heading</h2>

				<p>Товарищи! постоянный количественный рост и сфера нашей активности представляет собой интересный эксперимент проверки существенных финансовых и административных условий. Значимость этих проблем настолько очевидна, что консультация с широким активом позволяет выполнять важные задания по разработке систем массового участия.</p>

			</div>
		</div>
	</div>
</div>

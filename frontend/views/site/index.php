<?php

/* @var $this yii\web\View */

//Yii::$app->name = 'УК Проект';
use yii\bootstrap4\Carousel;
use yii\helpers\Html;

Yii::$app->name = 'ООО «УК «Проект»';
$this->title = Yii::$app->name;

//$images[] = Html::a(
//	Html::img($item->getUrl('x200'), ['alt' => '']),
//	[$item->getUrl()],
//	['data-method' => 'post', 'target' => '_blank']
//);

?>
<div class="site-index">

	<section class="slider">
		<?php echo Carousel::widget([
			'items' => [
				Html::img('/images/slider1.jpg', ['alt' => '']),
				Html::img('/images/slider2.jpg', ['alt' => ''])
			],
			'options' => ['class' => 'carousel slide', 'data-interval' => '5000'],
			'controls' => [
				'<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
				'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
			],

		]); ?>
	</section>

	<div class="content">

	</div>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'news_date')->textInput() ?>

	<?= $form->field($model, 'news_anons')->textInput() ?>

	<?= $form->field($model, 'news_text')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'published')->checkbox() ?>

	<?= $form->field($model, 'pub_date_start')->textInput() ?>

	<?= $form->field($model, 'pub_date_end')->textInput() ?>

	<div class="form-group">
		<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>

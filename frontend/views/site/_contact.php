<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model ContactForm */

use frontend\models\ContactForm;
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

//$this->title = 'Contact';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact" id="section-contact">
	<div class="content">
		<h2>Блок контактов</h2>

		<p>
			Оставьте своё сообщение через форму обратной связи.
		</p>

		<div class="row">
			<div class="col-lg-5">
				<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput() ?>

				<?= $form->field($model, 'email') ?>

				<?= $form->field($model, 'subject') ?>

				<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

				<?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
					'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
				]) ?>

				<div class="form-group">
					<?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
				</div>

				<?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>

</div>

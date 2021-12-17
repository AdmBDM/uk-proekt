<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">
	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'username') ?>

	<?= $form->field($model, 'auth_key') ?>

	<?= $form->field($model, 'password_hash') ?>

	<?= $form->field($model, 'pswd') ?>

	<?= $form->field($model, 'pswd_hash') ?>

	<?= $form->field($model, 'email') ?>

	<?= $form->field($model, 'phone_number')->widget(MaskedInput::class, ['mask' => '(999)-999-99-99']) ?>

	<?= $form->field($model, 'admin')->checkbox() ?>

	<?= $form->field($model, 'oper')->checkbox() ?>

	<div class="form-group">
		<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>
</div>

<?php

use common\models\DocsGroup;
use kartik\datetime\DateTimePicker;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm as ActiveFormAlias;

/* @var $this yii\web\View */
/* @var $model common\models\OpenDocs */
/* @var $form yii\widgets\ActiveForm */

/*   генерация случайной 32-байтной строки  */
/*              md5(time())                 */
/* bin2hex(openssl_random_pseudo_bytes(16)) */

$model->docs_group_id = $model->docs_group_id ?: $_SESSION['__curGr'];
$model->system_file_name = $model->system_file_name ?: bin2hex(openssl_random_pseudo_bytes(16));

?>

<div class="open-docs-form">
	<?php $form = ActiveFormAlias::begin(); ?>

	<?= $form->field($model, 'docs_group_id')->widget(Select2::class, [
		'data' => DocsGroup::find()->select(['name_group', 'id'])->indexBy('id')->column(),
		'language' => 'ru',
		'pluginOptions' => [
			'allowClear' => false,
			'minimumResultsForSearch' => -1
		],
	]) ?>

	<?= $form->field($model, 'original_file_name')->textInput() ?>

	<?= $form->field($model, 'system_file_name')->textInput(['readonly' => true]) ?>

	<?= $form->field($model, 'pub_date_start')->widget(DateTimePicker::class, [
		'options' => ['placeholder' => 'Начало публикации',],
		'pluginOptions' => [
			'todayHighlight' => true,
			'format' => 'dd.mm.yyyy H:i',
			'autoclose' => true,
		]
	]) ?>

	<?= $form->field($model, 'pub_date_end')->widget(DateTimePicker::class, [
		'options' => ['placeholder' => 'Окончание публикации',],
		'pluginOptions' => [
			'todayHighlight' => true,
			'format' => 'dd.mm.yyyy H:i',
			'autoclose' => true,
		]
	]) ?>

	<?php if ($model->image_id == 0) {
		echo $form->field($model, 'imageFile')->fileInput()->label('');
	} ?>

	<div class="form-group">
		<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveFormAlias::end(); ?>

</div>

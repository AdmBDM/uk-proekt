<?php

//use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OpenDocs */

$this->title = 'Раскрытие информации';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['index?gr=' . $_SESSION['__curGr']]];
$this->params['breadcrumbs'][] = ['label' => 'id-' . $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>

<div class="open-docs-update">
	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>

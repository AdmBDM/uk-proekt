<?php

//use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DocsGroup */

$this->title = 'Группы документов: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Группы документов', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>

<div class="docs-group-update">
	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>

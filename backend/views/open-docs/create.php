<?php

//use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OpenDocs */

$this->title = 'Раскрытие информации';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['index?gr=' . $_SESSION['__curGr']]];
$this->params['breadcrumbs'][] = 'Создание нового документа';

$model->docs_group_id = $_SESSION['__curGr'];
?>

<div class="open-docs-create">

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>

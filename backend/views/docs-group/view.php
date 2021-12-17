<?php

use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DocsGroup */

$this->title = 'Группы документов ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Группы документов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>

<div class="docs-group-view">
	<p>
		<?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
<!--		--><?//= Html::a('Delete', ['delete', 'id' => $model->id], [
//			'class' => 'btn btn-danger',
//			'data' => [
//				'confirm' => 'Are you sure you want to delete this item?',
//				'method' => 'post',
//			],
//		]) ?>
	</p>

	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			'id',
			'name_group',
			'dir_group',
			'short_name_group',
		],
	]) ?>

</div>

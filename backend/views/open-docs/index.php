<?php

use common\models\DocsGroup;
use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Раскрытие информации';
$this->params['breadcrumbs'][] = $this->title;
$gr = DocsGroup::find()->where('id=' . $_SESSION['__curGr'])->one();

?>

<div class="open-docs-index">
	<h4 style="font-style: italic; margin-bottom: 30px; margin-top: -20px"><?= $gr['name_group'] ?></h4>
	<p>
		<?= Html::a('Создать документ', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php Pjax::begin(); ?>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'columns' => [
			[
				'class' => ActionColumn::class,
// Определяем набор кнопок. По умолчанию {view} {update} {delete}
				'template' => '{view} {update}' . (Yii::$app->user->identity->id > 2 ?: ' {delete}'),
				'header'=>'Действия',
				'options' => ['width' => '100'],
			],
//			'id',
//			'docs_group_id',
			'original_file_name',
//			'system_file_name',
			[
				'attribute' => 'pub_date_start',
				'format' => ['date', 'php:d.m.Y H:i'],
				'options' => ['width' => '200'],
				'contentOptions' => ['style'=>'text-align: center;'],
			],
			//'pub_date_end',
			[
				'label' => '',
				'format' => 'text',
				'contentOptions' => ['style'=>'white-space: normal;'],
				'value' => function() {return '';},
			],

		],
	]); ?>

	<?php Pjax::end(); ?>

</div>

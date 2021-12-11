<?php

/* @var $this yii\web\View */
/* @var $group DocsGroup */
/* @var $docs OpenDocs */
/* @var $doc OpenDocs */

use common\models\DocsGroup;
use common\models\OpenDocs;

$docPath = Yii::$app->params['dir']['files'] . Yii::$app->params['dir']['docs'];
//$docPath = Yii::getAlias('@common') . '/' . Yii::$app->params['dir']['files'] . Yii::$app->params['dir']['docs'];

?>

<div class="site-open_data" id="section-open_data">
	<div class="content">
		<div class="site-open_data-logo">
			<div class="site-open_data-logo-img col-sm-8">
				<img src="/images/53.jpg" alt="">
			</div>
<!--			<div class="site-open_data-logo-block">Раскрытие информации</div>-->
		</div>

		<div id="div_block-3-10" class="ct-div-block container" hidden>
			<div id="div_block-4-10" class="ct-div-block row">
				<div id="div_block-5-10" class="ct-div-block col-lg-12">
					<div id="div_block-6-10" class="ct-div-block project-details-item">
						<div id="div_block-7-10" class="ct-div-block project-details-left"><img id="image-8-10" alt=""
																								src="/images/53.jpg"
																								class="ct-image"></div>
						<div id="div_block-9-10" class="ct-div-block project-details-right">
							<div id="div_block-11-10" class="ct-div-block project-right-text"><h2 id="headline-12-10"
																								  class="ct-headline">
									Раскрытие информации ООО «УК «Проект»</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php foreach (DocsGroup::find()->orderBy('id')->all() as $group) {
			$filePath = $docPath . $group->dir_group . '/';
			$docs = $group->getOpenDocs()->orderBy('pub_date_start desc')->all();
			if ($docs) {
			?>
			<table class="table-data">
				<caption><?= $group->name_group ?></caption>
				<thead>
				<tr>
					<th class="table-col1">Наименование</th>
					<th class="table-col2">Дата публикации</th>
					<th class="table-col3">Срок доступа</th>
				</tr>
				</thead>
				<tbody>
					<?php foreach ($docs as $doc) { ?>
						<tr>
							<td><a href="<?= $filePath . $doc->system_file_name ?>.<?= $doc->file_ext ?>" target="_blank"><?= $doc->original_file_name ?></a></td>
							<td><?= date('d.m.Y H:i',strtotime($doc->pub_date_start)) ?></td>
							<td><?= ($doc->pub_date_end ? date('d.m.Y',strtotime($doc->pub_date_end)) : 'Бессрочно')  ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		<?php }} ?>

	</div>
</div>

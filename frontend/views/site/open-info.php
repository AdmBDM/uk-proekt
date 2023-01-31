<?php

/* @var $this yii\web\View */
/* @var $group DocsGroup */
/* @var $docs OpenDocs */
/* @var $doc OpenDocs */

use common\models\DocsGroup;
use common\models\OpenDocs;
use common\models\UkpFiles;

?>

<!--<div class="site-open_data" id="section-open_data">-->
<div class="site-open_data">
	<div class="content">
		<div class="site-open_data-logo">
			<div class="site-open_data-logo-block">
				<div class="text-block"><div class="text-caps">Раскрытие<br>информации</div></div>
			</div>

			<div class="site-open_data-logo-img col-sm-8">
				<img src="/images/53.jpg" alt="">
			</div>
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

		<?php foreach (DocsGroup::find()->orderBy('sort')->all() as $group) {
			$docs = $group->getOpenDocs()->orderBy('pub_date_start desc')->where('image_id > 0')->all();

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
					<?php foreach ($docs as $doc) {
						$file = UkpFiles::find()->where('id=' . $doc->image_id)->one();
						?>
						<tr>
							<td><a href="<?= $file['full_path'] . $file['internal_file_name'] ?>.<?= $file['file_ext'] ?>" target="_blank"><?= $doc->original_file_name ?></a></td>
							<td><?= date('d.m.Y H:i',strtotime($doc->pub_date_start)) ?></td>
							<td><?= ($doc->pub_date_end ? date('d.m.Y',strtotime($doc->pub_date_end)) : 'Бессрочно')  ?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			<?php }} ?>

	</div>
</div>

<?php

/* @var $this yii\web\View */

use common\models\DocsGroup;
//use common\models\OpenDocs;
use common\models\UkpFiles;

$groups = DocsGroup::find()->orderBy('sort')->where('sort = 0')->all();

?>

<div class="site-info" id="section-info">
	<div class="content">
		<table class="table" id="tbl-info">
			<caption>Фонд залоговых инвестиций</caption>
			<thead>
			<tr>
<!--				<th class="table-col1">&nbsp;</th>-->
<!--				<th class="table-col2">&nbsp;</th>-->
<!--				<th class="table-col3">Дата публикации</th>-->
<!--				<th class="table-col4">Срок доступа</th>-->
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Полное название фонда</td>
				<td>Комбинированный закрытый паевой инвестиционный фонд «Фонд залоговых инвестиций»</td>
<!--				<td>&nbsp;</td>-->
<!--				<td>&nbsp;</td>-->
			</tr>
			<tr>
				<td>Сокращенное название фонда</td>
				<td>Комбинированный ЗПИФ «Фонд залоговых инвестиций»</td>
<!--				<td>&nbsp;</td>-->
<!--				<td>&nbsp;</td>-->
			</tr>
			<tr>
				<td>Назначение фонда</td>
				<td>Фонд предназначен для квалифицированных инвесторов, инвестиционные паи которого ограничены в обороте, раскрытие информации о Фонде не предусмотрено законодательством.</td>
<!--				<td>&nbsp;</td>-->
<!--				<td>&nbsp;</td>-->
			</tr>
			<tr>
				<td>Правила доверительного управления</td>
				<td>Правила доверительного управления фондом согласованы 30 января&nbsp;2023&nbsp;года</td>
				<!--				<td>&nbsp;</td>-->
				<!--				<td>&nbsp;</td>-->
			</tr>
			<tr>
				<td>Регистрационный номер</td>
				<td>Регистрационный номер Правил доверительного управления фондом № 5261-СД, дата присвоения номера Банком России 30 января&nbsp;2023&nbsp;года</td>
				<!--				<td>&nbsp;</td>-->
				<!--				<td>&nbsp;</td>-->
			</tr>
			</tbody>
		</table>


		<table class="table-data" id="tbl-files">
			<thead>
			<tr>
								<th class="table-col1">&nbsp;</th>
								<th class="table-col3">Дата публикации</th>
				<!--				<th class="table-col4">Срок доступа</th>-->
			</tr>
			</thead>
			<tbody>

			<?php
			foreach ($groups as $group) {
				if ($group) {
					$docs = $group->getOpenDocs()->orderBy('id')->all();

				 foreach ($docs as $doc) {
				$file = UkpFiles::find()->where('id=' . $doc->image_id)->one();
				?>
			<tr>
				<td><a href="<?= $file['full_path'] . $file['internal_file_name'] ?>.<?= $file['file_ext'] ?>" target="_blank"><?= $doc->original_file_name ?></a></td>
				<td><?= date('d.m.Y H:i',strtotime($doc->pub_date_start)) ?></td>
			</tr>
			<?php }
				}
			}
			?>

			</tbody>
		</table>

	</div>
</div>

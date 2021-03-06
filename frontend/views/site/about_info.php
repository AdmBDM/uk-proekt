<?php

/* @var $this yii\web\View */

//use yii\helpers\Html;

?>

<div class="site-info" id="section-info">
	<div class="content">
		<table class="table">
			<caption>Основные сведения</caption>
			<thead>
			<tr>
				<th class="table-col1">&nbsp;</th>
				<th class="table-col2">&nbsp;</th>
				<th class="table-col3">Дата публикации</th>
				<th class="table-col4">Срок доступа</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Полное фирменное наименование «Общества» на русском языке</td>
				<td>Общество с ограниченной ответственностью<br>«Управляющая компания «Проект»</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Сокращенное фирменное наименование на русском языке</td>
				<td>ООО «УК «Проект»</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Единоличный исполнительный орган</td>
				<td>Генеральный директор Шигапов Арслан Фаридович</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Юридический адрес</td>
				<td><?= Yii::$app->params['addressCity'] . Yii::$app->params['addressStreet'] ?></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Телефон</td>
				<td><?= Yii::$app->params['phoneWork'] ?></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Электронная почта</td>
				<td><?= Yii::$app->params['mainEmail'] ?></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>ИНН/КПП</td>
				<td>1655449328 / 165501001</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>ОГРН</td>
				<td>1201600087150</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Устав</td>
				<td>
					<a href="/images/ustav.2020.12.17.tif">Устав от 17.12.2020 г.</a>
				</td>
				<td>30.12.2020 16:15</td>
				<td>Бессрочно</td>
			</tr>
			<tr>
				<td>Лицензия</td>
				<td><a href="/images/liczenziya-21-000-1-01049.pdf">Лицензия № 21-000-1-01049 выдана Банком России 27.07.2021 г.</a></td>
				<td>03.08.2021 15:26</td>
				<td>Бессрочно</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>

<?php

/* @var $this yii\web\View */

use common\models\News;

$itemsNews = News::find()
	->orderBy(['news_date' => SORT_DESC])
	->all();

?>

<!--<div class="site-news" id="section-news">-->
<div class="site-news">
	<div class="logo-news">
		<img src="/images/logo-news.jpg" alt="">
	</div>
	<div class="content">
		<h2>Новости ООО «УК «Проект»</h2>
		<div class="news-year">
			<div class="news-year-content" id="news-2022">
				<div class="year-val" id="year-2022">2022</div>
				<div class="news-content">
					<?php
					foreach ($itemsNews as $k => $item) {
						if (date('Y', strtotime($item['news_date'])) == '2022') {?>
						<div class="news-item-caption">
								<span class="news-item-date">
									<?= date('d.m.Y', strtotime($item['news_date'])) ?>
								</span>&nbsp;&nbsp;&nbsp;
							<span class="news-item-anons"><?= $item['news_anons'] ?></span>
						</div>
						<div class="news-item-text"><?= $item['news_text'] ?></div>
					<?php }}
					?>
				</div>
			</div>
			<div class="news-year-content" id="news-2021">
				<div class="year-val" id="year-2021">2021</div>
				<div class="news-content">
					<?php
					foreach ($itemsNews as $k => $item) {
						if (date('Y', strtotime($item['news_date'])) == '2021') {?>
						<div class="news-item-caption">
								<span class="news-item-date">
									<?= date('d.m.Y', strtotime($item['news_date'])) ?>
								</span>&nbsp;&nbsp;&nbsp;
							<span class="news-item-anons"><?= $item['news_anons'] ?></span>
						</div>
						<div class="news-item-text"><?= $item['news_text'] ?></div>
					<?php }}
					?>
				</div>
			</div>
		</div>
	</div>
</div>

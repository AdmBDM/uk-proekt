<?php

/* @var $this yii\web\View */

use common\models\News;
use yii\db\Query;

$listYears = (new Query())
	->select(['news_year' => "to_char(news_date, 'YYYY')",])
	->from('news')
	->groupBy('news_year')
	->orderBy(['news_year' => SORT_DESC])
	->all();

$itemsNews = News::find()
	->orderBy(['news_date' => SORT_DESC])
	->all();

$firstYear = true;
?>

<div class="site-news">
	<div class="logo-news">
		<img src="/images/logo-news.jpg" alt="">
	</div>
	<div class="content">
		<h2>Новости ООО «УК «Проект»</h2>
		<div class="news-year">
			<?php
				foreach ($listYears as $y) { ?>

				<div class="news-year-content" id="news-<?= $y['news_year'] ?>">
					<div class="year-val year-val-cursor" id="year-<?= $y['news_year'] ?>"><?= $y['news_year'] ?></div>
					<div id="news-content-<?= $y['news_year'] ?>" <?= $firstYear ? '' : 'hidden' ?>>
						<div class="news-content">
							<?php
							$firstYear = false;
							foreach ($itemsNews as $k => $item) {
								if (date('Y', strtotime($item['news_date'])) == $y['news_year']) { ?>
									<div class="news-item-caption">
								<span class="news-item-date">
									<?= date('d.m.Y', strtotime($item['news_date'])) ?>
								</span>&nbsp;&nbsp;&nbsp;
										<span class="news-item-anons"><?= $item['news_anons'] ?></span>
									</div>
									<div class="news-item-text"><?= $item['news_text'] ?></div>
								<?php }
							}
							?>
						</div>
					</div>
				</div>
			<?php
				}
			?>

		</div>
	</div>
</div>

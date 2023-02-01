<?php

/* @var $this View */
/* @var $content string */

use yii\bootstrap4\Html;
use yii\web\View;

?>
<!--<footer class="footer mt-auto py-3 text-muted">-->
<div class="content">
	<div class="about-text-item" style="margin: 50px auto">
		<div class="service-img" style="float: left">
			<div class="service-img-round">
				<?= \yii\helpers\Html::img('/images/team.png', ['alt' => '']) ?>
			</div>
		</div>
		<div class="info-item" style="margin-left: 50px">
			<div class="service-txt">
				<div class="service-header">ИНФОРМАЦИЯ</div>
				<div class="service-text">Стоимость инвестиционных паёв может увеличиваться и уменьшаться. Результаты инвестирования в прошлом не определяют доходы в будущем. Государство не гарантирует доходность инвестиций в паевые инвестиционные фонды. До приобретения инвестиционных паёв следует ознакомиться с Правилами доверительного управления паевым инвестиционным фондом.<br>ООО "УК "Проект" не несёт ответственности за возможные убытки инвестора в случае совершения операций с паями.</div>
			</div>
		</div>
	</div>
</div>

<footer>
<!--	<div class="footer-info-area">-->

	<div class="content">
		<div class="footer-items">
			<div class="footer-item">
				<div class="footer-item-block">
					<div class="footer-item-text">
						<div class="footer-text-header">
							<a href="/">
								<img class="footer-logo" alt="" src="/images/footer-logo.svg">
							</a>
						</div>
						<div class="footer-text-row-block">
							<div class="row-block-img"></div>
							<a href="/admin">
								<div class="row-block-txt">Общество с ограниченной ответственностью «Управляющая компания «Проект»</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-item">
				<div class="footer-item-block">
					<div class="footer-item-text">
						<div class="footer-text-header">Об организации</div>
						<div class="footer-text-row-block">
							<div class="row-block-img"></div>
							<div class="row-block-txt">ИНН/КПП<br>1655449328 / 165501001</div>
						</div>
						<div class="footer-text-row-block">
							<div class="row-block-img"></div>
							<div class="row-block-txt">ОГРН<br>1201600087150</div>
						</div>
						<div class="footer-text-row-block">
							<div class="row-block-img"></div>
							<div class="row-block-txt">Лицензия №&nbsp;21-000-1-01049<br>выдана Банком России 27.07.2021&nbsp;г. (лицензия бессрочная)</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-item">
				<div class="footer-item-block">
					<div class="footer-item-text">
						<div class="footer-text-header">Адреса и контакты</div>
						<div class="footer-text-row-block">
							<div class="row-block-img"><img alt="" src="/images/f-map.png"></div>
							<div class="row-block-txt"><?= Yii::$app->params['addressCity'] . Yii::$app->params['addressStreet'] ?></div>
						</div>
						<div class="footer-text-row-block">
							<div class="row-block-img"><img alt="" src="/images/f-phone.png"></div>
							<div class="row-block-txt">Телефон :<br>&nbsp;&nbsp;&nbsp;<?= Yii::$app->params['phoneWork'] ?></div>
						</div>
						<div class="footer-text-row-block">
							<div class="row-block-img"><img alt="" src="/images/f-globe.png"></div>
							<div class="row-block-txt">Электронная почта :<br>&nbsp;&nbsp;&nbsp;<?= Yii::$app->params['mainEmail'] ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-item">
				<div class="footer-item-block">
					<div class="footer-item-text">
						<div class="footer-text-header">Карта сайта</div>
<!--						<div class="footer-text-row-block">-->
<!--							<div class="row-block-img"></div>-->
<!--							<div class="row-block-txt" id="btn-menu-f-main">О компании</div>-->
<!--						</div>-->
						<div class="footer-text-row-block">
							<div class="row-block-img"></div>
							<div class="row-block-txt">
								<a href="/site/about" id="btn-menu-f-main">О компании</a>
							</div>
						</div>
<!--						<div class="footer-text-row-block">-->
<!--							<div class="row-block-img"></div>-->
<!--							<div class="row-block-txt" id="btn-menu-f-open_data">Раскрытие информации</div>-->
<!--						</div>-->
						<div class="footer-text-row-block">
							<div class="row-block-img"></div>
							<div class="row-block-txt">
								<a href="/site/open-info" id="btn-menu-f-open_data">Раскрытие информации</a>
							</div>
						</div>
<!--						<div class="footer-text-row-block">-->
<!--							<div class="row-block-img"></div>-->
<!--							<div class="row-block-txt" id="btn-menu-f-news">Новости</div>-->
<!--						</div>-->
						<div class="footer-text-row-block">
							<div class="row-block-img"></div>
							<div class="row-block-txt">
								<a href="/site/news" id="btn-menu-f-news">Новости</a>
							</div>
						</div>
<!--						<div class="footer-text-row-block">-->
<!--							<div class="row-block-img"></div>-->
<!--							<div class="row-block-txt" id="btn-menu-f-contact">Контакты</div>-->
<!--						</div>-->
						<div class="footer-text-row-block">
							<div class="row-block-img"></div>
							<div class="row-block-txt">
								<a href="/site/contact" id="btn-menu-f-contact">Контакты</a>
							</div>
						</div>
<!--						<div class="footer-text-row-block">-->
<!--							<div class="row-block-img"></div>-->
<!--							<div class="row-block-txt" id="btn-menu-f-feedback">Обратная связь</div>-->
<!--						</div>-->
						<div class="footer-text-row-block">
							<div class="row-block-img"></div>
							<div class="row-block-txt">
								<a href="/site/contact/#section-feedback" id="btn-menu-f-feedback">Обратная связь</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="footer-copyright">
			<span>&copy;  <a href="/index.php"> <?= Html::encode(Yii::$app->name) ?> </a> 2020-<?= date('Y') ?></span>
		</div>
	</div>
</footer>

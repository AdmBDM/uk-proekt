<?php

/* @var $this View */
/* @var $content string */

use yii\bootstrap4\Html;
use yii\web\View;

?>
<!--<footer class="footer mt-auto py-3 text-muted">-->
<footer>
<!--	<div class="footer-info-area">-->
	<div class="content">
		<div class="footer-items">
			<div class="footer-item">
				<div class="footer-item-block">
					<div class="footer-item-text">
						<div class="footer-text-header">
							<a href="/index.php">
								<img class="footer-logo" alt="" src="/images/footer-logo.svg">
							</a>
						</div>
						<div class="footer-text-row-block">
							<div class="row-block-img"></div>
							<div class="row-block-txt">Общество с ограниченной ответственностью «Управляющая компания «Проект»</div>
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
							<div class="row-block-txt">420111, Республика Татарстан, г. Казань, ул. Астрономическая, д. 8/21, оф. 17</div>
						</div>
						<div class="footer-text-row-block">
							<div class="row-block-img"><img alt="" src="/images/f-phone.png"></div>
							<div class="row-block-txt">Телефон :<br>&nbsp;&nbsp;&nbsp;+7 (843) 251-18-19</div>
						</div>
						<div class="footer-text-row-block">
							<div class="row-block-img"><img alt="" src="/images/f-globe.png"></div>
							<div class="row-block-txt">Электронная почта :<br>&nbsp;&nbsp;&nbsp;main@uk-proekt.ru</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-item">
				<div class="footer-item-block">
					<div class="footer-item-text">
						<div class="footer-text-header">Карта сайта</div>
						<div class="footer-text-row-block">
							<div class="row-block-img"></div>
							<div class="row-block-txt" id="btn-menu-f-main">О компании</div>
						</div>
						<div class="footer-text-row-block">
							<div class="row-block-img"></div>
							<div class="row-block-txt" id="btn-menu-f-open_data">Раскрытие информации</div>
						</div>
						<div class="footer-text-row-block">
							<div class="row-block-img"></div>
							<div class="row-block-txt" id="btn-menu-f-news">Новости</div>
						</div>
						<div class="footer-text-row-block">
							<div class="row-block-img"></div>
							<div class="row-block-txt" id="btn-menu-f-contact">Контакты</div>
						</div>
						<div class="footer-text-row-block">
							<div class="row-block-img"></div>
							<div class="row-block-txt" id="btn-menu-f-feedback">Обратная связь</div>
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

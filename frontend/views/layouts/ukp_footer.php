<?php

/* @var $this View */
/* @var $content string */

use yii\bootstrap4\Html;
use yii\web\View;

?>
<!--<footer class="footer mt-auto py-3 text-muted">-->
<footer class="footer mt-auto">
	<div class="footer-info-area">
		<div class="content">
			<div class="footer-area-inner-wrap">
				<div class="block-div footer-container">
					<div class="block-some-columns footer-area-row">
						<div class="block-div footer-area-col">
							<div id="div_block-116-16" class="ct-div-block single-footer-widget">
								<div>
									<a href="/index.php">
										<img class="footer-logo" alt="" src="/images/footer-logo.svg">
									</a>
								</div>
								<p class="footer-logo-text">Общество с ограниченной ответственностью «Управляющая компания «Проект»</p>
							</div>
						</div>
						<div class="block-div footer-area-col">
							<div>
								<h1 class="footer-col-header">ОБ ОРГАНИЗАЦИИ</h1>
								<div class="footer-about-span">
									<span>ИНН/КПП<br>1655449328 / 165501001</span><br>
								</div>
								<div class="footer-about-span">
									<span>ОГРН<br>1201600087150</span><br>
								</div>
								<div class="footer-about-span">
									<span>Лицензия №&nbsp;21-000-1-01049<br>выдана Банком России 27.07.2021&nbsp;г. (лицензия бессрочная)</span><br>
								</div>
							</div>
						</div>
						<div class="block-div footer-area-col">
							<div>
								<h1 class="footer-col-header">АДРЕСА И КОНТАКТЫ</h1>
								<div class="block-div footer-contact-info">
									<img alt="" src="/images/footer-map.png">
									<div class="span">
										420111, Республика Татарстан, г. Казань, ул. Астрономическая, д. 8/21, оф. 17
									</div>
								</div>
								<div class="block-div footer-contact-info">
									<img alt="" src="/images/footer-phone.png">
									<div class="span">
										<a href="tel:+78432511819" target="_self">Телефон : +7 (843) 251-18-19</a>
									</div>
								</div>
								<div class="block-div footer-contact-info">
									<img alt="" src="/images/footer-globe.png">
									<div class="span">
										<a href="mailto:main@uk-proekt.ru" target="_self">Электронная почта :<br>main@uk-proekt.ru</a>
									</div>
								</div>
							</div>
						</div>
						<div class="block-div footer-area-col">
							<div>
								<h1 class="footer-col-header">КАРТА САЙТА</h1>
								<div>
									<ul>
										<li><a href="/index.php#about">О компании</a></li>
										<li><a href="/raskrytie-informatsii">Раскрытие информации</a></li>
										<li><a href="/news">Новости</a></li>
										<li><a href="/contacts">Контакты</a></li>
										<li><a href="/contacts">Обратная связь</a></li>
									</ul>
								</div>
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

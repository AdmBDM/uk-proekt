<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model ContactForm */

use frontend\models\ContactForm;
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

//$this->title = 'Contact';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact" id="section-contact">
	<div class="go-to-admin">
		<a href="/admin">Наши координаты</a>
	</div>
	<div class="content">
		<div class="map-yandex" style="position:relative;overflow:hidden;">
<!--			<a href="https://yandex.ru/maps/43/kazan/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0;" hidden>Казань</a>-->
<!--			<a href="https://yandex.ru/maps/43/kazan/?from=api-maps&ll=49.116509%2C55.788843&mode=usermaps&origin=jsapi_2_1_79&um=constructor%3Ac001f6bd6724c95d6ac0ac15766d4c74423b42bee6f4cdbae6fd7db66eda7d5a&utm_medium=mapframe&utm_source=maps&z=16" style="color:#eee;font-size:12px;position:absolute;top:14px;" hidden>Карта Казани с улицами и номерами домов онлайн — Яндекс.Карты</a>-->
<!--			<iframe class="map-yandex" src="https://yandex.ru/map-widget/v1/-/CCUuiDrVlA" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>-->
<!--			<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A643c8a7ea0bbef4d8d878fe95c5766a2b53a9d8b2e8b253757802c25f2ede97d&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>-->
			<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A643c8a7ea0bbef4d8d878fe95c5766a2b53a9d8b2e8b253757802c25f2ede97d&amp;source=constructor" frameborder="1"></iframe>
		</div>

		<div class="contact-info">
			<div class="contact-items">
				<div class="contact-item">
					<div class="contact-item-block">
						<img src="/images/c-map.png" alt="" class="contact-item-img">
						<div class="contact-item-text">
							<div class="contact-text-row">Офис в Казани:</div>
							<div class="contact-text-row">ул. Астрономическая, д. 8/21, оф. 17</div>
						</div>
					</div>
				</div>
				<div class="contact-item">
					<div class="contact-item-block">
						<img src="/images/c-phone.png" alt="" class="contact-item-img">
						<div class="contact-item-text">
							<div class="contact-text-row">Телефон : <?= Yii::$app->params['phoneWork'] ?></div>
							<div class="contact-text-row">Телефон : <?= Yii::$app->params['phoneMobile'] ?></div>
						</div>
					</div>
				</div>
				<div class="contact-item">
					<div class="contact-item-block">
						<img src="/images/c-globe.png" alt="" class="contact-item-img">
						<div class="contact-item-text">
							<div class="contact-text-row">Эл.почта: <?= Yii::$app->params['mainEmail'] ?></div>
							<div class="contact-text-row">Пресс-служба: <?= Yii::$app->params['mainEmail'] ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-feedback" id="section-feedback">
			<h3>Написать сообщение</h3>
			<div class="feedback-items">
				<div class="feedback-form">
					<div class="row">
						<div class="col-lg-9">
							<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

							<?= $form->field($model, 'name')->textInput(['placeholder' => 'Ваше имя']) ?>

							<?= $form->field($model, 'email')->textInput(['placeholder' => 'Ваш e-mail для обратной связи']) ?>

							<?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'Текст сообщения']) ?>

							<?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
								'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
							]) ?>

							<div class="form-group">
								<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-main', 'name' => 'contact-button']) ?>
							</div>

							<?php ActiveForm::end(); ?>
						</div>
					</div>
				</div>

				<div class="feedback-info">
					<div class="feedback-info-block">
						<h4 class="feedback-info-headline">Нужна дополнительная информация?</h4>
						<p class="feedback-info-text">Напишите нам через форму обратной связи</p>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>

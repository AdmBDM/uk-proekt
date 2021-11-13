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
	<div class="content">
		<div style="position:relative;overflow:hidden;">
			<a href="https://yandex.ru/maps/43/kazan/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;" hidden>Казань</a>
			<a href="https://yandex.ru/maps/43/kazan/?from=api-maps&ll=49.116509%2C55.788843&mode=usermaps&origin=jsapi_2_1_79&um=constructor%3Ac001f6bd6724c95d6ac0ac15766d4c74423b42bee6f4cdbae6fd7db66eda7d5a&utm_medium=mapframe&utm_source=maps&z=16" style="color:#eee;font-size:12px;position:absolute;top:14px;" hidden>Карта Казани с улицами и номерами домов онлайн — Яндекс.Карты</a>
			<iframe class="map-yandex" src="https://yandex.ru/map-widget/v1/-/CCUuiDrVlA" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
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
							<div class="contact-text-row">Телефон : +7 (843) 251-18-19</div>
							<div class="contact-text-row">Телефон : +7 987 172-75-92</div>
						</div>
					</div>
				</div>
				<div class="contact-item">
					<div class="contact-item-block">
						<img src="/images/c-globe.png" alt="" class="contact-item-img">
						<div class="contact-item-text">
							<div class="contact-text-row">Эл. почта : main@uk-proekt.ru</div>
							<div class="contact-text-row">Пресс-служба : main@uk-proekt.ru</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<h2>Блок контактов</h2>
		<p>
			Оставьте своё сообщение через форму обратной связи.
		</p>

		<div class="row">
			<div class="col-lg-5">
				<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

				<?= $form->field($model, 'name')->textInput() ?>

				<?= $form->field($model, 'email') ?>

				<?= $form->field($model, 'subject') ?>

				<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

				<?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
					'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
				]) ?>

				<div class="form-group">
					<?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
				</div>

				<?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>

</div>

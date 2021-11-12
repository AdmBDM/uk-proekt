<?php

/* @var $this View */
/* @var $content string */

//use yii\bootstrap4\Html;
//use yii\bootstrap4\Nav;
//use yii\bootstrap4\NavBar;
use yii\web\View;
?>

<header class="header-wrapper">
	<div class="block-row">
		<div class="block-div block-div-info">
			<div class="block-some-columns">
				<div class="block-div block-single-column">
					<div class="block-div content">
						<img src="/images/message.png" alt="">
						<a href="mailto:main@uk-proekt.ru">
							<div class="block-div info-text">
							<div class="info-text-block">
								<span>main@uk-proekt.ru</span>
							</div>
							<div class="info-text-block">
								<span style="font-size: .9em">эл. почта</span>
							</div>
						</div>
						</a>
					</div>
				</div>
				<div class="block-div block-single-column">
					<div class="block-div content">
						<a href="/index.php"><img src="/images/logo.svg" alt="" class="logo"></a>
					</div>
				</div>
				<div class="block-div block-single-column">
					<div class="block-div content">
						<a class="btn-main" href="#">Обратная связь</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="header-nav">
		<div class="content">
			<div class="header-nav-menu">
				<div class="header-nav-menu-center">
					<ul class="header-nav-menu-list">
						<li class="header-nav-menu-item">
<!--							<a href="/index.php#about">О компании</a>-->
<!--							<a href="#site-about">О компании</a>-->
							<span id="btn-menu-main">О компании</span>
						</li>
						<li class="header-nav-menu-item">
<!--							<a href="https://uk-proekt.ru/raskrytie-informatsii/" aria-current="page">Раскрытие информации</a>-->
<!--							<a href="#" aria-current="page">Раскрытие информации</a>-->
							<span id="btn-menu-open_data">Раскрытие информации</span>
						</li>
						<li class="header-nav-menu-item">
<!--							<a href="https://uk-proekt.ru/news/">Новости</a>-->
<!--							<a href="#">Новости</a>-->
							<span id="btn-menu-news">Новости</span>
						</li>
						<li class="header-nav-menu-item">
<!--							<a href="https://uk-proekt.ru/contacts/">Контакты</a>-->
<!--							<a href="#">Контакты</a>-->
							<span id="btn-menu-contact">Контакты</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<!--	<div class="content">-->
<!--	--><?php
//	NavBar::begin([
//		'brandLabel' => Yii::$app->name,
//		'brandUrl' => Yii::$app->homeUrl,
//		'options' => [
////			'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
//			'class' => 'navbar navbar-expand-md',
//		],
//	]);
//	$menuItems = [
//		['label' => 'На главную', 'url' => ['/site/index']],
//		['label' => 'О нас', 'url' => ['/site/about']],
//		['label' => 'Контакты', 'url' => ['/site/contact']],
//	];
//	if (Yii::$app->user->isGuest) {
//		$menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
//		$menuItems[] = ['label' => 'Войти', 'url' => ['/site/login']];
//	} else {
//		$menuItems[] = '<li>'
//			. Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
//			. Html::submitButton(
//				'Logout (' . Yii::$app->user->identity->username . ')',
//				['class' => 'btn btn-link logout']
//			)
//			. Html::endForm()
//			. '</li>';
//	}
//	echo Nav::widget([
//		'options' => ['class' => 'navbar-nav'],
//		'items' => $menuItems,
//	]);
//	NavBar::end();
//	?>
<!--	</div>-->
</header>

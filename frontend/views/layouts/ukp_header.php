<?php

/* @var $this View */
/* @var $content string */

use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
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
								<span>эл. почта</span>
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
			Здесь будет навигация
		</div>
	</div>

	<div class="content">
	<?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
//            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
            'class' => 'navbar navbar-expand-md',
        ],
    ]);
    $menuItems = [
        ['label' => 'На главную', 'url' => ['/site/index']],
        ['label' => 'О нас', 'url' => ['/site/about']],
        ['label' => 'Контакты', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Войти', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
	</div>
</header>

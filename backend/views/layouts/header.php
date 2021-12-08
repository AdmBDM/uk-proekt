<?php
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $content string */

Yii::$app->name = 'ООО «УК «Проект»';
?>

<header class="main-header">

	<?= Html::a('<span class="logo-mini">УКП</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

	<nav class="navbar navbar-static-top" role="navigation">

		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>

		<div style="width: 80%">&nbsp;</div>

		<div class="navbar-custom-menu">

			<ul class="nav navbar-nav">
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="/images/ukp-logo.png" class="user-image" alt="User Image"/>
<!--						<span class="hidden-xs">УК Проект</span>-->
						<span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="/images/ukp-logo.png" class="img-circle"
								 alt="User Image"/>
<!--							<p>УК Проект</p>-->
							<p><?= Yii::$app->user->identity->username ?></p>
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-right">
								<?= Html::a(
									'Выход',
									['/site/logout'],
									['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
								) ?>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>

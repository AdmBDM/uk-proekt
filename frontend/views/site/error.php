<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">
	<div class="content">

		<p>&nbsp;</p>

		<div class="alert alert-danger">
			<?= 'При попытке выполнить запрос и перейти по адресу <b class="alert alert-warning">' . $_SERVER['REQUEST_URI'] . '</b> ' . mb_strtolower($this->context->module->requestedAction->defaultMessage); ?>
			<h2><?= Html::encode($this->title) ?></h2>
			<?= nl2br(Html::encode($message)) ?>
		</div>

		<p class="alert alert-warning">Пожалуйста, сообщите администратору об ошибке.</p>

		<p><a href="/">На главную</a></p>
	</div>

</div>

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

						</div>
						<div class="block-div footer-area-col">

						</div>
						<div class="block-div footer-area-col">

						</div>
						<div class="block-div footer-area-col">

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

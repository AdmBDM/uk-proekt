<?php

/* @var $this View */
/* @var $content string */

use yii\bootstrap4\Html;
use yii\web\View;

?>
<footer class="footer mt-auto py-3 text-muted">
    <div class="content">
        <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> 2020-<?= date('Y') ?></p>
    </div>
</footer>

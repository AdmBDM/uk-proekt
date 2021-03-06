<?php

/* @var $this View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
//use yii\bootstrap4\Nav;
//use yii\bootstrap4\NavBar;
use yii\web\View;

Yii::$app->name = 'ООО «УК «Проект»';
$this->title = Yii::$app->name;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<?= $this->render('ukp_header')?>

<main role="main" class="flex-shrink-0">
	<?= Breadcrumbs::widget([
		'links' => $this->params['breadcrumbs'] ?? [],
	]) ?>
	<?= Alert::widget() ?>
	<?= $content ?>
</main>

<?= $this->render('ukp_footer')?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();

<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
		'css/site_back.css',
//		'css/font-awesome.min.css',
//		'css/bootstrap.min.css',
//		'css/AdminLTE.min.css',
//		'css/_all-skins.min.css',
	];
	public $js = [
		'js/script.js',
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap4\BootstrapAsset',
	];
}

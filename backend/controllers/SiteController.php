<?php

namespace backend\controllers;

use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
//use yii\filters\AccessControl;
//use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
//class SiteController extends Controller
class SiteController extends MyController
{
	/**
	 * @return array[]
	 */
	public function behaviors(): array
	{
		return array_merge(
			parent::behaviors(),
			[
				'verbs' => [
					'class' => VerbFilter::class,
					'actions' => [
						'logout' => ['post'],
//					'logout' => ['get'],
					],
				],
			]
	);
	}

	/**
	 * @return string[][]
	 */
	public function actions(): array
	{
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
		];
	}

	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionIndex(): string
	{
		return $this->render('index');
	}

	/**
	 * Login action.
	 *
	 * @return string|Response
	 */
	public function actionLogin()
	{
		if (!Yii::$app->user->isGuest) {
			return $this->goHome();
		}

		$this->layout = 'blank';

		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login()) {
			return $this->goBack();
		}

		$model->password = '';

		return $this->render('login', [
			'model' => $model,
		]);
	}

	/**
	 * Logout action.
	 *
	 * @return string
	 */
	public function actionLogout()
	{
		Yii::$app->user->logout();

		return $this->redirect('/admin');

	}
}

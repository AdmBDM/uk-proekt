<?php

namespace backend\controllers;

use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
	/**
	 * @return array[]
	 */
	public function behaviors(): array
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'actions' => ['login', 'error', 'create-user', 'params', 'session', ],
						'allow' => true,
					],
					[
						'actions' => ['logout', 'index', 'session',],
						'allow' => true,
						'roles' => ['@'],
					],
//					[
//						'actions' => ['login', 'error'],
//						'allow' => true,
//					],
//					[
//						'actions' => ['logout', 'index'],
//						'allow' => true,
//						'roles' => ['@'],
//					],
				],
			],
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
//					'logout' => ['post'],
					'logout' => ['get'],
				],
			],
		];
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
	 * @return string|Response
	 */
	public function actionLogout()
	{
		Yii::$app->user->logout();

//		return $this->goHome();

		if (!Yii::$app->user->isGuest) {
			return $this->goHome();
		}

		$model = new LoginForm();
//		if ($model->load(Yii::$app->request->post()) && $model->login()) {
//			return $this->goBack();
//		}

		$model->password = '';

		return $this->render('login', [
			'model' => $model,
		]);

	}
}

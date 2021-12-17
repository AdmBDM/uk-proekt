<?php

namespace backend\controllers;

use common\components\FileLoadHelper;
use common\models\DocsGroup;
use Throwable;
use Yii;
use yii\data\ActiveDataProvider;
use yii\db\StaleObjectException;
//use yii\filters\AccessControl;
//use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * DocsGroupController implements the CRUD actions for DocsGroup model.
 */
//class DocsGroupController extends Controller
class DocsGroupController extends MyController
{
	/**
	 * @return array|string[][]|string[][][][]
	 */
	public function behaviors(): array
	{
		return array_merge(
			parent::behaviors(),
//			[
//				'access' => [
//					'class' => AccessControl::class,
//					'rules' => [
//						[
//							'actions' => ['login', 'error'],
//							'allow' => true,
//							'roles' =>['?']
//						],
//					],
//				],
//			],
			[
				'verbs' => [
					'class' => VerbFilter::class,
					'actions' => [
						'delete' => ['POST'],
					],
				],
			]
		);
	}

	/**
	 * Lists all DocsGroup models.
	 * @return string
	 */
	public function actionIndex(): string
	{
		$dataProvider = new ActiveDataProvider([
			'query' => DocsGroup::find()->orderBy('name_group'),
			/*
			'pagination' => [
				'pageSize' => 50
			],
			'sort' => [
				'defaultOrder' => [
					'id' => SORT_DESC,
				]
			],
			*/
		]);

		return $this->render('index', [
			'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * Displays a single DocsGroup model.
	 * @param int $id ID
	 * @return string
	 * @throws NotFoundHttpException
	 */
	public function actionView(int $id): string
	{
		return $this->render('view', [
			'model' => $this->findModel($id),
		]);
	}

	/**
	 * Creates a new DocsGroup model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return string|Response
	 */
	public function actionCreate()
	{
		$model = new DocsGroup();

		if ($this->request->isPost) {
			if ($model->load($this->request->post()) && $model->save()) {

				$dir = FileLoadHelper::getDocsPath((string)$model->id); // проверка наличия каталога
				if (!is_dir($dir)) {
					mkdir($dir, 0777, true);
				}
				return $this->redirect(['view', 'id' => $model->id]);
			}
		} else {
			$model->loadDefaultValues();
		}

		return $this->render('create', [
			'model' => $model,
		]);
	}

	/**
	 * Updates an existing DocsGroup model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param int $id ID
	 * @return string|Response
	 * @throws NotFoundHttpException
	 */
	public function actionUpdate(int $id)
	{
		$model = $this->findModel($id);

		if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {

			$dir = FileLoadHelper::getDocsPath((string)$model->id); // проверка наличия каталога
			if (!is_dir($dir)) {
				mkdir($dir, 0777, true);
			}

			return $this->redirect(['view', 'id' => $model->id]);
		}

		return $this->render('update', [
			'model' => $model,
		]);
	}

	/**
	 * Deletes an existing DocsGroup model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param int $id ID
	 * @return Response
	 * @throws Throwable
	 * @throws StaleObjectException
	 * @throws NotFoundHttpException
	 */
	public function actionDelete(int $id): Response
	{
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}

	/**
	 * Finds the DocsGroup model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param int $id ID
	 * @return DocsGroup|null
	 * @throws NotFoundHttpException
	 */
	protected function findModel(int $id)
	{
		if (($model = DocsGroup::findOne($id)) !== null) {
			return $model;
		}

		throw new NotFoundHttpException(Yii::$app->params['messages']['throwNotFound']);
	}
}

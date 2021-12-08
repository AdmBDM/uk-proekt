<?php

namespace backend\controllers;

use common\models\OpenDocs;
use Throwable;
use Yii;
use yii\data\ActiveDataProvider;
use yii\db\StaleObjectException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * OpenDocsController implements the CRUD actions for OpenDocs model.
 */
class OpenDocsController extends Controller
{
	/**
	 * @return array
	 */
	public function behaviors(): array
	{
		return array_merge(
			parent::behaviors(),
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
	 * Lists all OpenDocs models.
	 * @return string
	 */
	public function actionIndex(): string
	{
		$_SESSION['__curGr'] = Yii::$app->request->queryParams['gr'];

		$dataProvider = new ActiveDataProvider([
			'query' => OpenDocs::find()
					->where('docs_group_id=' . $_SESSION['__curGr']),
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
	 * Displays a single OpenDocs model.
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
	 * Creates a new OpenDocs model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return string|Response
	 */
	public function actionCreate()
	{
		$model = new OpenDocs();

		if ($this->request->isPost) {
			if ($model->load($this->request->post()) && $model->save()) {
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
	 * Updates an existing OpenDocs model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param int $id ID
	 * @return string|Response
	 * @throws NotFoundHttpException
	 */
	public function actionUpdate(int $id)
	{
		$model = $this->findModel($id);

//		if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
		if ($this->request->isPost && $model->load($this->request->post())) {

			$post = Yii::$app->request->post();
			$model->pub_date_start = date('Y-m-d H:i', strtotime($post['OpenDocs']['pub_date_start']));
			$model->pub_date_end = $post['OpenDocs']['pub_date_end'] ? date('Y-m-d H:i', strtotime($post['OpenDocs']['pub_date_end'])) : null;
			$model->save();

			return $this->redirect(['view', 'id' => $model->id]);
		}

		return $this->render('update', [
			'model' => $model,
		]);
	}

	/**
	 * Deletes an existing OpenDocs model.
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
	 * Finds the OpenDocs model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param int $id ID
	 * @return OpenDocs|null
	 * @throws NotFoundHttpException
	 */
	protected function findModel(int $id)
	{
		if (($model = OpenDocs::findOne($id)) !== null) {
			return $model;
		}

		throw new NotFoundHttpException(Yii::$app->params['messages']['throwNotFound']);
	}
}

<?php

namespace backend\controllers;

use common\components\FileLoadHelper;
use common\models\OpenDocs;
use common\models\UkpFiles;
use Throwable;
use Yii;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\db\StaleObjectException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * OpenDocsController implements the CRUD actions for OpenDocs model.
 */
class OpenDocsController extends MyController
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
					->where('docs_group_id=' . $_SESSION['__curGr'])
					->orderBy('pub_date_start desc'),
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

		$model->pub_date_start = date('d.m.Y H:i',time());

		if ($this->request->isPost) {
//			if ($model->load($this->request->post()) && $model->save()) {
			if ($model->load($this->request->post())) {

				$post = $this->request->post();
				$model->pub_date_start = $post['OpenDocs']['pub_date_start'] ? date('Y-m-d H:i',strtotime($post['OpenDocs']['pub_date_start'])) : null;
				$model->pub_date_end = $post['OpenDocs']['pub_date_end'] ? date('Y-m-d H:i',strtotime($post['OpenDocs']['pub_date_end'])) : null;

				$model->save();
				$this->checkImageFile($model);

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

		$model->pub_date_start = date('d.m.Y H:i', strtotime($model->pub_date_start));
		$model->pub_date_end = $model->pub_date_end ? date('d.m.Y H:i', strtotime($model->pub_date_end)) : null;

		if ($this->request->isPost && $model->load($this->request->post())) {

			$post = Yii::$app->request->post();

			$model->pub_date_start = date('Y-m-d H:i', strtotime($post['OpenDocs']['pub_date_start']));
			$model->pub_date_end = $post['OpenDocs']['pub_date_end'] ? date('Y-m-d H:i', strtotime($post['OpenDocs']['pub_date_end'])) : null;
			$model->save();

			$this->checkImageFile($model);

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


	/**
	 * @param integer $fileId
	 * @return array|ActiveRecord|null
	 */
	public function getFile(int $fileId)
	{
		return UkpFiles::find()->where('id=' . $fileId)->one();
	}


	/**
	 * @param OpenDocs     $model
	 * @return void
	 */
	public function checkImageFile(OpenDocs $model)
	{
// формирование временного файла на сервере
		$imageFile = UploadedFile::getInstance($model, 'imageFile');

// выход при отсутствии файла для загрузки
		if (is_null($imageFile)) return;

		$model->file_ext = $imageFile->getExtension();
		$imageFile->saveAs(FileLoadHelper::getDocsPath($_SESSION['__curGr'], true) . $model->system_file_name . '.' . $model->file_ext);

// формируем запись для БД
		$fileUKP = new UkpFiles();
		$fileUKP->full_path = FileLoadHelper::getDocsPath($_SESSION['__curGr']);
		$fileUKP->full_path = $fileUKP->full_path[0] == '/' ? $fileUKP->full_path : '/' . $fileUKP->full_path;

		$fileUKP->file_ext = $model->file_ext = $imageFile->getExtension();

		$fileUKP->internal_file_name = $model->system_file_name;
		$fileUKP->external_file_name = $imageFile->getBaseName();
		$fileUKP->controller = 'OpenDocs->New';

//		$imageFile->saveAs(FileLoadHelper::getDocsPath($_SESSION['__curGr']) . $model->system_file_name . '.' . $model->file_ext);

		$fileUKP->save();

// корректируем данные по прикреплённому файлу на сервере
		$model->image_id = $fileUKP->id;
		$model->save();
	}
}

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
//use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * OpenDocsController implements the CRUD actions for OpenDocs model.
 */
//class OpenDocsController extends Controller
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
		$imageFile = UploadedFile::getInstance($model, 'imageFile');

		if ($this->request->isPost) {
//			if ($model->load($this->request->post()) && $model->save()) {
			if ($model->load($this->request->post())) {

				$this->checkImageFile($imageFile, $model);
				$model->save();

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
//		$model->imageFile = $this->getFile($model->image_id);
		$imageFile = UploadedFile::getInstance($model, 'imageFile');

//		if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
		if ($this->request->isPost && $model->load($this->request->post())) {

			$post = Yii::$app->request->post();

//			$model->image = FileLoadHelper::getFileExt($imageFile->name);
//			$model->image = FileLoadHelper::getDocsPath();

//			$model->imageFile = UploadedFile::getInstance($model, 'imageFile');

//			myDebug($imageFile);
//			myDebug($post);
//			if (is_null($imageFile)) {
//				myDebug($imageFile);
//			} else {
//				myDebug($post);
//			}

//			$result = $imageFile->saveAs(FileLoadHelper::getDocsPath() . $model->system_file_name . '.' . $model->file_ext);
//			myDebug($result);

			$this->checkImageFile($imageFile, $model);

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


	/**
	 * @param integer $fileId
	 * @return array|ActiveRecord|null
	 */
	public function getFile(int $fileId)
	{
		return UkpFiles::find()->where('id=' . $fileId)->one();
	}


	/**
	 * @param UploadedFile $imageFile
	 * @param OpenDocs     $model
	 * @return void
	 */
	public function checkImageFile(UploadedFile $imageFile, OpenDocs $model)
	{
		if (!is_null($imageFile)) {

			$fileUKP = new UkpFiles();
			$fileUKP->full_path = FileLoadHelper::getDocsPath($_SESSION['__curGr']);

			$fileUKP->file_ext = $model->file_ext = $imageFile->getExtension();

			$fileUKP->internal_file_name = $model->system_file_name;        // . '.' . $fileUKP->file_ext;
			$fileUKP->external_file_name = $imageFile->getBaseName();       // . '.' . $fileUKP->file_ext;
			$fileUKP->controller = 'OpenDocs->New';

			$imageFile->saveAs(FileLoadHelper::getDocsPath($_SESSION['__curGr']) . $model->system_file_name . '.' . $model->file_ext);

			$fileUKP->save();

			$model->image_id = $fileUKP->id;
		}
	}
}

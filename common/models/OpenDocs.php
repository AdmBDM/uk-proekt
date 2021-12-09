<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "open_docs".
 *
 * @var UploadedFile
 * Здесь хранится экземпляр класса UploadedFile
 *
 * @property int $id
 * @property int $docs_group_id
 * @property string $original_file_name
 * @property string $system_file_name
 * @property string $pub_date_start
 * @property string|null $pub_date_end
 * @property string $file_ext
 * @property string $image
 *
 * @property DocsGroup $docsGroup
 */
class OpenDocs extends ActiveRecord
{

	public $imageFile;

	/**
	 * @return string
	 */
	public static function tableName(): string
	{
		return mb_strtolower(Fields::TAB_OPEN_DOCS);
	}

	/**
	 * @return array
	 */
	public function rules(): array
	{
		return Fields::getRules(Fields::TAB_OPEN_DOCS);
	}

	/**
	 * @return string[]
	 */
	public function attributeLabels(): array
	{
		return Fields::getAttributes(Fields::TAB_OPEN_DOCS);
	}

	/**
	 * Gets query for [[DocsGroup]].
	 *
	 * @return ActiveQuery
	 */
	public function getDocsGroup(): ActiveQuery
	{
		return $this->hasOne(DocsGroup::class, ['id' => 'docs_group_id']);
	}

/* --- блок свойств для привязки файла --- */

	public function uploadImage(UploadedFile $image, $currentImage = null)
	{
		if (!is_null($currentImage))
			$this->deleteCurrentImage($currentImage);
		$this->image = $image;
		if($this->validate())
			return $this->saveImage();
		return false;
	}

	private function getUploadPath()
	{
//		return Yii::$app->params['uploadPath'] . 'files/';
		return Yii::$app->params['dir']['files'];
	}


	/**
	 * @return string
	 */
	public function generateFileName(): string
	{
//		do {
//			$name = substr(md5(microtime() . rand(0, 1000)), 0, 20);
//			$file = strtolower($name .'.'. $this->image->extension);
//		} while (file_exists($file));
//		return $file;
		return bin2hex(openssl_random_pseudo_bytes(16)) . '.' . $this->file_ext;
	}

	public function deleteCurrentImage($currentImage)
	{
		if ($currentImage && $this->fileExists($currentImage)) {
			unlink($this->getUploadPath() . $currentImage);
		}
	}

	/**
	 * @param $currentFile
	 * @return bool
	 */
	public function fileExists($currentFile): bool
	{
		$file = $currentFile ? $this->getUploadPath() . $currentFile : null;
		return file_exists($file);
	}

	/**
	 * @return string
	 */
	public function saveImage(): string
	{
		$filename = $this->generateFilename();
		$this->image->saveAs($this->getUploadPath() . $filename);
		return $filename;
	}
}

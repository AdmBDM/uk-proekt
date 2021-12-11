<?php

namespace common\models;

//use Yii;

class Fields
{
	//определение локальных констант
	const TAB_NEWS = 'News';
	const TAB_DOCS_GROUP = 'Docs_group';
	const TAB_OPEN_DOCS = 'Open_docs';
	const TAB_UKP_FILES = 'Ukp_files';

	/**
	 * @param     $tableName
	 *
	 * @return array|array[]|null
	 */
	static public function getRules($tableName)
	{
		if ($tableName == self::TAB_NEWS) {
			return [
				[['news_date', 'pub_date_start', 'pub_date_end'], 'safe'],
				[['news_text', 'news_anons'], 'string'],
				[['published'], 'boolean'],
			];
		}

		if ($tableName == self::TAB_DOCS_GROUP) {
			return [
				[['name_group', 'dir_group'], 'required'],
				[['name_group', 'dir_group'], 'string'],
				[['dir_group'], 'unique'],
				[['name_group'], 'unique'],
			];
		}

		if ($tableName == self::TAB_OPEN_DOCS) {
			return [
				[['docs_group_id', 'system_file_name'], 'required'],
				[['docs_group_id', 'image_id'], 'default', 'value' => 0],
				[['docs_group_id', 'image_id'], 'integer'],
				[['original_file_name', 'system_file_name', 'image'], 'string'],
				['file_ext', 'string', 'min' => 2, 'max' => 7],
				[['pub_date_start', 'pub_date_end', 'image', 'imageFile'], 'safe'],
				[['docs_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocsGroup::class, 'targetAttribute' => ['docs_group_id' => 'id']],
			];
		}

		if ($tableName == self::TAB_UKP_FILES) {
			return [
				[['full_path', 'internal_file_name', 'external_file_name', 'file_ext', 'controller'], 'string'],
				[['when_add', 'when_ed'], 'safe'],
			];
		}

		return null;
	}

	/**
	 * @param $tableName
	 *
	 * @return string[]|null
	 */
	static public function getAttributes($tableName)
	{
		if ($tableName == self::TAB_NEWS) {
			return [
				'id' => 'ID',
				'news_date' => 'Дата',
				'news_anons' => 'Анонс',
				'news_text' => 'Полный текст',
				'published' => 'Опубликовано',
				'pub_date_start' => 'Начало публикации',
				'pub_date_end' => 'Окончание публикации',
			];
		}

		if ($tableName == self::TAB_DOCS_GROUP) {
			return [
				'id' => 'ID',
				'name_group' => 'Наименование',
				'dir_group' => 'Каталог',
			];
		}

		if ($tableName == self::TAB_OPEN_DOCS) {
			return [
				'id' => 'ID',
				'docs_group_id' => 'Группа',
				'original_file_name' => 'Наименование документа',
				'system_file_name' => 'Имя файла',
				'file_ext' => 'Тип файла',
				'pub_date_start' => 'Дата начала публикации',
				'pub_date_end' => 'Дата окончания публикации',
				'image' => 'Полный путь',
				'image_id' => 'ID файла',
			];
		}

		if ($tableName == self::TAB_UKP_FILES) {
			return [
				'id' => 'ID',
				'full_path' => 'Full Path',
				'internal_file_name' => 'Internal File Name',
				'external_file_name' => 'External File Name',
				'file_ext' => 'File Ext',
				'controller' => 'Controller',
				'when_add' => 'When Add',
				'when_ed' => 'When Ed',
			];
		}

		return null;
	}
}

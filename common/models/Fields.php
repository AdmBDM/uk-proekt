<?php

namespace common\models;

use Yii;

class Fields
{
	//определение локальных констант
	const TAB_NEWS = 'News';
	const TAB_DOCS_GROUP = 'Docs_group';
	const TAB_OPEN_DOCS = 'Open_docs';

	/**
	 * @param     $tableName
	 *
	 * @return array|array[]|null
	 */
	static public function getRules($tableName) {
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
				[['docs_group_id'], 'default', 'value' => 0],
				[['docs_group_id'], 'integer'],
				[['original_file_name', 'system_file_name', 'image', 'imagFile'], 'string'],
				['file_ext', 'string', 'min' => 2, 'max' => 4],
				[['pub_date_start', 'pub_date_end', 'image', 'imageFile'], 'safe'],
				[['docs_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocsGroup::class, 'targetAttribute' => ['docs_group_id' => 'id']],
			];
		}

		return null;
	}

	/**
	 * @param $tableName
	 *
	 * @return string[]|null
	 */
	static public function getAttributes($tableName) {
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
			];
		}

		return null;
	}
}

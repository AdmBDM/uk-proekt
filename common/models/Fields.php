<?php

namespace common\models;

//use Yii;

class Fields
{
	//определение локальных констант
	const TAB_NEWS = 'News';

	/**
	 * @param     $tableName
	 *
	 * @return array|array[]|null
	 */
	static public function getRules($tableName) {
		if ($tableName == self::TAB_NEWS) {
			return [
//				[['news_date',], 'date', 'format' => 'php:d.m.Y'],
//				[['pub_date_start', 'pub_date_end'], 'datetime', 'format' => 'php:d.m.Y H:i:s'],
				[['news_date', 'pub_date_start', 'pub_date_end'], 'safe'],
				[['news_text', 'news_anons'], 'string'],
				[['published'], 'boolean'],
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

		return null;
	}

	/**
	 * @param $tableName
	 *
	 * @return array|null
	 */
//	static public function getJsonNull($tableName) {
//		if ($tableName == self::TAB_NEWS) {
//			return [
//			];
//		}
//
//		return null;
//	}

	/**
	 * @param $tableName
	 *
	 * @return array|null
	 */
//	static public function getJsonVal($tableName) {
//		if ($tableName == self::TAB_NEWS) {
//			return [
//			];
//		}
//
//		return null;
//	}
}

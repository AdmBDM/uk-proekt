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

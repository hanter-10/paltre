<?php
App::uses('AppModel', 'Model');
/**
 * DatPost Model
 *
 * @property DatPost $DatPost
 */
class DatPost extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'post_id';

	public $useTable = "dat_post";


	function getPostDataByTrend($limit, $flg) {

		/* 検索光徳 */
		$fields = array(
				'DatPost.post_id as id',
				'DatPost.source',
				'DatPost.create_datetime',
		);

		/* 検索条件 */
		$conditions = array(
				'DatPost.flg'		=> $flg,				// 1:トレンド, 2:ハッシュタグ
				'DatPost.status'	=> 1,				// 有効
		);

		// 順序
		$order = array(
				'DatPost.create_datetime DESC',			// 降順
		);

		$option = array(
				'fields'		=> $fields,
				'conditions'	=> $conditions,
				'order'			=> $order,
				'limit'			=> $limit,
		);

		return $this->find('all', $option);
	}

	function getPostDataByAll($limit) {

		/* 検索光徳 */
		$fields = array(
				'DatPost.post_id as id',
				'DatPost.source',
				'DatPost.create_datetime',
		);

		/* 検索条件 */
		$conditions = array(
				'DatPost.status'	=> 1,				// 有効
		);

		// 順序
		$order = array(
				'DatPost.create_datetime DESC',			// 降順
				// ランダム抽出の場合は「order by rand()」が使える!!」
		);

		$option = array(
				'fields'		=> $fields,
				'conditions'	=> $conditions,
				'order'			=> $order,
				'limit'			=> $limit,
		);

		return $this->find('all', $option);
	}
}

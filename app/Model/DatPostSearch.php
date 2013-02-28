<?php
App::uses('AppModel', 'Model');
/**
 * Datpostsearch Model
 *
 * @property Datpostsearch $Datpostsearch
 */
class DatPostSearch extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'post_search_id';

	public $useTable = 'dat_post_search';


	function getPostSearchDataByPostId($id){

		/* 検索光徳 */
		$fields = array(
				'DatPostSearch.post_search_id as id',
				'DatPostSearch.source',
				'DatPostSearch.create_datetime',
		);

		/* 検索条件 */
		$conditions = array(
				'DatPostSearch.fk_post_id'	=> $id,
				'DatPostSearch.status'		=> 1,		// 有効
		);

		// 順序
		$order = array(
				'DatPostSearch.create_datetime DESC',			// 降順
		);

		$option = array(
				'fields'		=> $fields,
				'conditions'	=> $conditions,
				'order'			=> $order,
		);

		return $this->find('all', $option);
	}

}

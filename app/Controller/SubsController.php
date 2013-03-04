<?php
/**
 * Static content controller.
 *
 * This file will render views from views/subs/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/subs-controller.html
 */
class SubsController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Subs';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('DatPost','DatPostSearch');


	public function index() {

		$this->layout = 'sub';

		// タイトル
		$title_for_layout = 'ぱるトレ';

		// 最新のトレンドデータ取得
		$TrendData = $this->DatPost->getPostDataByTrend(30);

		// データセット
		$this->set(compact('title_for_layout', 'TrendData'));

		// View出力
		$this->render();
	}

	public function lists($id) {

		$this->layout = 'sub_lists';

		// タイトル
		$title_for_layout = 'ぱるトレ';

		// トレンドデータに紐づくつぶやき取得
		$TrendSearchData = $this->DatPostSearch->getPostSearchDataByPostId($id);

		// データセット
		$this->set(compact('title_for_layout', 'TrendSearchData'));

		// View出力
		$this->render();
	}
}

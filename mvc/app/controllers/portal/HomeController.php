<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;
use app\models\portal\User;

class HomeController extends ContainerController {

	public function index() {

		
        
       
        
		$this->view([
			'title' => 'Lista de users',
			'name' => 'hello word',
		], 'portal.home');
	}

}
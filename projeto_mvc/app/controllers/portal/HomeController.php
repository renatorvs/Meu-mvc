<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;
use app\models\portal\User;

class HomeController extends ContainerController {

	public function show($request ) {

		$this->view([
			'title' => 'Lista de users',
			'users' => 'hello word',
		], 'portal.home');
	}
    
    public function index( ) {

		
		$this->view([
			'title' => 'Lista de users',
			'users' => 'hello word',
		], 'portal.home');

        
        
        
        
	}

}
<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;

class TesteController extends ContainerController {

	public function index() {

	}

	public function show($request) {

        $teste = "isso é um teste de controller";
		$this->view([
			'title' => 'teste',
			'teste' => $teste,           
		], 'portal.teste');
	}

	public function create() {

	}

	public function store() {

	}

	public function edit($id) {

	}

	public function update($id) {

	}

	public function destroy($id) {

	}

}

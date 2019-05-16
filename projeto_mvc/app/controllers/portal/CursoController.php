<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;

class CursoController extends ContainerController {

	public function index() {

	}

	public function show($request) {

        debug($request);
		$this->view([
			'title' => 'Curso',
			'curso' => ' Curso Encontrado',
		], 'portal.curso');
	}

	public function create() {

	}

	public function store() {

	}

	public function edit($id) {
        debug($id);
        debug('edit');

	}

	public function update($id) {

	}

	public function destroy($id) {

	}

}

<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class EventosController extends AppController {

	public function index() {
		$eventosTable = TableRegistry::get('eventos');

		$eventos = $eventosTable->find('all'); //->get(2); muda-se qual registro deseja-se obter

		$this->set('eventos', $eventos);
	}
}
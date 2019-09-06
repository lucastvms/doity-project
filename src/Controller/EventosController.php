<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class EventosController extends AppController {

	public function index() {
		$eventosTable = TableRegistry::get('eventos');

		$eventos = $eventosTable->find('all'); 
		//->get(2); muda-se quantos registros deseja-se obter ou por qual variável que indicar o registro

		$this->set('eventos', $eventos);
	}

	public function novo() {

		$eventosTable = TableRegistry::get('eventos');

		$evento = $eventosTable->newEntity();

		$this->set('evento', $evento);
	}

	public function editar($id) {

		$eventosTable = TableRegistry::get('eventos');

		$evento = $eventosTable->get($id);

		$this->set('evento', $evento);

		$this->render('novo');
	}

	public function apagar($id) {

		$eventosTable = TableRegistry::get('eventos');

		$evento = $eventosTable->get($id);

		if($eventosTable->delete($evento)) {
			$msg = "Evento removido com sucesso.";
		} else {
			$msg = "Erro ao apagar o produto.";
		}

		$this->redirect('Eventos/index');

		$this->set('msg', $msg);
	}

	public function salva() {

		$eventosTable = TableRegistry::get('eventos');

		$evento = $eventosTable->newEntity($this->request->data());

		if($eventosTable->save($evento)) {
			$msg = "Evento salvo com sucesso!";
		} else {
			$msg = "Erro ao salvar o produto.";
		}

		$this->set('msg', $msg);
	}
}
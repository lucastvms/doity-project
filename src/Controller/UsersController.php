<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class UsersController extends AppController {

	public function index() {

	}

	public function adicionar() {

		$usersTable = TableRegistry::get('users');

		$user = $usersTable->newEntity();

		$this->set('user', $user);
	}

	public function salvar() {

		$usersTable = TableRegistry::get('users');

		$user = $usersTable->newEntity($this->request->data());

		if($usersTable->save($user)) {
			$this->Flash->set("Usuário cadastrado com sucesso!", ['element' => 'success']);
		} else {
			$this->Flash->set("Erro ao cadastrar usuário.", ['element' => 'error']);
		}

		$this->redirect('Users/adicionar');
	}

	public function login() {

		$usersTable = TableRegistry::get('users');

		$user = $usersTable->newEntity();

		$this->set('user', $user);
	}

}

 ?>
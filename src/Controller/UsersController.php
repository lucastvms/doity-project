<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class UsersController extends AppController {

	public function beforeFilter(Event $event) {

		parent::beforeFilter($event);

		$this->Auth->allow(['adicionar', 'salvar']);
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

		if($this->request->is('post')) {

			$user = $this->Auth->identify();

			if($user) {
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Flash->set('Usuário ou senha inválidos.', ['element' => 'error']);
			}
		}
		/*$usersTable = TableRegistry::get('users');
		$user = $usersTable->newEntity();
		$this->set('user', $user);*/
	}

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}

}

 ?>
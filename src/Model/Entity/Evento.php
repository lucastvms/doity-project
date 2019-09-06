<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Evento extends Entity {

	public function calculaDesconto() {
		return $this->preco*0.9;
	}
}

?>
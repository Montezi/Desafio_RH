<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Funcionario extends Entity {

    protected $_accessible = [
        'nome' => true,
        'data_nascimento' => true,
        'cpf' => true
    ];
}

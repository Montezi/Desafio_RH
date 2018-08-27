<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Vagas extends Entity {

    protected $_accessible = [
        'titulo' => true,
        'nome_cliente' => true,
        'data_criacao' => true,
        'prazo_fechamento' => true
    ];
}

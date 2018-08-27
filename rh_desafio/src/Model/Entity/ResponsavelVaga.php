<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class ResponsavelVaga extends Entity {

    protected $_accessible = [
        'id_funcionario' => true,
        'id_vaga' => true
    ];
}

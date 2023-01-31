<?php

namespace App\Models;

use App\MF\Model\Model;

class Produto extends Model {

    public function getProdutos() {
        return array('Mesa', 'Cadeira');
    }
}
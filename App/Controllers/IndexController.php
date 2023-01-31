<?php

namespace App\Controllers;

use App\MF\Controller\action;
use App\MF\Model\Container;


class IndexController extends action {

    public function index() {

        $produto = Container::getModel('produto');
        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        $this->render('index', 'layout1');
    }

    public function sobreNos() {

        $this->view->dados = ['agua', 'banana', 'ovo', 'maça'];
        $this->render('sobreNos', 'layout1');
    }
}
<?php

class homeController extends controller {

    public function index() {
       
        $dados = array();

        $produtos = new Produtos();

        $dados['lista'] = $produtos->getAll();

        $this->loadTemplate('home', $dados);
        
    }

    
}


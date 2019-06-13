<?php

class homeController extends controller {

   //Metodo index vai ser mandado com um array para o tamplate
    public function index() {
       
        $dados = array();

        $produtos = new Produtos();
        //array com todos os registros
        $dados['lista'] = $produtos->getAll();

        //Chamando o tamplete para home com um array
        $this->loadTemplate('home', $dados);
        
    }

    
}


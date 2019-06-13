<?php

class notfoundController extends controller {

	//Caso usuário entre em uma págian que não exista, 
	//carregamos pra ele o nosso tamplete com o aviso de página não encontrada
    public function index() {

        $dados = array();
        //Carregando o tamplete com o aviso de página não encontrada
        $this->loadTemplate('404',$dados);

    }


}


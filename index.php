<?php
//Iniciando a sessão 
session_start();
//Habilitando para mostrar erros
error_reporting(E_ALL ^ E_NOTICE);
//Chamando o arquuivo de configuração do BD
require 'config.php';

//Aqui é o autoload que vai direcionar o usuário para a direção correspondente
spl_autoload_register(function ($class) {

    if (file_exists('controllers/'.$class.'.php')) {
        require_once 'controllers/'.$class.'.php';
    } else if (file_exists('models/'.$class.'.php')) {
        require_once 'models/'.$class.'.php';
    } else if (file_exists('core/'.$class.'.php')) {
        require_once 'core/' . $class . '.php';
    }

});

//Iniciando o objeto 
$core = new Core();
$core->run();


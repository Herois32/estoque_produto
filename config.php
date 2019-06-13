<?php
//Chamando meuarquivo deconfiguração para alterna entre servidor 
//local e servidor pago
require 'environment.php';

//Iniciando array vazio
$config = array();

//Verefico se o servidor é local ou pago(dedicados) para colocar os parâmentros 
//conforme for configurado
if(ENVIRONMENT == "development") {
    //Nesse caso development é para servidor local
    //logo eu coloco os meus dados locais para testes, esses dados são meus. Favor na hora de testar
    //colocar os seus dados 
    define("BASE_URL", "http://localhost/estoque/");
    $config['dbname'] = "estoque";
    $config['host'] = 'localhost';
    $config['dbuser'] = 'SeuUsuario';
    $config['dbpass'] = 'SuaSenha';
    
} else {
    //Nesse caso se não for local for um servidor pago
    //coloque aqui seus dados para testar testar
    define("BASE_URL", "http://www.seusite.com.br/estoque/");
    $config['dbname'] = "estoque";
    $config['host'] = 'seu ip';
    $config['dbuser'] = 'SeuUsuario';
    $config['dbpass'] = 'SuaSenha';
    
}

//Iniciando a variável global e montando via PDO minha conecxão com BD
global $db;
try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}




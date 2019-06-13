<?php

class Core {
    
    public function run() {
        
        //Tratando a URL
        $url = '/'.( (isset($_GET['url']))?$_GET['url']:'');
        $params = array();
            
        //Se a URl não tiver paramentro colocarmos uma '/'
        if(!empty($url) && $url != '/') {
            
            $url = explode('/', $url);
            array_shift($url); // remove primeiro registro do array
            
            $currentController = $url[0].'Controller';
            array_shift($url); // remove primeiro registro do array
            
            if(isset($url[0]) && !empty($url[0])) {
                
                $currentAction = $url[0];
                array_shift($url);
                
            } else {
                //Colocando 'index' na primeira Action
                $currentAction = 'index';
                
            }
            
            if(count($url) > 0) {
                
                //Passando a URL para a variável
                $params = $url;
                
            }
                
        } else {
            //Primeira Action home e na segunda index
            $currentController = 'homeController';
            $currentAction = 'index';
           
        }
      
        //Chamando o arquivo controller
        require_once 'core/controller.php';
        //Caso a URL estiver com todos os paramentros 
        if(!file_exists('controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)) {
            $currentController = 'notfoundController';
            $currentAction = 'index';
        }
        //Instanciando o objeto
        $c = new $currentController();


       call_user_func_array(array($c, $currentAction), $params); // executa a action
        
    }
    
}


<?php

class controller {
    
    public function loadView($viewName, $viewData = array()) {
        
        extract($viewData); // transforma array em variáveis

        include 'views/'.$viewName.'.php';
        
    }
    //Chamando o tamplate
    public function loadTemplate($viewName, $viewData = array()) {
        
        include 'views/template.php';
        
    }
    //Chamando o tamplate
    public function loadViewInTemplate($viewName, $viewData = array()) {
        
        extract($viewData);
         
        include 'views/'.$viewName.'.php';
        
    }
    
}


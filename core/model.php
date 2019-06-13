<?php
//Essa Classe ela só vai cirar a variável 
//DB como global
class model {
    
    protected $db;
    
    public function __construct() {
        
        global $db;
        $this->db = $db;
        
    }
    
}


<?php

$r = NULL;

if(isset($_GET['endereco'])){
    
    if(!is_numeric($_GET['endereco']))
        $r = $_ll['app']['pasta']. 'paginas/endereco/'. $_GET['endereco']. '.php';
        
    else
        $r = $_ll['app']['pasta']. 'paginas/endereco/index.php';
    
    if(file_exists($r))
        require_once $r;
    
}
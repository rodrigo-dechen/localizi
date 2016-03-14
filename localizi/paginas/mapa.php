<?php

$r = NULL;

if(isset($_GET['mapa'])){
    
    if(!is_numeric($_GET['mapa']))
        $r = $_ll['app']['pasta']. 'paginas/mapa/'. $_GET['mapa']. '.php';
        
    else
        $r = $_ll['app']['pasta']. 'paginas/mapa/index.php';
    
    if(file_exists($r))
        require_once $r;
    
}
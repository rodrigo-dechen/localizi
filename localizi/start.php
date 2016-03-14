<?php

//echo '<pre>'. print_r($_ll, true). '</pre>';

$botoes = array_merge(array(array('href' => $backReal, 'img' => $_ll['tema']['icones'].'br_prev.png', 'title' => $backNome)), (isset($botoes)? $botoes: array()));

echo app_bar('Endereços', $botoes);

$path = 'paginas';

if(file_exists($_ll['app']['pasta'].$path.'/'.$page.'.php'))
    require_once $_ll['app']['pasta'].$path.'/'.$page.'.php';
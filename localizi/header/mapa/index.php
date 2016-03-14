<?php

/* @var $apigem api */

lliure::iniciaApi('navigi');

$botoes[] = array(
    'href' => $_ll['app']['home'] . '&p=mapa&mapa=config&config='. $_GET['mapa'],
    'img' => $_ll['app']['pasta']. 'sys/mapa[16].png',
    'title' => 'Configurar este mapa'
);

$botoes[] = array(
    'href' => $_ll['app']['home'] . '&p=endereco&endereco=index&mapa='. $_GET['mapa'],
    'img' => $_ll['app']['pasta']. 'sys/endereco[16].png',
    'title' => 'Criar endereço'
);


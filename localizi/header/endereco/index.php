<?php

/* @var $apigem api */

$apigem->inicia('tags');

$endereco = new endereco();

$dados_mapa = $endereco->endereco((isset($_GET['id'])? $_GET['id']: NULL));

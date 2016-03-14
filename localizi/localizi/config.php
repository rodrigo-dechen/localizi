<?php

//configuraçoes de variaveis uteis para app

//require as classes da pasta classes
require_once $_ll['app']['pasta']. 'classes/db.php';
require_once $_ll['app']['pasta']. 'classes/mapa.php';
require_once $_ll['app']['pasta']. 'classes/endereco.php';

//configura o db para a conexao corrente.
db::conectar($conexao);

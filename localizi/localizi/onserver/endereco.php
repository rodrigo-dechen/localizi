<?php

$endereco = new endereco();

if(isset($_POST['id']))
    $endereco->salvar($_POST);

else
    $endereco->criar($_POST);

header('Location: '. $_ll['app']['home']. '&p=mapa&mapa='. $_POST['mapa']);
<?php

$mapa = new mapa();

if(isset($_POST['id']))
    $mapa->salvar($_POST);

else
    $mapa->criar($_POST);

header('Location: '. $_ll['app']['home']);
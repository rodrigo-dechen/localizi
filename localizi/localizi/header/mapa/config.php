<?php

$mapa = new mapa();

$dados_mapa = $mapa->mapa((isset($_GET['config'])? $_GET['config']: NULL));

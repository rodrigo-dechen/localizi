<?php

require_once dirname(__FILE__).'/config.php';

$path = isset($path)? $path: 'header';

$page = isset($_GET['p'])? $_GET['p']: 'index';

if(file_exists($_ll['app']['pasta'].$path.'/'.$page.'.php'))
    require_once $_ll['app']['pasta'].$path.'/'.$page.'.php';
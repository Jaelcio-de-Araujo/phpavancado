<?php

require_once "vendor/autoload.php";
use jdev\digitalcep\Search;

$busca  = new Search;

$resultado  = $busca -> getAddressFromZipcode('06230060');

print_r($resultado);
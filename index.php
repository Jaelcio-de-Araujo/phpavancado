<?php

require_once "src/Search.php";

$busca  = new Search;

$resultado  = $busca -> getAddressFromZipcode('06230060');

print_r($resultado);
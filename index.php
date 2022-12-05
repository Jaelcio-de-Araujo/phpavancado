<?php

require __DIR__.'/vendor/autoload.php';

use Jdev\Cepdigital\Search;


$busca  = new Search;

$resultado  = $busca -> getAddressFromZipcode('06230060');
print_r($resultado);
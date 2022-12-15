<?php
require __DIR__.'/vendor/autoload.php';

use Jdev\Cepdigital\Search;

$busca  = new Search;

$resultado  = $busca -> getAddressFromZipcode('06230060');

if(is_null($resultado))
{
    echo "O CEP não foi encontrado.";
}
print_r($resultado);
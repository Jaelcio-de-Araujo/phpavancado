<?php
use PHPUnit\Framework\TestCase;
use jdev\digitalcep\Search;

class SearchTest extends TestCase
{
    public function testGetAddressFromZipcode()
    {
        $resultado = new Search;
        $resultado -> getAddressFromZipcode('06230060');

        print_r($resultado);
        exit;
    }
}
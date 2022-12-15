<?php
use PHPUnit\Framework\TestCase;
use Jdev\Cepdigital\Search;


//Classe TestCase comando todos os testes.
class SearchTest extends TestCase
{
    public function testGetAddressFromZipcode()
    {
        $resultado  = new Search();
        $resultado = $resultado -> getAddressFromZipcode('06230060');
        
        $esperado = [
            "cep" => "06230-060",
            "logradouro" => "Rua Frei Caneca",
            "complemento" =>"",
            "bairro" => "Piratininga",
            "localidade" => "Osasco",
            "uf" => "SP",
            "ibge" => "3534401",
            "gia" => "4923",
            "ddd" => "11",
            "siafi" => "6789"
        ];
        $this->assertEquals($esperado, $resultado);
    }
}

<?php

namespace Jdev\Cepdigital;
class  Search
{
    private  $url = "https://viacep.com.br/ws/";

    public function getAddressFromZipcode(string $zipCode)
    {
        $zipCode =  preg_replace('/[^0-9]/im','',$zipCode);

        $get =      file_get_contents($this->url . $zipCode . "/json");

        $get =      json_decode($get,true);

        return isset($get['cep']) ? $get : null;

    }
}


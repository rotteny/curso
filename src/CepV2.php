<?php

namespace Rotteny\BrasilApi;

class CepV2 extends Cep {
    
    public static function get(string $cep) : object {
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->get(self::BASE_URL . 'v2/' . $cep);
            return json_decode($response->getBody());
        } catch (\Throwable $th) {
            die($th->getMessage());
        }

    }
}
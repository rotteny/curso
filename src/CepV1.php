<?php

namespace Rotteny\BrasilApi;

class CepV1 {
    const BASE_URL = 'https://brasilapi.com.br/api/cep/v1/';

    public static function get(string $cep) : object {
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->get(self::BASE_URL . $cep);
            return json_decode($response->getBody());
        } catch (\Throwable $th) {
            die($th->getMessage());
        }

    }
}
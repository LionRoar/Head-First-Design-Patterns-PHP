<?php

namespace MG\Client;

class JsonRequest implements RequestInterface {
    private $path;

    public function __construct($path) {
        $this->path = $path;
    }
    public function get(): array{
        $curl = curl_init($this->path);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        curl_close($curl);
        if (!isset($response)) {
            throw Exception('failed to connect to remote object ' . $response['error']);
        }
        $response = json_decode($response, true);
        $response['path'] = $this->path;
        return $response;
    }
}
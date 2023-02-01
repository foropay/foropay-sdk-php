<?php

class Foropay {

    private $config = [
        /* env: prod | test | dev */
        'env' => 'test',
        'privateKey' => ''
    ];

    private $httpClient = null;

    public function __construct(array $config = []) {
        $this->config = array_replace($this->config, $config);
        $this->httpClient = new GuzzleHttp\Client([
            'base_uri' => get_foropay_api_url($this->config['env'])
        ]);
    }

    public function create_payment_session($data) {
        return $this->post('payment-sessions', $data);
    }

    private function post($url, $data) {
        $raw_response = $this->httpClient->request('POST', $url, [
            'headers' => [
                'Authorization' => $this->config['privateKey']
            ],
            'json' => $data
        ]);

        return json_decode($raw_response->getBody());
    }
}

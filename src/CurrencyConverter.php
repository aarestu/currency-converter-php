<?php

namespace AaRestu\CurrencyConverter;

use GuzzleHttp\Client;

class CurrencyConverter
{

    private $url_api = "http://api.fixer.io/latest";

    private $base;

    private $rates = array();

    private $client;

    /**
     * CurrencyConverter constructor.
     * @param string $base
     */
    public function __construct($base = "USD")
    {
        $this->base = $base;
        $this->client = new Client();
    }

    /**
     * @param $symbol
     * @return mixed
     * @throws \Exception
     */
    public function getRate($symbol)
    {
        $this->generateRates();

        if (!array_key_exists($symbol, $this->rates)) {
            throw new \Exception(sprintf('Unsupported Country Code, %s', $symbol));
        }

        return (double)filter_var($this->rates[$symbol], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }

    /**
     *
     */
    private function generateRates()
    {
        if (empty($this->rates)) {
            $res = $this->client->request("GET", $this->url_api, [
                'query' => ['base' => $this->base]
            ]);

            $res_arr = \GuzzleHttp\json_decode($res->getBody(), true);
            $this->rates = $res_arr["rates"];
        }
    }

    /**
     * @return array
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * @param array $rates
     */
    public function setRates($rates)
    {
        $this->rates = $rates;
    }
}

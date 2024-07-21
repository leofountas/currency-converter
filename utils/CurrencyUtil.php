<?php

namespace com\leoFountas\currecyConverter\util;

class CurrencyUtil
{

    /**
     * this function need 3 parameters to do the math
     */
    static function convert(string $Currency_from, string $Currency_to, float $amount): float
    {

        $response = file_get_contents("https://v6.exchangerate-api.com/v6/b8a5120490158fa6c6f7b299/latest/$Currency_from");

        $response = json_decode($response, true);

        return  $response["conversion_rates"][$Currency_to] * $amount;
    }

}

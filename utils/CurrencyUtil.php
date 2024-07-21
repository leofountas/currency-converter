<?php
class CurrencyUtil
{
    static function convert(string $Currency,float $amount): float
    {

        $ch = curl_init();

        // Set individual cURL options
        curl_setopt($ch, CURLOPT_URL, "https://v6.exchangerate-api.com/v6/b8a5120490158fa6c6f7b299/latest/EUR");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL verification (use with caution)
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Set to true to return the response as a string

        $response = curl_exec($ch);
        $err = curl_error($ch);

        curl_close($ch);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response, true);

            return  $response["conversion_rates"][$Currency] * $amount;
        }
    }
}

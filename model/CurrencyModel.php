<?php

namespace com\leoFountas\currecyConverter\model;

class CurrencyModel
{

    private int $id;
    private string $country;
    private string $currencyCode;

    function __construct()
    {
        $this->id = -1;
        $this->country = "";
        $this->currencyCode = "";
    }

    function getId(): int
    {
        return $this->id;
    }

    function getCountry(): string
    {
        return $this->country;
    }

    function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    function setId($id): void
    {
        $this->id = $id;
    }

    function setCountry($country): void
    {
        $this->country = $country;
    }

    function setCurrencyCode($currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }
}

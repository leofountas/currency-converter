<?php
require_once(__DIR__ . "/DAO.php");
require_once(__DIR__ . "/../model/CurrencyModel.php");

class CurrencyDAO extends DAO
{
    function __construct()
    {
    }


    function findAllCurrency(): array
    {
        $currencyList = array();
        $this->connect();
        $result = ($this->exec("SELECT * from currency;"));
        foreach ($result as $row) {
            $currencyList[] = $this->convertIntoModel($row);
        }

        $this->close();

        return $currencyList;
    }

    function convertIntoModel(array $row ): CurrencyModel
    {

        $model = new CurrencyModel();
        $model->setId($row["ID"]);
        $model->setCountry($row["COUNTRY"]);
        $model->setCurrencyCode($row["CURRENCY_CODE"]);
        return $model;
    }
}

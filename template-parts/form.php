<?php

namespace com\leoFountas\currecyConverter\templateParts;

require_once("dao/CurrencyDAO.php");

use com\leoFountas\currecyConverter\dao\CurrencyDAO;

$currencyDao = new CurrencyDAO();
$allCurrency = ($currencyDao->findAllCurrency());


?>
<form method="post">
    <input name="amount" type="number" step="0.01" min="0.01" placeholder="Amount">
    <label for="country-from">from</label>
    <select name="currency_from" id="country-from">
        <?php
        foreach ($allCurrency as $currency) {
            echo '<option value="' . $currency->getCurrencyCode() . '">' . $currency->getCountry() . '</option>';
        }
        ?>
    </select>
        
    <label for="country-to">to</label>
    <select name="currency_to" id="country-to">
        <?php
        foreach ($allCurrency as $currency) {
            echo '<option value="' . $currency->getCurrencyCode() . '">' . $currency->getCountry() . '</option>';
        }
        ?>
    </select>

    <input type="submit" value="Convert">
</form>
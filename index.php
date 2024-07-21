<?php
require_once("dao/CurrencyDAO.php");
require_once("utils/CurrencyUtil.php");

$currencyDao = new CurrencyDAO();
$allCurrency = ($currencyDao->findAllCurrency());


?>

<!DOCTYPE html>
<html>

<head></head>

<body>

    <?php

    if (isset($_POST["currency"]) && isset($_POST["amount"])) {
        echo "todo convert";
        echo "<pre>";
        print_r(CurrencyUtil::convert($_POST["currency"], $_POST["amount"]));
        echo "</pre>";
        //todo curl
        echo '<a href="" > back to form </a>';
    } else {
    ?>
        <form method="post">
            <input name="amount" type="number" step="0.01" min="0.01" placeholder="Amount in €">
            <select name="currency" id="">
                <?php
                foreach ($allCurrency as $currency) {
                    echo '<option value="' . $currency->getCurrencyCode() . '">' . $currency->getCountry() . '</option>';
                }
                ?>
            </select>

            <input type="submit" value="Convert">
        </form>
    <?php
    }
    ?>

</body>

</html>
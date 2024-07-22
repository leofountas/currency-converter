<?php

namespace com\leoFountas\currecyConverter;


require_once("utils/CurrencyUtil.php");

use com\leoFountas\currecyConverter\util\CurrencyUtil;

?>

<!DOCTYPE html>
<html>
    
<?php include("template-parts/head.php");?>

<body>
    <?php include("template-parts/header.php");?>

    <div class="main">
        <?php
        if (isset($_POST["currency_from"]) && isset($_POST["currency_to"]) && isset($_POST["amount"])) {
            echo '<div class="result">';
            echo "converted";
            echo '<br>';
            print_r(CurrencyUtil::convert($_POST["currency_from"], $_POST["currency_to"], $_POST["amount"]));
            echo '<br>';
            echo '<a href="" > back to form </a>';
            echo '</div>';
        } else {
            include("template-parts/form.php");
        }
        ?>
    </div>

    <?php include("template-parts/footer.php");?>
</body>
</html>
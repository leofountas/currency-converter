<?php

namespace com\leoFountas\currecyConverter;


require_once("utils/CurrencyUtil.php");

use com\leoFountas\currecyConverter\util\CurrencyUtil;

?>

<!DOCTYPE html>
<html>
<?php

include("template-parts/header.php");

?>

<body>

    <?php

    if (isset($_POST["currency_from"]) && isset($_POST["currency_to"]) && isset($_POST["amount"])) {
        echo "todo convert";
        print_r(CurrencyUtil::convert($_POST["currency_from"], $_POST["currency_to"], $_POST["amount"]));
        echo '<a href="" > back to form </a>';
    } else {
        include("template-parts/form.php");
    }

    include("template-parts/footer.php");
    ?>

</body>


</html>
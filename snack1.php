<?php
$name = "";
$email = "";
$age = "";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (strlen($_GET["name"]) > 3) {
        $name = $_GET["name"];
    }

    if (stripos($_GET["email"], "@") && stripos($_GET["email"], ".")) {
        $email = $_GET["email"];
    }

    if (is_numeric($_GET["age"])) {
        $age = $_GET["age"];
    }

    if ($name & $email & $age) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
    ?>
</body>

</html>
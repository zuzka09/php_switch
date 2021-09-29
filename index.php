<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">

<input type="number" name="year" id="year">
<input type="submit" value="Odeslat">

</form>

<?php

$year = filter_input(INPUT_POST, "year");

switch ($year) {

    case 1918:
        $message = "Založení Československa";
        break;
        
    case 1938:
        $message = "Podepsání Mnichovské dohody";
        break;

    case 1989:
        $message = "Sametová revoluce";
        break;

    case 1993:
        $message = "Osamostatnění ČR";
        break;

    default:
    $message = "pro tento rok v databázi nic nemáme";
    break;
}

echo "Významná událost v roce " . $year . ": " . $message;
?>

</body>
</html>
<?php

require 'includes/bootstrap.inc.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="/includes/delete.inc.php" method="post">
        <input type="hidden" name="_token" value="<?= $_SESSION['_token']; ?>">
        <input type="submit" value="Delete my account">
    </form>
</body>
</html>

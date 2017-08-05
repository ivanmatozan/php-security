<?php

if (!isset($_GET['show'])) {
    die();
}

$show = $_GET['show'];

$allowed = ['cats', 'dogs'];

$content = in_array($show, $allowed) ? file_get_contents('contents/' . $show . '.php') : '';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File includes</title>
</head>
<body>
    <?= $content; ?>
</body>
</html>

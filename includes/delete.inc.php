<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die();
}

require 'bootstrap.inc.php';
require 'db.inc.php';

$delete = $db->prepare("UPDATE user SET active = 0 WHERE id = :user_id");
$delete->execute([
    'user_id' => $_SESSION['user_id']
]);

header('Location: /csrf.php');
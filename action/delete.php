<?php
/**
 * @var $mysqli
 */
if (empty($_SESSION['userId'])){
    header('Location: /?act=login');
    die();
}
$userId = $_SESSION['userId'];
$result = $mysqli->query("SELECT * FROM user WHERE id = '" . $userId . "' LIMIT 1");
$user = $result->fetch_assoc();
if (!$user){
    header('Location: /?act=login');
    die();
}

$id = $_GET['id'] ?? null;
if (!$id){
    header('Location: /?act=articles');
    die();
}

$mysqli->query("DELETE FROM article WHERE id = " . $id . " AND userId = " . $userId );
header('Location: /?act=articles');
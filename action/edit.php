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

if (count($_POST)){
    $title = $_POST['title'] ?? null;
    $content = $_POST['content'] ?? null;
    $mysqli->query("UPDATE article SET userId = '" . $id . "', title = '" . $title . "', content = '" . $content . "' WHERE id = " . $id . " AND userId = " . $userId);
    header('Location: /?act=articles');
    die();
}


$result =  $mysqli->query("SELECT * FROM article WHERE id = '" . $id . "' AND userId = " . $userId . " LIMIT 1");
$articles = $result->fetch_assoc();
if (!$articles){
    header('Location: /?act=articles');
    die();
}

require_once 'templates/edit.php';
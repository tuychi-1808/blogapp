<?php
/**
 * @var $mysqli
 */
$user = checkUser($mysqli);

$id = $_GET['id'] ?? null;
if (!$id){
    header('Location: /?act=articles');
    die();
}

$artcle = getUserArticle($mysqli, $id, $user['id']);

@unlink($_SERVER['DOCUMENT_ROOT'] . '/images/' . $artcle['img']);
$mysqli->query("DELETE FROM article WHERE id = " . $id . " AND userId = " . $user['id'] );
header('Location: /?act=articles');
<?php
/**
 * @var $mysqli
 */

$user = checkUser($mysqli);

$result = $mysqli->query("SELECT * FROM article WHERE userId = '" . $user['id'] . "'");

require_once 'templates/articles.php';
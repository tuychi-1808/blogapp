<?php

$id = (int)$_GET['id'];

$result = $mysqli->query("SELECT * FROM article WHERE id = " . $id);
$articles = $result->fetch_assoc();

require_once 'templates/view.php';

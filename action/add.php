<?php
/**
 * @var $mysqli
 */
$user = checkUser($mysqli);
$error = "";
if (count($_POST)){
    $title = $_POST['title'] ?? null;
    $content = $_POST['content'] ?? null;

    if (!$_FILES['file']['size']){
        $error = 'Image noy found';
    }elseif (!$title || !$content){
        $error = "Title or content is missing";
    }else{

        $fileName = upload($user['id']);

        $mysqli->query("INSERT INTO article SET img = '" . $fileName . "', userId = '" . $user['id'] . "', title = '" . $title ."', content = '" . $content . "', createdAt = NOW()");
        header('Location: /?act=articles');
        die();
    }
}

require_once 'templates/add.php';
<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/php/phpConfigs/db.php";
    session_save_path($_SERVER['DOCUMENT_ROOT'] . '/php/tmp/session');
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Antools</title>
    <link rel="icon" type="image/x-icon" href="/img/logo.ico">
</head>
<body>
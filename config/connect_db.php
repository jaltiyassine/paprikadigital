<?php
    include "conf.php";
    if(!isset($_COOKIE['gainmuscles_cart'])){
        setcookie('gainmuscles_cart', json_encode([]), time() - 3600, "/");
    }
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $db->setAttribute(PDO::ERRMODE_SILENT, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        die('maria is angry');
    }
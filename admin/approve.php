<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['is_admin'])){
    header("location:index.php");
    exit(0);
}

require_once "../config/connect_db.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = (int)$_GET['id'];

    $stmt = $db->prepare("UPDATE project_requests SET status = 'approved' WHERE status = 'pending' AND id = :id");

    $stmt->bindParam(':id', $id);

    $stmt->execute();

    header("location:manager.php?s=view&id=$id");
    exit(0);
}
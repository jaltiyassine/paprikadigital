<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['is_admin'])) {
    header("location:index.php");
    exit(0);
}

require_once "../config/connect_db.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = (int)$_GET['id'];

    $stmt = $db->prepare("SELECT * FROM project_requests WHERE status = 'pending' AND id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        if (!empty($row['attached_file']) && file_exists("../uploads/".$row['attached_file'])) {
            unlink("../uploads/".$row['attached_file']);
        }

        $stmt_delete = $db->prepare("DELETE FROM project_requests WHERE status = 'pending' AND id = :id");
        $stmt_delete->bindParam(':id', $id);
        $stmt_delete->execute();

        header("location:manager.php?s=projects");
        exit(0);
    }
}

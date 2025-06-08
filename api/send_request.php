<?php
require_once '../config/connect_db.php';

function validateInput($data)
{
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

function validateBudget($min, $max)
{
    return is_numeric($min) && is_numeric($max) && $min < $max;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $requiredFields = ['companyName', 'FullName', 'email', 'projectType', 'description', 'budgetMin', 'budgetMax', 'timeline'];

    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            http_response_code(400);
            echo json_encode(['success' => false]);
            exit;
        }
    }

    $companyName = validateInput($_POST['companyName']);
    $fullName = validateInput($_POST['FullName']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? $_POST['email'] : null;
    $phone = !empty($_POST['phone']) ? validateInput($_POST['phone']) : null;
    $projectType = in_array($_POST['projectType'], ['website', 'mobile-app', 'desktop-app', 'other']) ? $_POST['projectType'] : 'website';
    $description = validateInput($_POST['description']);
    $budgetMin = validateInput($_POST['budgetMin']);
    $budgetMax = validateInput($_POST['budgetMax']);
    $timeline = validateInput($_POST['timeline']);
    $preferred = !empty($_POST['preferred']) ? validateInput($_POST['preferred']) : null;

    if (!$email) {
        http_response_code(400);
        echo json_encode(['success' => false]);
        exit;
    }

    if (!validateBudget($budgetMin, $budgetMax)) {
        http_response_code(400);
        echo json_encode(['success' => false]);
        exit;
    }

    // File validation
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'txt', 'doc', 'docx'];
    $fileID = null;
    $attachedFile = null;
    
    if (!empty($_FILES['fileUpload']['name'])) {
        $uploadDir = '../uploads/';
        $fileName = basename($_FILES['fileUpload']['name']);
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        
        if (!in_array($fileExtension, $allowedExtensions)) {
            http_response_code(400);
            echo json_encode(['success' => false]);
            exit;
        }

        $fileID = "attachement_". uniqid() . ".$fileExtension";
        $filePath = $uploadDir . $fileID;

        if ($_FILES['fileUpload']['size'] > 10485760) {
            http_response_code(400);
            echo json_encode(['success' => false]);
            exit;
        }

        if (!move_uploaded_file($_FILES['fileUpload']['tmp_name'], $filePath)) {
            http_response_code(500);
            echo json_encode(['success' => false]);
            exit;
        }
    }

    $sql = "INSERT INTO project_requests (
            company_name, full_name, email, phone, project_type, description, 
            budget_min, budget_max, timeline, preferred, attached_file, created_at
        ) VALUES (
            :companyName, :fullName, :email, :phone, :projectType, :description, 
            :budgetMin, :budgetMax, :timeline, :preferred, :fileID, :created_at
        )";

    $stmt = $db->prepare($sql);

    try {
        $stmt->execute([
            ':companyName' => $companyName,
            ':fullName' => $fullName,
            ':email' => $email,
            ':phone' => $phone,
            ':projectType' => $projectType,
            ':description' => $description,
            ':budgetMin' => $budgetMin,
            ':budgetMax' => $budgetMax,
            ':timeline' => $timeline,
            ':preferred' => $preferred,
            ':fileID' => $fileID,
            ':created_at' => date('Y-m-d H:i:s'),
        ]);
        http_response_code(200);
        echo json_encode(['success' => true]);

    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(['success' => false]);
    }
}

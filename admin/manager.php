<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" table-content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css?v=5.3.2">
    <link rel="icon" href="../img/logo.ico" />
    <link rel="stylesheet" href="css/bootstrap-icons.min.css?v=5.3.2">
    <title>Dashboard</title>
    <style>
        @font-face {
            font-family: 'Parkinsans';
            src: url('../font/Parkinsans-VariableFont_wght.ttf') format('truetype');
            font-weight: 100 900;
            font-style: normal;
        }

        html {
            color: #0F1111;
        }

        select {
            color: #000 !important;
        }

        header {
            position: fixed !important;
            top: 0;
            width: 250px;
        }

        body {
            font-family: 'Parkinsans', sans-serif !important;
            background-color: #121212;
        }

        .badge-warning {
            text-align: center;
            color: #fff;
            background-color: #000;
            border: 1px solid #e67e22;
            box-shadow: 0 0.125em 0.25em rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <?php
    require_once "../config/connect_db.php";
    ?>
    <header class="bg-dark text-white p-2 h-100 ">
        <div class="container d-flex flex-column align-items-center gap-5">
            <h1>
                <div class="display-6 mt-3">Dashboard</div>
            </h1>
            <nav>
                <ul class="nav gap-4">
                    <li class="nav-item"><a class="nav-link text-white" href="manager.php?s=projects"><span class="bi bi-envelope">&nbsp;</span>Project Requests</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="manager.php?s=approved"><span class="bi bi-envelope-open">&nbsp;</span>Approved Requests</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="manager.php?s=finished"><span class="bi bi-envelope-check">&nbsp;</span>Finished Projects</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="manager.php?s=disconnect"><span class="bi bi-box-arrow-left">&nbsp;</span>Disconnect</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="my-4" style="margin-left: 250px;">
        <div class="container-fluid">
            <?php
            if (!empty($_GET["s"])) {
                $s = $_GET["s"];
                switch ($s) {
                    case "projects":
                        include "projects.php";
                        break;
                    case "approved":
                        include "approved.php";
                        break;
                    case "finished":
                        include "finished.php";
                        break;
                    case "view":
                        include "view.php";
                        break;
                    case "disconnect":
                        session_start();
                        if (isset($_SESSION['is_admin'])) {
                            session_unset();
                            session_destroy();
                        }
                        header("location:index.php");
                    default:
                        header("location:index.php");
                        exit(0);
                }
            } else {
                header("location:index.php");
                exit(0);
            }
            ?>
        </div>
    </section>
</body>
</html>
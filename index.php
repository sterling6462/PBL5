<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quan ly chuong</title>
</head>
<body>
    
</body>
</html>

<?php
    include "model/DBConfig.php";
    $db = new Database;
    $db->connect();

    if (isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }
    else{
        $controller='';
    }

    switch ($controller) {
        case 'admin':
            require_once('controller/admin/index.php');
            break;
        
        default:
            # code...
            break;
    }
?>
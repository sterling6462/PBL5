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
    include "Model/M_chuong.php";
   
    $dbchuong = new Databasechuong;
    $dbchuong->connect();

    if (isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }
    else{
        $controller='';
    }

    switch ($controller) {
        case 'admin':
            require_once('Controller/admin/index.php');
            
            break;
        case 'user':
            include"Model/M_user.php";
            $db=new m_user;
            $db->connect();
            require_once('Controller/user/index.php');
            break;
        
        default:
           require_once('Trangchu.php');
            break;
    }
?>
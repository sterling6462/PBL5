<?php 
    // include "model/DBConfig.php";
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action = '';
    }

    $thanhcong = array();
    switch ($action) {
        //xem lai
        case 'them_chuong':{
            if(isset($_POST['them_chuong'])){
                $Chuongso = $_POST['Chuongso'];
                $Chuongten = $_POST['Chuongten'];
                $Noidung = $_POST['Noidung'];
                
                if ($db->InsertData($Chuongso,$Chuongten,$Noidung)){
                    $thanhcong[] = 'add_success';
                }
                // $db->InsertData($Chuongten,$Noidung);

            }
            require_once('View/chuong/them_chuong.php');
            break;
        }
        case 'danh_sach_chuong':{
            $tblTable = "chuong";
            $data =  $db->getAllData($tblTable);
            require_once('View/chuong/danh_sach_chuong.php');
            break;
        }

        
        default:
            require_once('View/chuong/danh_sach_chuong.php');

            break;
    }
?>
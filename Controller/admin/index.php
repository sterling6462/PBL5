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
                $Id_Truyen=$_POST['Id_Truyen'];
                $Chuongso = $_POST['Chuongso'];
                $Chuongten = $_POST['Chuongten'];
                $Noidung = $_POST['Noidung'];
                
                if ($dbchuong->InsertData($Id_Truyen,$Chuongso,$Chuongten,$Noidung)){
                  //  $thanhcong[] = 'add_success';
                    echo '<script language="javascript">alert("Thêm thành công chương !!!"); window.location="index.php?controller=admin&action=danh_sach_chuong";</script>';
                }
                // $db->InsertData($Chuongten,$Noidung);

            }
            require_once('View/them_chuong.php');
            break;
        }
        case 'danh_sach_chuong':{
            $id=1;
            $tblTable = "chuong";
            $datachuong =  $dbchuong->getAllData($tblTable,$id);
            require_once('View/danh_sach_chuong.php');
            break;
        }
        case'edit_chuong':
            {
                if(isset($_GET['idchuong']))
                {
                    $id=$_GET['idchuong'];
                }
        //        $id=1000;
             //   $table="user";
                $dataeditchuong=$dbchuong->getchuongtheoid($id);
                require_once('View/Edit_chuong.php');

                if(isset($_POST['editchuong']))
                {
                  //  $Id_Chuong=$_POST['Id_Chuong'];
                    $Id_Truyen=$_POST['Id_Truyen'];
                    $Chuongso=$_POST['Chuongso'];
                    $Chuongten=$_POST['Chuongten'];
                    $Noidung=$_POST['Noidung'];
                    
                    
                    if($db->editchuong($id,$Id_Truyen,$Chuongso,$Chuongten,$Noidung))
                    {   
                        echo '<script language="javascript">alert("Chinh sua thanh cong user"); window.location="index.php?controller=admin&action=danh_sach_chuong";</script>';
                        // header('location: index.php?action=list');
                    }
                }
                break;
            }
        case 'delete_chuong':
            {
                if(isset($_GET['idchuong']))
                {
                    $id=$_GET['idchuong'];
                }
                $table="chuong";
                if($dbchuong->delete($id,$table))
                    {   
                        echo '<script language="javascript">alert("Xoa thanh cong chuong"); window.location="index.php?controller=admin&action=danh_sach_chuong";</script>';
                        // header('location: index.php?action=list');
                    }

                require_once('');
                break;
            }
        
        default:
           // require_once('View/danh_sach_chuong.php');

            break;
    }
?>
<?php
if(isset($_GET['action'])){
        $action  = $_GET['action'];
}
else{
        $action = " ";
}
switch($action){
        case 'add':{
                
                if(isset($_POST['dangtruyen'])){
                        $tentruyen = $_POST['tentruyen'];
                        $loaitruyen = (int)$_POST['loaitruyen'];
                        $tacgia = $_POST['tacgia'];
                        $gioithieu = $_POST['gioithieu'];
                        $anhdaidien = $_FILES['hinhdaidien']['name'];
                        $target = "Images/".basename($anhdaidien);
                        move_uploaded_file($_FILES['hinhdaidien']['tmp_name'], $target);
                        $ngaydang = date('Y-m-d');       
                        if( $db->insertTruyen($loaitruyen,'1',$tentruyen,$tacgia,$gioithieu,$ngaydang,$anhdaidien)){
                                echo '<script>alert("Đăng kí truyện thành công")</script>';
                        }
                }  
                require_once('View/truyen/themtruyen.php');
                break;
        }
        case 'edit':{
                require_once('View/truyen/suatruyen.php');
                break;
        }
        case 'delete':{
                require_once('View/truyen/xoatruyen.php');
                break;
        }
        case 'list':{
                $danhsachtruyen = array();
                $danhsachtruyen = $db->getTruyenchuaduyet('0');
                if(isset($_POST['duyettruyen'])){
                        if(isset($_POST['checklist'])){
                        $truyenduocduyet = $_POST['checklist'];
                        for($i=0;$i<count($truyenduocduyet);$i++){
                                $db->duyetTruyen($truyenduocduyet[$i]);
                        }
                }
                }
                require_once('View/listtruyen.php');
                break;
        }
        case 'detail':{
        
                if(isset($_GET['idtruyen'])){
                        $idtruyen=$_GET['idtruyen'];
                //        $idtruyen = 1;
                        $truyen = $db->getTruyen($idtruyen);
                        $theloai = $db->getTheLoai($truyen->Id_Loai);
                        $danhsachchuong = array();
                        $danhsachchuong = $db->getChuong($idtruyen);
                }
                require_once('View/detailtruyen.php');
                break;
        }
        default:{
                $danhsachtruyen = array();
                $danhsachtruyen = $db->getTruyenchuaduyet('0');
                if(isset($_POST['duyettruyen'])){
                        if(isset($_POST['checklist'])){
                        $truyenduocduyet = $_POST['checklist'];
                        for($i=0;$i<count($truyenduocduyet);$i++){
                                $db->duyetTruyen($truyenduocduyet[$i]);
                        }
                }
                }
                require_once('View/truyen/listtruyen.php');
                break;
        }
}
?>
<?php
 if(isset($_GET['action'])){
          $action  = $_GET['action'];
}
else{
          $action = " ";
}
switch($action){
        case 'add':{
    if(isset($_GET['idtruyen'])){
      $idtruyen = $_GET['idtruyen'];
      if(isset($_POST['themchuong'])){
        $chuongso = $_POST['chuongso'];
        $chuongten = $_POST['chuongten'];
        $noidung = $_POST['noidung'];
        $db->addChuong($idtruyen,$chuongso,$chuongten,$noidung);
        echo '<script>alert("Thêm chương thành công");window.location="index.php?controller=chuong&action=list&idtruyen='.$idtruyen.' "</script>';
      }
      require_once('View/Chuong/them_chuong.php');
    }
    break;
}
case 'edit':{
if(isset($_GET['idchuong'])){
$idchuong = $_GET['idchuong'];
$idtruyen = $_GET['idtruyen'];
$chuong = $db->getChuong($idchuong);
require_once('View/Chuong/Edit_chuong.php');
if(isset($_POST['capnhat'])){
  $chuongten = $_POST['chuongten'];
  $noidung = $_POST['noidung'];
  $chuongso = $_POST['chuongso'];
  $db->updateChuong($idchuong,$chuongten,$noidung,$chuongso);
  echo '<script>alert("Update chương thành công");window.location="index.php?controller=chuong&action=list&idtruyen='.$idtruyen.' "</script>';
}
}
    break;
}
          case 'delete':{
                   
                    break;
          }
          case 'list':{
            if(isset($_GET['idtruyen'])){
             $idtruyen=$_GET['idtruyen'];
             $danhsachchuong = array();
             $danhsachchuong = $db->getChuongByIdTruyen($idtruyen);
             require_once('View/Chuong/danh_sach_chuong.php');
            }
             break;
     }
          case 'detail':{
                break;
          }

          case 'doc_truyen':
            {
              

                if(isset($_GET['idchuong'])&&isset($_GET['idtruyen'])){
                  $ten=$_SESSION['ten'];
                  $idtruyen=$_GET['idtruyen'];
                    $truyen=$dbtruyen->getTruyen($idtruyen);
                    $idchuong = $_GET['idchuong'];
                    $chuongs=array();
                    $chuongs = $db->getchuongtheoidtruyen($idtruyen);
                    $kt=sizeof($chuongs);
                    $chuong=$chuongs[$idchuong];

                    $idtruyen = $_GET['idtruyen'] ;
                    $db->tangluotxem($idtruyen);
                    
                }
                
            
                require_once('View/Chuong/doc_truyen.php');
                break;
            }
        
          default:{
                   if(isset($_GET['idchuong'])){
                           $idchuong = $_GET['idchuong'];
                           $chuong = $db->getChuong($idchuong);
                           require_once('View/Chuong/doc_truyen.php');
                   }
                    break;
          }
}
?>
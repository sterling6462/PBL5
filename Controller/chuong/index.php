<?php
 if(isset($_GET['action'])){
          $action  = $_GET['action'];
}
else{
          $action = " ";
}
switch($action){
          case 'add':{
                    
                    break;
          }
          case 'edit':{
                  
                    break;
          }
          case 'delete':{
                   
                    break;
          }
          case 'list':{
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
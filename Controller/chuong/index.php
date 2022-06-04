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
                        if(isset($_GET['idchuong'])){
                                $idchuong = $_GET['idchuong'];
                                $chuong = $db->getChuong($idchuong);
                                $truyen= $dbtruyen->getTruyen($chuong->Id_Truyen);
                                $chuongsau = $db->getChuongsau($idchuong);
                                $chuongtruoc = $db->getChuongtruoc($idchuong);
                        }
                
                require_once('View/doc_truyen.php');
                break;
                }

                default:{
                        if(isset($_GET['idchuong'])){
                                $idchuong = $_GET['idchuong'];
                                $chuong = $db->getChuong($idchuong);
                                require_once('View/detailchuong.php');
                        }
                        break;
                }
        }
?>
<?php


    if(isset($_GET['action']))
    {
        $action=$_GET['action'];

    }
    else
    {
        $action='';
    }

    $thanhcong=array();

    switch($action)

    {
        // case 'them_binhluan':
        //     {
        //         if (isset($_POST['addcmt']))
        //         {
        //             $Id_User=4;
        //             $Id_Truyen=3;
        //             $Id_Noidung=$_POST['Noidung'];
        //             if($datacmt->addcmt($Id_User,$Id_Truyen,$Id_Noidung)==true)
        //             {
        //                 echo '<script language="javascript">alert("Thêm thành công comment !!!"); window.location="index.php?controller=admin&action=list_binhluan";</script>';
        //             }
        //         }
                
        //         require_once('View/Them_binhluan.php');
        //         break;
        //     }
        case 'listbinhluan':
            {
                if(isset($_POST['search']))
                {
                    $Tentruyen=$_POST['searchcmt'];
                    $Id_Truyen=$dbtruyen->traidtheotentruyen($Tentruyen);
                    
                    if($Id_Truyen!=0)
                    {
                        $cmts=$dbcmt->getlistcmttheoid($Id_Truyen);
                    }
                    else 
                    {
                        $cmts=$dbcmt->getlistcmt();
                        
                    }

                }
                else $cmts=$dbcmt->getlistcmt();
                require_once('View/Truyen/List_binhluan.php');
                break;
            }
        case 'list':
            
            require_once('View/detailtruyen.php');
            break;
        case 'delete':
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                if($dbcmt->delete($id)==true)
                {   
                    echo '<script language="javascript">alert("Xoa thanh cong !!!"); window.location="index.php?controller=binhluan&action=listbinhluan";</script>';
                    
                }
            }
          
            

          
            break;

        default:

    }
?>
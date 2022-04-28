<?php
require_once('../Model/M_user.php');

$db=new m_user();
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
        case 'edit':
            {
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                }
        //        $id=1000;
                $table="user";
                $dataedit=$db->getusertheoid($table,$id);
                require_once('../View/Edit_user.php');

                if(isset($_POST['edituser']))
                {
                    $Ten=$_POST['Username'];
                    $Ngaysinh=$_POST['Ngaysinh'];
                    $Diachi=$_POST['Diachi'];
                    $Email=$_POST['Email'];
                    $Pass=$_POST['psw'];
                    $Gioitinh=$_POST['Gioitinh'];
                    $Quyen=$_POST['Quyen'];
                    echo $Ten,$Quyen;
                    if($db->edituser($id,$Ten,$Ngaysinh,$Diachi,$Email,$Pass,$Gioitinh,$Quyen))
                    {   
                        echo '<script language="javascript">alert("Chinh sua thanh cong user"); window.location="Index_user.php?action=list";</script>';
                        // header('location: index.php?action=list');
                    }
                   

                }
                
                break;
            }
     
        case 'delete':
            {   
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                }
                $table="user";
                if($db->delete($id,$table))
                    {   
                        echo '<script language="javascript">alert("Xoa thanh cong user"); window.location="Index_user.php?action=list";</script>';
                        // header('location: index.php?action=list');
                    }

                require_once('');
                break;
            }
        default:
            {
              
                $table="user";
                $data=$db->getalluser($table);
               
                
                require_once('../View/List_user.php');
                break;
            }
        
    }
?>
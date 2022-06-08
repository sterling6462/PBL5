<?php
include_once("E_binhluan.php");
class m_binhluan
{
    private $hostname='localhost';
    private $username='root';
    private $pass='';
    private $dbname='pbl5_1'; 
    private $conn=null;
    private $result=null;

    public function connect()
    {
        $this->conn=new mysqli($this->hostname,$this->username,$this->pass,$this->dbname);
        if(!$this->conn)
        {
            echo "Ket noi that bai";
            exit();
        }
        else {
            mysqli_set_charset($this->conn,'utf8');
        }
        return $this->conn;
    }
    
    public function execute($sql)
    {   
        $this->connect();
        $this->result=$this->conn->query($sql);
        return $this->result;
    }
    public function addcmt($Id_User,$Id_Truyen,$Noidung)
    {
        $cmt=new e_binhluan(0,$Id_User,$Id_Truyen,$Noidung);
        $this->add($cmt);
        return true;
        

    }
    public function add(e_binhluan $cmt)
    {
        $sql="INSERT INTO `comment` (Id_User,Id_Truyen,Noidung) VALUES ('$cmt->Id_User','$cmt->Id_Truyen','$cmt->Noidung')";
        $this->execute($sql);
    }
    public function getlistcmt()
    {
        $sql="SELECT * FROM comment ";
        $this->execute($sql);
            $cmts = array();
            $i=1;
            while($data=mysqli_fetch_array($this->result))
            {   $Id_Comment=$data['Id_Comment'];
                $Id_User=$data['Id_User'];
                $Id_Truyen=$data['Id_Truyen'];
                $Noidung=$data['Noidung'];
                $cmts[$i]=new e_binhluan($Id_Comment,$Id_User,$Id_Truyen,$Noidung);
                $i++;
            }
            
      
        return $cmts;
    }
    public function getlistcmttheoid($id)
    {
        $sql="SELECT * FROM comment WHERE Id_Truyen='$id'";
        $this->execute($sql);
        // if($this->result)
        // {
            $cmts = array();
            $i=1;
            while($data=mysqli_fetch_array($this->result))
            {   $Id_Comment=$data['Id_Comment'];
                $Id_User=$data['Id_User'];
                $Id_Truyen=$data['Id_Truyen'];
                $Noidung=$data['Noidung'];
                $cmts[$i]=new e_binhluan($Id_Comment,$Id_User,$Id_Truyen,$Noidung);
                $i++;
            }
            
        //}
        return $cmts;
    }

    public function getlistcmttheoid2($id)
    {
        $sql = "SELECT * from comment WHERE Id_Truyen='$id'  ";
        $i= 0 ;
        $rs = mysqli_query($this->conn, $sql);
        $chuong = array();
        while($row = mysqli_fetch_array($rs)){
                  $idcmt = $row['Id_Comment'];
                  $idtruyen =  $row['Id_Truyen'];
                  $iduser = $row['Id_User'];
                  $noidung =  $row['Noidung'];
                  $cmt[$i] = new e_binhluan($idcmt, $iduser,$idtruyen, $noidung );
                  $i++;
        }
        return $cmt;
    }

    public function delete($id)
    {
        $sql="DELETE FROM comment WHERE Id_Comment=$id ";
        return $this->execute($sql);
    }
}


?>
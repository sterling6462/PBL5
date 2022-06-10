<?php
include_once("E_chuong.php");

class m_chuong2
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
    public function getChuongByIdTruyen($idtruyen){
        $sql = "SELECT * from Chuong WHERE Id_Truyen='$idtruyen'  ";
        $i= 0 ;
        $rs = mysqli_query($this->conn, $sql);
        $chuong = array();
        while($row = mysqli_fetch_array($rs)){
                  $idchuong = $row['Id_Chuong'];
                  $idtruyen =  $row['Id_Truyen'];
                  $chuongso = $row['Chuongso'];
                  $chuongten =  $row['Chuongten'];
                  $noidung =  $row['Noidung'];
                  $chuong[$i] = new E_chuong($idchuong, $idtruyen, $chuongso, $chuongten, $noidung );
                  $i++;
        }
        return $chuong;
    }
    public function getChuong($idchuong)
        {
            $sql = "SELECT * from Chuong WHERE Id_Chuong='$idchuong'  ";
         
            $rs = mysqli_query($this->conn, $sql);
            $obj = $rs->fetch_object();
            $idchuong =$obj->Id_Chuong;
            $idtruyen =  $obj->Id_Truyen;
            $chuongso = $obj->Chuongso;
            $chuongten =  $obj->Chuongten;
            $noidung =  $obj->Noidung;
            $chuong = new e_chuong($idchuong,$idtruyen,$chuongso,$chuongten,$noidung);
         return $chuong;
        }
        public function tangluotxem($idtruyen){
            $sql = "SELECT * FROM truyen WHERE Id_Truyen = '$idtruyen' LIMIT 1 ";
            $rs = mysqli_query($this->conn, $sql);
            $obj = $rs->fetch_object();
            $new_luotxem =$obj->Luotxem + 1;
            $sql = "UPDATE truyen SET Luotxem = '$new_luotxem' WHERE Id_Truyen = '$idtruyen' ";
            mysqli_query($this->conn, $sql);
   }
   public function getChuongSau($idchuong)
   {
       try {
           
           $sql = "SELECT Chuongso,Id_Truyen from Chuong WHERE Id_Chuong = '$idchuong' ";
           $rs = mysqli_query($this->conn, $sql);
           $obj = $rs->fetch_object();
           $chuongso = $obj->Chuongso + 1;
           $idtruyen =  $obj->Id_Truyen;

           $sql = "SELECT * from Chuong WHERE Chuongso = '$chuongso' AND Id_Truyen = '$idtruyen'";
           $rs = mysqli_query($this->conn, $sql);
           $obj = $rs->fetch_object();
           $idchuong =$obj->Id_Chuong;
           $idtruyen =  $obj->Id_Truyen;
           $chuongso = $obj->Chuongso;
           $chuongten =  $obj->Chuongten;
           $noidung =  $obj->Noidung;
           $chuongsau = new e_chuong($idchuong,$idtruyen,$chuongso,$chuongten,$noidung);
           return $chuongsau;
       } catch (\Throwable $th) {
           //throw $th;
       }
   }

   public function getChuongTruoc($idchuong)
   {
       $sql = "SELECT Chuongso,Id_Truyen from Chuong WHERE Id_Chuong = '$idchuong' ";
       $rs = mysqli_query($this->conn, $sql);
       $obj = $rs->fetch_object();
       $chuongso = $obj->Chuongso - 1;
       $idtruyen =  $obj->Id_Truyen;

       $sql = "SELECT * from Chuong WHERE Chuongso = '$chuongso' AND Id_Truyen = '$idtruyen'";
       $rs = mysqli_query($this->conn, $sql);
       $obj = $rs->fetch_object();
       $idchuong =$obj->Id_Chuong;
       $idtruyen =  $obj->Id_Truyen;
       $chuongso = $obj->Chuongso;
       $chuongten =  $obj->Chuongten;
       $noidung =  $obj->Noidung;
       echo $idchuong;
       $chuongtruoc = new e_chuong($idchuong,$idtruyen,$chuongso,$chuongten,$noidung);
       return $chuongtruoc;
   }
   public function updateChuong($idchuong,$chuongten,$noidung,$chuongso){
    $sql = "UPDATE chuong SET Chuongten = '$chuongten', Noidung = '$noidung', Chuongso = '$chuongso'  WHERE Id_Chuong = '$idchuong'";
    $rs = mysqli_query($this->conn, $sql);
   }
   public function addChuong($idtruyen,$chuongso,$chuongten,$noidung){
    $sql = "INSERT INTO chuong(Id_Truyen,Chuongso,Chuongten,Noidung) VALUES('$idtruyen','$chuongso','$chuongten','$noidung')";
    $rs = mysqli_query($this->conn, $sql);
   }
}

?>
<?php
include_once("E_truyen.php");
//include_once("E_chuong.php");
include_once("./Model/Chuong/E_chuong.php");
class m_truyen
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
    public function listtruyen()
    {
        $sql="SELECT * FROM truyen ";
        $this->execute($sql);
        // if($this->result)
        // {
            $i=1;
            while($data=mysqli_fetch_array($this->result))
            {
                $Id_Truyen=$data['Id_Truyen'];
                $Id_Loai=$data['Id_Loai'];
                $Id_User=$data['Id_User'];
                $Tentruyen=$data['Tentruyen'];
                $Tinhtrang=$data['Tinhtrang'];
                $Tacgia=$data['Tacgia'];
                $Gioithieu=$data['Gioithieu'];
                $Ngaydang=$data['Ngaydang'];
                $Hinhdaidien=$data['Hinhdaidien'];
                $Luotxem=$data['Luotxem'];
                
                $truyens[$i]=new e_truyen($Id_Truyen,$Id_Loai,$Id_User,$Tentruyen,$Tinhtrang,$Tacgia,$Gioithieu,$Ngaydang,$Hinhdaidien,0,$Luotxem);
                $i++;
            }
            
        //}
        return $truyens;
    }

    public function traidtheotentruyen($Ten)
    {
        $truyens=$this->listtruyen();
        for($i=1;$i<=sizeof($truyens);$i++)
 
        {
            if($truyens[$i]->Tentruyen==$Ten)
            {
                return $truyens[$i]->Id_Truyen;
            }
        }
    }
    public function getTruyen($idtruyen){
        $sql = "SELECT * from Truyen WHERE Id_Truyen='$idtruyen'";
       
        $rs = mysqli_query($this->conn, $sql);
       $obj = $rs->fetch_object();
       $idtruyen = $obj->Id_Truyen;
       $idloai= $obj->Id_Loai;
       $iduser=$obj->Id_User;
       $tentruyen = $obj->Tentruyen;
       $tinhtrang=$obj->Tinhtrang;
       $tacgia= $obj->Tacgia;
       $gioithieu=$obj->Gioithieu;
       $ngaydang=$obj->Ngaydang;
       $hinhdaidien=$obj->Hinhdaidien;
       $Luotxem = $obj->Luotxem;
       $duyet=$obj->Duyet;
       $truyen = new e_truyen($idtruyen,$idloai,$iduser,$tentruyen,$tinhtrang,$tacgia,$gioithieu,$ngaydang,$hinhdaidien,$Luotxem,$duyet);
        return $truyen;
       }
       public function getAllTruyen(){
                 $sql = "SELECT * from Truyen";
                 $i= 0 ;
                 $rs = mysqli_query($this->conn, $sql);
                 $truyen = array();
                 while($row = mysqli_fetch_array($rs)){
                           $idtruyen = $row['Id_Truyen'];
                           $idloai =  $row['Id_Loai'];
                           $iduser = $row['Id_User'];
                           $tentruyen =  $row['Tentruyen'];
                           $tinhtrang =  $row['Tinhtrang'];
                           $tacgia =  $row['Tacgia'];
                           $gioithieu =  $row['Gioithieu'];
                           $ngaydang =  $row['Ngaydang'];
                           $hinhdaidien = $row['Hinhdaidien'];
                           $duyet =  $row['Duyet'];
                           $truyen[$i] = new e_truyen($idtruyen,$idloai,$iduser, $tentruyen, $tinhtrang, $tacgia, $gioithieu, $ngaydang, $hinhdaidien,0, $duyet );
                           $i++;
                 }
                 return $truyen;
       }
       public function getTruyenchuaduyet($duyet){
                 $sql = "SELECT * FROM Truyen WHERE Duyet = '$duyet'";
                 $i= 0 ;
                 $rs = mysqli_query($this->conn, $sql);
                 $truyen = array();
                 while($row = mysqli_fetch_array($rs)){
                           $idtruyen = $row['Id_Truyen'];
                           $idloai =  $row['Id_Loai'];
                           $iduser = $row['Id_User'];
                           $tentruyen =  $row['Tentruyen'];
                           $tinhtrang =  $row['Tinhtrang'];
                           $tacgia =  $row['Tacgia'];
                           $gioithieu =  $row['Gioithieu'];
                           $ngaydang =  $row['Ngaydang'];
                           $hinhdaidien = $row['Hinhdaidien'];
                           $duyet =  $row['Duyet'];
                           $truyen[$i] = new e_truyen($idtruyen,$idloai,$iduser, $tentruyen, $tinhtrang, $tacgia, $gioithieu, $ngaydang, $hinhdaidien,0, $duyet );
                           $i++;
                 }
             return $truyen;
       }
       public function getNguoiDang($id_user){
                 $sql = "SELECT * FROM user WHERE Id_User = '$id_user'";
                 $i= 0 ;
                 $rs = mysqli_query($this->conn, $sql);
                 while($row = mysqli_fetch_array($rs)){
                    $nguoidang = $row['Ten'] ;     
                 }
             return $nguoidang;
        }
        public function getTheLoai($id_loai){
           $sql = "SELECT * FROM loaitruyen WHERE Id_Loai = '$id_loai'";
           $i= 0 ;
           $rs = mysqli_query($this->conn, $sql);
           while($row = mysqli_fetch_array($rs)){
              $theloai = $row['TenLoai'] ;     
           }
           return $theloai;
        }
      public function getChuong($idtruyen){
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
                  $ngaycapnhat =$row['Ngaycapnhat'];
                  $chuong[$i] = new E_chuong($idchuong, $idtruyen, $chuongso, $chuongten, $noidung, $ngaycapnhat );
                  $i++;
        }
        return $chuong;
      }
      public function theodoi($iduser, $idtruyen){
        $sql = "SELECT * FROM theodoi WHERE Id_User = '$iduser' AND Id_Truyen= '$idtruyen' ";
        $rs = mysqli_query($this->conn, $sql);
        if($rs->num_rows == 1)
              {
                        $sql = "DELETE FROM theodoi WHERE Id_User = '$iduser' AND Id_Truyen= '$idtruyen' ";
               }
      else{
                        $sql = "INSERT INTO  theodoi(Id_User,Id_Truyen) VALUES('$iduser','$idtruyen') ";
               }
               mysqli_query($this->conn, $sql);
}
       public function insertTruyen($idloai,$iduser, $tentruyen,$tacgia,$gioithieu,$ngaydang,$hinhdaidien ){
                 $sql = "INSERT INTO truyen(Id_Loai,Id_User,Tentruyen,Tacgia,Gioithieu,Ngaydang,Hinhdaidien) VALUES('$idloai', '$iduser', '$tentruyen', '$tacgia', '$gioithieu', '$ngaydang', '$hinhdaidien')";
                 return $this->execute($sql);
       }
       public function duyetTruyen($idtruyen){
                 $sql = "UPDATE truyen SET Duyet = '1' WHERE Id_Truyen = '$idtruyen'" ;
                 return $this->execute($sql);
       }
       public function getLuotTheoDoiByIDTruyen($idtruyen){
           $sql = "SELECT * FROM theodoi WHERE Id_Truyen = '$idtruyen' ";
           $rs = mysqli_query($this->conn, $sql);
           return $rs->num_rows;
       }
       public function getTruyenByNguoidang($idnguoidang){
          $sql = "SELECT * FROM truyen WHERE Id_User = '$idnguoidang' AND Duyet = 1";
          $i= 0 ;
                 $rs = mysqli_query($this->conn, $sql);
                 $truyen = array();
                 while($row = mysqli_fetch_array($rs)){
                           $idtruyen = $row['Id_Truyen'];
                           $idloai =  $row['Id_Loai'];
                           $iduser = $row['Id_User'];
                           $tentruyen =  $row['Tentruyen'];
                           $tinhtrang =  $row['Tinhtrang'];
                           $tacgia =  $row['Tacgia'];
                           $gioithieu =  $row['Gioithieu'];
                           $ngaydang =  $row['Ngaydang'];
                           $hinhdaidien = $row['Hinhdaidien'];
                           $duyet =  $row['Duyet'];
                           $truyen[$i] = new e_truyen($idtruyen,$idloai,$iduser, $tentruyen, $tinhtrang, $tacgia, $gioithieu, $ngaydang, $hinhdaidien,0, $duyet );
                           $i++;
                 }
             return $truyen;
       }
       public function getTruyenDaTheoDoi($idUser){
        $sql = "SELECT Id_Truyen FROM theodoi WHERE Id_User = '$idUser' ";
        $rs =  mysqli_query($this->conn, $sql);
        $truyen = array();
        $i = 0;
        while($row = mysqli_fetch_array($rs)){
                  $idtruyen = $row['Id_Truyen'];
                  $truyen[$i] = $this->getTruyen($idtruyen);
                  $i++;
        }
        return $truyen;
       }
       public function isTruyenWasFollowed($idTruyen, $idUser){
        $sql = "SELECT * FROM theodoi WHERE Id_Truyen = '$idTruyen' AND Id_User = '$idUser' ";
        $rs = mysqli_query($this->conn, $sql);
         if($rs->num_rows){
            return true;
         }
         return false;
       }
}

?>
<?php
//include_once("E_chuong.php");
include_once("E_theloai.php");
class m_theloai
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
    public function listtheloai()
    {
       
            $sql="SELECT * FROM loaitruyen ";
            $this->execute($sql);
                $item = array();
                $i=1;
                while($data=mysqli_fetch_array($this->result))
                {   $Id_Loai=$data['Id_Loai'];
                    $Tenloai=$data['TenLoai'];
                    
                    $item[$i]=new e_theloai($Id_Loai,$Tenloai);
                    $i++;
                }
                
          
            return $item;
        
    }
}
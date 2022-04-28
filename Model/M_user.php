<?php
include_once("E_user.php");
class m_user
{
    private $hostname='localhost';
    private $username='root';
    private $pass='';
    private $dbname='pbl5'; 
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
    {   $this->connect();
        $this->result=$this->conn->query($sql);
        return $this->result;
    }
    public function getuser()
    {
        if($this->result)
        {
            $data=mysqli_fetch_array($this->result);

        }
        else
        {
            $data=0;
        }
        return $data;
    }
    public function getalluser($table)
    {
        // $conn =  new mysqli("localhost","root","","pbl5");
        // if($conn->connect_errno)
        // {
        //     echo "Ket noi that bai:" .$conn->connect_error;
        //     exit();
        // }
        // $alluser = "SELECT * FROM user ";
        // $this->result = mysqli_query($conn, $alluser);


        // while ($row=$this->result->fetch_assoc())
        // {
        //     $data[]=$row;
        // }

        // return $data;
       $sql="SELECT * FROM $table ";
        $this->execute($sql);
        if($this->num_rows()==0)
        {
            $data=0;
        }
        else{
            while($datas=$this->getuser())
            {
                $data[]=$datas;
            }
        }
        return $data;

    }

    public function num_rows()
    {
        if($this->result)
        {
            $num=mysqli_num_rows($this->result);

        }
        else {
            $num=0;
        }
        return $num;
    }
    public function getusertheoid($table,$id)

    {
        $sql="SELECT * FROM $table WHERE Id_User='$id'";

        $this->execute($sql);
        if($this->num_rows()!=0)
        {
            $data=mysqli_fetch_array($this->result);

        }
        else
        {
            $data=0;
        }
        return $data;
    }

    public function edituser($id,$Ten,$NS,$DC,$Email,$Pass,$GT,$Quyen)
    {
        $sql="UPDATE user  SET Ten='$Ten', Ngaysinh='$NS', Diachi='$DC', Email='$Email' ,Matkhau='$Pass', Gioitinh='$GT', Id_Quyen='$Quyen' WHERE Id_User=$id";
        return $this->execute($sql);
    }
    public function delete($id,$table)
    {
        $sql="DELETE FROM $table WHERE Id_User=$id ";
        return $this->execute($sql);
    }
}

?>
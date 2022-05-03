<?php
    class Database{
        private $hostname = 'localhost';
        private $username = 'root';
        private $pass = '';
        private $dbname = 'pbl5';

        private $conn = NULL;
        private $result = NULL;

        public function connect(){
            $this->conn=new mysqli($this->hostname,$this->username,$this->pass,$this->dbname);
            
            if (!$this -> conn){
                echo "connection failed";
                exit();
            }
            else{
                mysqli_set_charset($this->conn,'utf8');
            }
            return $this->conn;
        }

        //thuc thi cau lenh truy van
        // public function execute($sql){
        //     $this->result = $this->conn->query($sql);
        //     return $this->result;
        // }
        public function execute($sql){   
            $this->connect();
            $this->result=$this->conn->query($sql);
            return $this->result;
        }

        //them chuong
        public function InsertData($Chuongso,$Chuongten,$Noidung){
            $sql = "INSERT INTO chuong(Chuongten, Noidung, Chuongso) VALUES ('$Chuongten', '$Noidung', '$Chuongso')";
            // $sql = "INSERT INTO chuong_(Chuongten, Noidung) VALUES ('$Chuongten', '$Noidung')";
            return $this->execute($sql);
        }

        public function getData(){
            // $sql = "SELECT * FROM $table";
            // $this->execute($sql);
            if($this->result){
                $data=mysqli_fetch_array($this->result);
            }
            else{
                $data=0;
            }
            return $data;
        }

        //danh sach chuong
        public function getAllData($table){
            $sql="SELECT * FROM $table";
            $this->execute($sql);
            if($this->num_rows()==0){
                $data = 0;
            }
            else{
                while($data1 = $this->getData())
                {
                    $data[] = $data1;
                }
            }
            return $data;
        }

        public function num_rows(){
            if($this->result)
            {
                $num=mysqli_num_rows($this->result);
            }
            else {
                $num=0;
            }
            return $num;
        }
        

    }
?>
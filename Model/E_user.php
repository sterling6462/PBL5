<?php

    class e_user
    {
        public $iduser;
        public $username;
        public $date;
        public $diachi;
        public $email;
        public $matkhau;
        public $gioitinh;
        public $idquyen;

        public function __construct($_iduser,$_username,$_date,$_diachi,$_email,$_matkhau,$_gioitinh,$_idquyen)
        {
            $this->iduser =$_iduser;
            $this->username=$_username;
            $this ->date=$_date;
            $this->diachi=$_diachi;
            $this->email=$_email;
            $this->matkhau=$_matkhau;
            $this->gioitinh=$_gioitinh;
            $this->idquyen=$_idquyen;

        }
        
    }

?>
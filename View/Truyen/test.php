<!DOCTYPE html>
<html>

<head>
    <title>Web</title>
    <meta charset="UTF-8">
    <link rel="icon" href="685681.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="PBL5/Trangchu.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="CSS/Trangchu1.css">

<body>
    <style>


    </style>
    <!-- 
    <?php   
        $link=mysqli_connect("localhost","root","") or die("khong the ket noi den co so du lieu");
	    mysqli_select_db($link,"pbl5_1");
	    $sql="SELECT * FROM truyen where Duyet=1";
	    $result=mysqli_query($link,$sql);


        $sql1="SELECT * FROM loaitruyen";
        $result1=mysqli_query($link,$sql1);
    ?> -->



    </style>


    <section id="nav">
        <div>

            <ul>
                <li><a class="navbar-item" href="/">
                        <img width="50" height="50"
                            src="https://drive.google.com/uc?export=view&id=1z1geOoZYriQ-wjqYLDLPPeNmUJCgN9Ku"
                            alt="Doctruyen logo" class="layout_logo__319hZ">
                </li>
                <li><a href="#search">Tìm kiếm</a></li>
                <li><a href="#truyenhot">Truyện hot</a></li>
                <li><a href="#truyenle">Truyện lẻ</a></li>
                <li><a href="#truyenbo">Truyện bộ</a></li>
                <li><a href="#truyenmoi">Truyện mới</a></li>
                <div class="dropdown">
                    <?php
                    $iduser=$_SESSION["id_currentUser"];
                    
                    $quyen=$_SESSION["id_quyen"] . "<br>";
                    $quyen1=(int)$quyen;
                    if ($quyen1=='')
                    {
                        echo "Chúc bạn đọc truyện vui vẻ ❤!!!!";

                        echo $quyen;

                    }
                    else
                    {
                    switch ($quyen1)
                    {
                        case 1: { ?>
                    <select name="admin" onchange="javascript:handleSelect(this)">
                        <option>Quyền của admin</option>
                        <option value="index.php?controller=user&action=list">Quản lý user</option>
                        <option value="index.php?controller=admin&action=danh_sach_chuong">Quản lý chương</option>
                        <option value="index.php?controller=binhluan&action=listbinhluan">Quản lý comment</option>
                        <option value="index.php?controller=truyen&action=list">Quản lý truyện chưa duyêt</option>
                        <option value="index.php?controller=truyen&action=listdaduyet">Quản lý truyện đã duyêt</option>
                        <option value="index.php?controller=user&action=edit&id=<?php echo $iduser; ?>">Sửa thông tin
                        </option>

                    </select>

                    <script type="text/javascript">
                    function handleSelect(elm) {
                        window.location = elm.value;
                    }
                    </script>
                    <?php
                        break;
                    }
                    case 3:{?>
                    <select name="tacgia" onchange="javascript:handleSelect(this)">
                        <option>Quyen cua tac gia </option>

                        <!-- <option value="index.php?controller=admin&action=danh_sach_chuong">Quản lý chuong</option> -->
                        <option value="index.php?controller=truyen&action=add">Thêm truyện</option>
                        <option value="index.php?controller=truyen&action=truyendadang">Quản lý truyện đã đăng</option>
                        <option value="index.php?controller=user&action=edit&id=<?php echo $iduser; ?>">Sửa thông tin
                        </option>
                    </select>

                    <script type="text/javascript">
                    function handleSelect(elm) {
                        window.location = elm.value;
                    }
                    </script>


                    <?php 
                    break;
    
                    }
    case 4:{?>
                    <select name="CTV" onchange="javascript:handleSelect(this)">
                        <option>Quyen cua cong tac vien</option>
                        <option value="index.php?controller=user&action=list">Quan ly user</option>
                        <option value="index.php?controller=admin&action=danh_sach_chuong">Quan ly chuong</option>
                        <option value="index.php?controller=user&action=edit&id=<?php echo $iduser; ?>">Sửa thông tin
                        </option>
                    </select>

                    <script type="text/javascript">
                    function handleSelect(elm) {
                        window.location = elm.value;
                    }
                    </script>


                    <?php 
            break;
            
            }
            case 2:
            echo "Chuc ban doc truyen vui ve";
            break;
   
            ?>

                    <?php
            }
        }
?>


                </div>

                <div class="navbar-end">
                    <Label>Hello <?php
                    if ($_SESSION["ten"]=='' )
                    echo "HELLO";
                    else echo $_SESSION["ten"]; ?></Label>



                    <a class="dki" href="http://localhost/PBL5_1/index.php?controller=user&action=add">Đăng kí</a>

                    <a class="dnhap" href="http://localhost/PBL5_1/index.php?controller=user&action=login">Đăng
                        nhập</a><br><br>


                </div>
                <div class="dxuat">
                    <a class="dxuat" href="http://localhost/PBL5_1/index.php?controller=user&action=login">Đăng
                        xuất</a>
                </div>
            </ul>

        </div>
    </section>
    <section id="nav1">
        <center>
            <div class="timkiem">
                <table class="bang">
                    <tr>
                        <th>Thể loại:</th>
                    </tr>
                    <tr>
                        <td>
                            <select name="loaitruyen" class="form-control" id="fetchval">
                                <option value="" class="theloai" disabled="" selected="">--Tất cả--</option>
                                <option value="0" class="theloai">Thần thoại</option>
                                <option value="1" class="theloai">Thiếu nhi</option>
                                <option value="2" class="theloai">Trinh thám</option>
                                <option value="3" class="theloai">Tiểu thuyết</option>
                            </select>
                        </td>

                    </tr>
                </table>
            </div>
            <center>
    </section>

    <!-- <script src="jquery.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#fetchval").on('change', function() {
            var value = $(this).val();
            $.ajax({
                url: 'http://localhost/PBL5_1/View/Truyen/fetch.php',
                type: 'POST',
                data: 'request=' + value,
                beforeSend: function() {
                    $("#container").html('Working...');
                },
                success: function(data) {
                    $("#container").html(data);
                },
            });
        });
    });
    </script>

    <div id="container">
        <?php
      $conn = mysqli_connect('localhost','root','','pbl5_1');
      $query="SELECT * from truyen";
      $output=mysqli_query($conn,$query);
echo '<section class="truyens" >';
      while($fetch = mysqli_fetch_assoc($output))
    {
    echo '<section class="truyen">';
        echo '<section class="img"><img src="'.$fetch['Hinhdaidien'].'"></section>';
        echo '<section class="name"><a href="index.php?controller=truyen&action=detail&idtruyen='.$fetch['Id_Truyen'].'">'.$fetch['Tentruyen'].'</a></section>';
    echo '</section>';
     };
echo '</section>';
?>
    </div>


    <div class="theodoi">
        <h2>=>>>>TRUYỆN THEO DÕI</h2>

        <section id="nav3">
        </section><br>
    </div><br>

</body>
</head>
<footer>



</footer>


</html>
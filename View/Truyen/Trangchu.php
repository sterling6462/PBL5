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
        <link rel="stylesheet" href="CSS/Trangchu.css" type="text/css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="PBL5/Trangchu.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="CSS/Trangchu1.css">
    </head>
<body>
    <!-- 
    <?php   
        $link=mysqli_connect("localhost","root","") or die("khong the ket noi den co so du lieu");
	    mysqli_select_db($link,"pbl5_1");
	    $sql="SELECT * FROM truyen where Duyet=1";
	    $result=mysqli_query($link,$sql);
        $sql1="SELECT * FROM loaitruyen";
        $result1=mysqli_query($link,$sql1);
    ?> -->
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
<body>
    <?php
    $link = mysqli_connect("localhost", "root", "") or die("khong the ket noi den co so du lieu");
    mysqli_select_db($link, "pbl5_1");
    $sql = "SELECT * FROM truyen where Duyet=1";
    $result = mysqli_query($link, $sql);
    $sql1 = "SELECT * FROM loaitruyen";
    $result1 = mysqli_query($link, $sql1);
    ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#fetchval").on('change', function() {
            var value = $(this).val();
            $.ajax({
                url: 'View/Truyen/fetch.php',
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
    <header class="header">
        <?php include "header.php" ?>
    </header>

    <div class="container" style="display: flex; flex-direction: column; color:#005555;">
        <div class="the-loai">
            <h3 class="the-loai">Thể loại</h3>
            <div class="the-loai-select">
                <td>
                    <select name="loaitruyen" class="form-control" id="fetchval">
                        <option value="" class="theloai" disabled="" selected="">Tất cả</option>
                        <option value="0" class="theloai">Thần thoại</option>
                        <option value="1" class="theloai">Thiếu nhi</option>
                        <option value="2" class="theloai">Trinh thám</option>
                        <option value="3" class="theloai">Tiểu thuyết</option>
                    </select>
            </div>
        </div>
        <div id="danh-sach-truyen">
            <h2>DANH SÁCH TRUYỆN</h2>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'pbl5_1');
            $query = "SELECT * from truyen";
            $output = mysqli_query($conn, $query);
            echo '<section class="truyens" >';
            while ($fetch = mysqli_fetch_assoc($output)) {
                echo '<section class="truyen">';
                echo '<section class="img"><img src="' . $fetch['Hinhdaidien'] . '"></section>';
                echo '<section class="name"><a class="name-tittle" href="index.php?controller=truyen&action=detail&idtruyen=' . $fetch['Id_Truyen'] . '">' . $fetch['Tentruyen'] . '</a></section>';
                echo '</section>';
            };
            echo '</section>';
            ?>
        </div>
        <div class="truyen-theo-doi">
            <h2>TRUYỆN THEO DÕI</h2>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'pbl5_1');
            $query = "SELECT * from truyen";
            $output = mysqli_query($conn, $query);
            echo '<section class="truyens" >';
            while ($fetch = mysqli_fetch_assoc($output)) {
                echo '<section class="truyen">';
                echo '<section class="img"><img src="' . $fetch['Hinhdaidien'] . '"></section>';
                echo '<section class="name"><a href="index.php?controller=truyen&action=detail&idtruyen=' . $fetch['Id_Truyen'] . '">' . $fetch['Tentruyen'] . '</a></section>';
                echo '</section>';
            };
            echo '</section>';
            ?>
        </div>
        <div class="bang-xep-hang">
            <h2>BẢNG XẾP HẠNG</h2>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'pbl5_1');
            $query = "SELECT * from truyen";
            $output = mysqli_query($conn, $query);
            echo '<section class="truyens" >';
            while ($fetch = mysqli_fetch_assoc($output)) {
                echo '<section class="truyen">';
                echo '<section class="img"><img src="' . $fetch['Hinhdaidien'] . '"></section>';
                echo '<section class="name"><a href="index.php?controller=truyen&action=detail&idtruyen=' . $fetch['Id_Truyen'] . '">' . $fetch['Tentruyen'] . '</a></section>';
                echo '</section>';
            };
            echo '</section>';
            ?>
        </div>
    </div>
    <footer class="footer">
        <?php include "footer.php" ?>
    </footer>
</body>

</html>
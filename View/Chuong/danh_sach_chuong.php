<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link href="View\style.css" rel="stylesheet">
    <title>Duyệt truyện</title>

    <style>
    table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    table td,
    table th {
        border: 1px solid #ddd;
        padding: 8px;
    }



    table tr:hover {
        background-color: #ddd;
    }

    table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
    .btnthemchuong:link,
.btnthemchuong:visited {
  background-color: green;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 8px;
  margin-bottom: 10px;
}

.btnthemchuong:hover,
.btnthemchuong:active {
  background-color: green;
}
    </style>
</head>

<body>

    <form class="danhsachtruyen" method="POST">
        <h3>Danh sách chương của truyện</h3>
        <a class="btnthemchuong"
                        href="index.php?controller=chuong&action=add&idtruyen=<?= $idtruyen?>">Thêm chương mới</a>
        <table>
            <thead>
                <tr>
                    <th>Chương số</th>
                    <th>Tiêu đề</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $stt = 1;
                    for($i=0;$i<sizeof($danhsachchuong);$i++){
                        //  $nguoidang = $db->getNguoiDang($danhsachtruyen[$i]->Id_User);
                        //  $loaitruyen = $db->getTheLoai($danhsachtruyen[$i]->Id_Loai);
                    ?>
                <tr>
                    <td><?=$danhsachchuong[$i]->Chuongso   ?></td>
                    <td><a href="index.php?controller=chuong&action=edit&idtruyen=<?= $idtruyen?>&idchuong=<?=$danhsachchuong[$i]->Id_Chuong?>"><?=$danhsachchuong[$i]->Chuongten  ?></a></td>
                </tr>
          
                <?php $stt++; } ?>
            </tbody>
        </table>
    </form>
</body>

</html>
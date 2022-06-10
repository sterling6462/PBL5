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
    </style>
</head>

<body>

    <form class="danhsachtruyen" method="POST">
        <h3>Danh sách chương của truyện</h3>
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
                    <td><?=$danhsachchuong[$i]->Chuongten  ?></td>
                </tr>
          
                <?php $stt++; } ?>
            </tbody>
        </table>
    </form>
</body>

</html>
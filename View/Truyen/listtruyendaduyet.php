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
        <h3>Danh sách truyện đã duyệt</h3>
        <table>
            <thead>
                <tr>
                    <th>Số thứ tự</th>
                    <th>Hình đại diện</th>
                    <th>Tên truyện</th>
                    <th>Thể loại</th>
                    <th>Tác giả</th>
                    <th>Người đăng</th>
                    <th>Giới thiệu</th>
                    <th>Ngày đăng</th>
                    <th>Sửa</th>
                    <th>Xóa</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    $stt = 1;
                    for($i=0;$i<sizeof($danhsachtruyen);$i++){
                        //  $nguoidang = $db->getNguoiDang($danhsachtruyen[$i]->Id_User);
                        //  $loaitruyen = $db->getTheLoai($danhsachtruyen[$i]->Id_Loai);
                    ?>
                <tr>
                    <td><?= $stt++ ?></td>
                    <td><img width="30" height="50" src="<?=$danhsachtruyen[$i]->Hinhdaidien?>"></td>
                    <td><?= $danhsachtruyen[$i]->Tentruyen ?></td>
                    <td><?=$db->getTheLoai($danhsachtruyen[$i]->Id_Loai)?></td>
                    <td><?=$danhsachtruyen[$i]->Tacgia?></td>
                    <td><?=$db->getNguoiDang($danhsachtruyen[$i]->Id_User)?></td>
                    <td><?=$danhsachtruyen[$i]->Gioithieu?></td>
                    <td><?=$danhsachtruyen[$i]->Ngaydang?></td>
                    <td>
                        <a
                            href="index.php?controller=truyen&action=edit&id=<?php echo $danhsachtruyen[$i]->Id_Truyen; ?>">Sửa</a>

                    </td>
                    <td>
                        <a
                            href="index.php?controller=truyen&action=delete&id=<?php echo $danhsachtruyen[$i]->Id_Truyen; ?>">Xóa</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href="index.php?controller=truyen&action=add">Thêm truyện</a>
    </form>
</body>

</html>
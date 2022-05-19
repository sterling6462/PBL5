<head>
    <link rel="stylesheet" type="text/css" href="CSS/List_user.css">
</head>
<div class="listuser">
    <h1>DANH SACH CAC USER</h1>
    <table border="1px">

        <thead>
            <tr>
                <th>STT</th>
                <th>Ma user</th>
                <th>Ten user</th>
                <th>Ngay sinh</th>
                <th>Dia chi</th>
                <th>Email</th>
                <th>Mat khau</th>
                <th>Gioi tinh</th>
                <th>Ma quyen</th>
                <th>Hanh dong</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stt=1;
            foreach ($data as $value){ ?>
            <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $value['Id_User']; ?></td>
                <td><?php echo $value['Ten']; ?></td>
                <td><?php echo $value['Ngaysinh']; ?></td>
                <td><?php echo $value['Diachi']; ?></td>
                <td><?php echo $value['Email']; ?></td>
                <td><?php echo $value['Matkhau']; ?></td>
                <td><?php echo $value['Gioitinh']; ?></td>
                <td><?php echo $value['Id_Quyen']; ?></td>
                <td>
                    <a href="index.php?controller=user&action=edit&id=<?php echo $value['Id_User'];?>">Edit</a>
                    <a href="index.php?controller=user&action=delete&id=<?php echo $value['Id_User'];?>">Delete</a>
                </td>

            </tr>
            <?php
            $stt++;
            }
        ?>




            <!-- <?php
            print_r($data);
        ?> -->
        </tbody>
    </table>
</div>
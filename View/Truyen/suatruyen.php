<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sửa truyện</title>
    <link rel="stylesheet" type="text/css" href="CSS/Edittruyen.css">

</head>

<body>
    <div class="container">
        <h1>Sửa truyện của bạn</h1>
        <form action=" " method="POST" enctype="multipart/form-data">
            <!-- <p>Xin hãy nhập biểu mẫu bên dưới để chỉnh sửa.</p>
        <hr>
        <label for="Tentruyen"><b></b></label>
        <input type="text" name="Username" value="<?php echo $dataedit->Ten; ?>" required><br>
        <label for="Ngaysinh"><b>Ngay sinh</b></label>
        <input type="date" name="Ngaysinh" value="<?php echo $dataedit->Ngaysinh; ?>" required><br><br>
        <label for="Diachi"><b>Dia chi</b></label>
        <input type="text" name="Diachi" value="<?php echo $dataedit->Diachi; ?>" required>
        <label for="Email"><b>Email</b></label>
        <input type="text" name="Email" value="<?php echo $dataedit->Email; ?>" required> -->
            <table>
                <tr>
                    <td>Tên truyện</td>
                    <td><input type="text" name="tentruyen" value="<?php echo $dataId->Tentruyen;?>"
                            placeholder="Tên truyện" /></td>
                </tr>
                <tr>
                    <td>Loại truyện</td>
                    <td>
                        <select
                            name="id_loai" ">
                                                                                <option <?php if($dataId->Id_Loai    == '1'){echo("selected");}?> value="
                            1">Thiếu nhi</option>
                            <option <?php if($dataId->Id_Loai == '2'){echo("selected");}?> value="2">Trinh thám
                            </option>
                            <option <?php if($dataId->Id_Loai == '3'){echo("selected");}?> value="3">Tiểu thuyết
                            </option>
                            <option <?php if($dataId->Id_Loai == '4'){echo("selected");}?> value="4">Kinh dị</option>
                            <option <?php if($dataId->Id_Loai == '5'){echo("selected");}?> value="5">Viễn tưởng
                            </option>
                            <option <?php if($dataId->Id_Loai == '6'){echo("selected");}?> value="6">Tình cảm</option>
                            <option <?php if($dataId->Id_Loai == '7'){echo("selected");}?> value="7">Học đường
                            </option>
                            <option <?php if($dataId->Id_Loai == '8'){echo("selected");}?> value="8">Hành động
                            </option>
                            <option <?php if($dataId->Id_Loai == '9'){echo("selected");}?> value="9">Kiếm hiệp
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tác giả</td>
                    <td><input type="text" name="tacgia" value="<?php echo $dataId->Tacgia?>" placeholder="Tác giả" />
                    </td>
                </tr>
                <tr>
                    <td>Giới thiệu</td>
                    <td><textarea type="text" name="gioithieu" placeholder="Mô tả truyện" cols="70"
                            rows="4"><?php echo $dataId->Gioithieu ;?></textarea></td>
                </tr>
                <tr>
                    <td>Ảnh đại diện</td>
                    <td><input name="hinhdaidien" id="hinhdaidien" type="text"
                            value="<?php echo $dataId->Hinhdaidien ;?>"
                            placeholder="Paste link ảnh trong gg drive của bạn" /></td>
                </tr>
                <tr>
                    <td></td>

                    <td><input type="submit" name="updatetruyen" value="Sửa truyện"></td>
                </tr>
            </table>
        </form>

    </div>
</body>

</html>
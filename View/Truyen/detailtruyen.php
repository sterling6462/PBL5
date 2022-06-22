<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="CSS/detailtruyen.css" type="text/css">
</head>

<body>
    <div id="nav">

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
            <div class="navbar-end">
                <a class="dki" href="index.php?controller=user&action=add">Đăng kí</a>
                <a>/</a>
                <a class="dnhap" href="index.php?controller=user&action=login">Đăng
                    nhập</a>
            </div>
        </ul>

    </div>
    <div class="truyen">
        <h2><?= $truyen->Tentruyen ?></h2>
        <div class="detail">
            <img style="height: 300px;width:185px" alt="Anh dai dien" src="<?= $truyen->Hinhdaidien?>" />
            <div class="prop">
                <table>
                    <tr>
                        <td>
                            <p>Tác giả: </p>
                        </td>
                        <td>
                            <p style="color:dimgray"><?=$truyen->Tacgia?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Tình trạng:</p>
                        </td>
                        <td>
                            <p style="color:dimgray"><?=$tinhtrang?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Thể loại:</p>
                        </td>
                        <td>
                            <p style="color:dimgray"><?=$theloai?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Lượt xem:</p>
                        </td>
                        <td>
                            <p style="color:dimgray"><?=$truyen->Luotxem?></p>
                        </td>
                    </tr>
                </table>
                <div style="display:flex; ">
                    <a class="btntheodoi"
                        href="index.php?controller=truyen&action=detail&idtruyen=<?= $truyen->Id_Truyen?>&theodoi=">
                       <?php 
                            if($isFollowed) {
                                echo 'Bỏ theo dõi';
                            } else {
                                echo 'Theo dõi' ;
                            }
                        ?>
                    </a>
                    <p style="font-size: medium; color:dimgray"> &nbsp;&nbsp;<?=$luottheodoi?> người đã theo dõi </p>
                </div>
                <div>
                    <a class="btndoctruyen"
                        href="index.php?controller=chuong&action=doc_truyen&idtruyen=<?= $truyen->Id_Truyen?>&idchuong=1">Đọc
                        từ đầu</a>
                    <a class="btndoctruyen"
                        href="index.php?controller=chuong&action=doc_truyen&idtruyen=<?= $truyen->Id_Truyen?>&idchuong=<?= sizeof($danhsachchuong)?>">Đọc
                        mới nhất</a>
                </div>
            </div>
        </div>



    </div>
    <div class="danhsachchuong">
        <h3>Danh sách chương</h3>
        <table id="tablechuong">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Chương số</th>
                    <th>Tên</th>
                    <th> Ngày cập nhật</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                if (is_array($danhsachchuong) || is_object($danhsachchuong))
                    {
                        foreach ($danhsachchuong as $value){ ?>
                <tr>
                    <td><?php echo $i ;?></td>
                    <td><a style="text-decoration: none;color:black;"
                            href="index.php?controller=chuong&action=doc_truyen&idtruyen=<?= $value->Id_Truyen?>&idchuong=<?= $i?>">Chapter
                            <?=$value->Chuongso ?></a></td>
                    <td><?=$value->Chuongten ?></td>
                    <td>NA</td>
                </tr>
                <?php
                $i++;
                        }
                    }
            ?>
            </tbody>
        </table>
    </div>
    <div class="listcmt">
        <h3>Danh sách bình luận</h3>

        <?php  for($i=1;$i<=sizeof($cmts);$i++){ ?>
        <hr>
        <h4><?php echo "Người đọc : ";echo $tenuser[$i]; ?></h4>
        <h5>
            <?php echo "****";echo $cmts[$i]->Noidung;?>
        </h5>


        <?php } ?>
        <h3>Thêm bình luận</h3>
        <form method="POST" name="themcmt">
            <input type="text" name="comment">
            <input type="submit" name="addcmt" value="Thêm comment">

        </form>
    </div>
</body>

</html>
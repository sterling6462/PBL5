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
                    
                    $quyen=$_SESSION["id_quyen"] . "<br>";

                    if ($quyen=='')
                    {
                        echo "Chúc bạn đọc truyện vui vẻ <3!!!!";
                    }
                    else
                    {
                    switch ($quyen)
                    {
                        case 1: { ?>
                    <select name="admin" onchange="javascript:handleSelect(this)">
                        <option>Quyền của admin</option>
                        <option value="index.php?controller=user&action=list">Quản lý user</option>
                        <option value="index.php?controller=admin&action=danh_sach_chuong">Quản lý chương</option>
                        <option value="index.php?controller=binhluan&action=listbinhluan">Quản lý comment</option>
                        <option value="index.php?controller=truyen&action=list">Quản lý truyện chưa duyêt</option>
                        <option value="index.php?controller=truyen&action=listdaduyet">Quản lý truyện đã duyêt</option>

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
                        <option value="index.php?controller=user&action=list">Quản lý user</option>
                        <option value="index.php?controller=admin&action=danh_sach_chuong">Quản lý chuong</option>
                        <option value="index.php?controller=truyen&action=add">Thêm truyện</option>
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
                    <a class="dki" href="http://localhost/PBL5_1/index.php?controller=user&action=add">Đăng kí</a>
                    <a>/</a>
                    <a class="dnhap" href="http://localhost/PBL5_1/index.php?controller=user&action=login">Đăng
                        nhập</a>
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
                        <th>Năm:</th>
                    </tr>
                    <tr>
                        <td>
                            <select name="orderby" class="form-control" id="vnkings_cat">
                                <option class="theloai">--Tất cả--</option>
                                <?php for($i=1;$i<=sizeof($item);$i++) {?>
                                <option class="name"><?=$item[$i]->Tenloai?></option>
                                <?php }?>
                            </select>
                        </td>

                        <td>
                            <select name="orderby" class="form-control" id="vnkings_cat">
                                <option class="theloai">--Tất cả--</option>
                                <option class="theloai" value="2018">Năm 2018 trở về trước</option>
                                <option class="theloai" value="2019">Năm 2019</option>
                                <option class="theloai" value="2020">Năm 2020</option>
                                <option class="theloai" value="2021">Năm 2021</option>
                                <option class="theloai" value="2022">Năm 2022</option>
                            </select>
                        </td>

                    </tr>
                </table>
            </div>
            <center>
    </section>
<nav class="navbar-header">
    <ul class="container-header">
        <li>
            <div id="menu-bar" class="fas fa-bars"></div>
            <a href="index.php?controller=user&action=trangchu" class="logo"
                style="text-decoration: none;"><span>ĐỌC</span>
                TRUYỆN</a>
        </li <li><a href="#search">Tìm kiếm</a></li>
        <li><a href="#truyenhot">Truyện hot</a></li>
        <li><a href="#truyenle">Truyện lẻ</a></li>
        <li><a href="#truyenbo">Truyện bộ</a></li>
        <li><a href="#truyenmoi">Truyện mới</a></li>
        <li class="li-role">
            <div class="dropdown">
                <?php
                $iduser = $_SESSION["id_currentUser"];
                $quyen = $_SESSION["id_quyen"] . "<br>";
                $quyen1 = (int)$quyen;
                if ($quyen1 == '') {
                    echo "Chúc bạn đọc truyện vui vẻ <3!!!!";
                } else {
                    switch ($quyen1) {
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
                        case 3: { ?>
                <select name="tacgia" onchange="javascript:handleSelect(this)">
                    <option>Quyen cua tac gia </option>
                    <option value="index.php?controller=admin&action=danh_sach_chuong">Quản lý chuong</option>
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
                        case 4: { ?>
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
                        case 2: {
                                echo "Chuc ban doc truyen vui ve";
                                break;
                            }
                            ?>
                <?php
                    }
                }
                ?>
            </div>
        </li>
        <li>
            <div class="user">
                <?php
                if (!isset($_SESSION["ten"])) {
                    echo '<div class="btn-login-logout">
                            <a class="dki btn btn-light" href="index.php?controller=user&action=add">Đăng kí</a>
                            <a class="dnhap btn btn-light" href="index.php?controller=user&action=login">Đăng nhập</a>
                        </div>';
                } else {
                    echo 'Xin chào ';
                    echo $_SESSION["ten"];
                    echo '<div class="btn-dxuat"><a class="dxuat btn btn-light" href="index.php?controller=user&action=dangxuat">Đăng xuất</a>
                        </div>';
                } ?>
            </div>
        </li>
    </ul>
</nav>
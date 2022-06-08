<head>
    <link rel="stylesheet" type="text/css" href="CSS/Listcmt.css">

</head>
<div class="listcmt">
    <h1>DANH SACH CAC BINH LUAN</h1>
    <div class="box">
        <form method="POST">
            <input type="text" name="searchcmt" value="0">
            <button name="search" class="custom-btn btn-12"><span>Search!!</span><span>Tim Kiem</span></button>
        </form>
    </div>
    <table border="1px">

        <thead>
            <tr>
                <th>STT</th>
                <th>Id_Comment</th>
                <th>Id_User</th>
                <th>Id_Truyen</th>
                <th>Noi dung</th>

            </tr>
        </thead>
        <tbody>
            <?php
            
            $stt=1;
             for($i=1;$i<=sizeof($cmts);$i++){ ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $cmts[$i]->Id_Comment; ?></td>
                <td><?php echo $cmts[$i]->Id_User; ?></td>
                <td><?php echo $cmts[$i]->Id_Truyen; ?></td>
                <td><?php echo $cmts[$i]->Noidung; ?></td>

                <td>
                    <a
                        href="index.php?controller=binhluan&action=delete&id=<?php echo $cmts[$i]->Id_Comment;?>">Delete</a>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/danh_sach_chuong.css">
    <title>Danh sach chuong</title>
</head>
<body>
    <div class="danhsach">
        <h3>Danh sach chuong</h3>
        <table border="1px">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ten truyen</th>
                    <th>Ten chuong</th>
                    <th>So chuong</th>
                    <th>Noi dung</th>

                </tr>
            </thead>
            <tbody>
            <?php
                $stt = 1;
                if (is_array($data) || is_object($data))
                    {
                        foreach ($data as $value){ ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $value['Id_Truyen']; ?></td>
                                <td><?php echo $value['Chuongten']; ?></td>
                                <td><?php echo $value['Chuongso']; ?></td>
                                <td><?php echo $value['Noidung']; ?></td>
                                <td>
                                    <a href="">Edit</a>
                                    <a href="">Delete</a>
                                </td>
                
                            </tr>
                            <?php
                            $stt++;
                        }
                    }
                    else // If $data was not an array, then this block is executed. 
                    {
                    echo "Unfortunately, an error occured.";
                    }
            ?>


            <!-- <?php
                echo "<pre>";
                print_r($data);
                ?> -->
            </tbody>
        </table>
    </div>
</body>
</html>
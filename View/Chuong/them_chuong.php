<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thêm chương</title>
    <style>
    * {
        box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }



    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

        .col-25,
        .col-75,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }
    a {
        background-color: #f1f1f1;
  color: black;

  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

 a:hover {
  background-color: #ddd;
  color: black;
}
    </style>
</head>

<body>
    <div>
       <a href="index.php?controller=chuong&action=list&idtruyen=<?= $idtruyen?>">&laquo;Quay lại</a>
        <h3>Thêm chương</h3>
        <form action=" " method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Chương số</td>
                    <td><input type="text" name="chuongso" placeholder="Chương số" /></td>
                </tr>
                <tr>
                    <td>Tiêu đề</td>
                    <td><input type="text" name="chuongten" placeholder="Chương tên" /></td>
                </tr>
                <tr>
                    <td>Nội dung</td>
                    <td><input type="text" name="noidung" placeholder="Nội dung" /></td>
                </tr>
                <td><input type="submit" name="themchuong" value="Thêm chương"></td>
                </tr>
            </table>
        </form>

    </div>
</body>

</html>
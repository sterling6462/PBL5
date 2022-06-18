<!DOCTYPE html>
<html lang="en">
          <head>
                    <meta charset="UTF-8">
                    <title>Sửa chương</title>
                    <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
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
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
          </head>
          <body>
                    <div >
                               <h3>Edit chương</h3>
                              <form action=" " method="POST" enctype="multipart/form-data">
                                        <table>
                                                    <tr>
                                                            <td>Chương số</td>
                                                            <td><input type="text" name="chuongso" placeholder="Chương số" value="<?= $chuong->Chuongso ?>"/></td>
                                                  </tr>
                                                  <tr>
                                                            <td>Tiêu đề</td>
                                                            <td><input type="text" name="chuongten" placeholder="Chương tên" value="<?= $chuong->Chuongten ?>"/></td>
                                                  </tr>
                                                  <tr>
                                                            <td>Nội dung</td>
                                                            <td><input type="text" name="noidung" placeholder="Nội dung" value="<?= $chuong->Noidung ?>" /></td>
                                                  </tr>
                                                            <td><input type="submit" name="capnhat" value="Cập nhật"></td>
                                                  </tr>
                                        </table>
                              </form>
                    
                    </div>
          </body>
</html>
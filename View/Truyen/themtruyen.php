<!DOCTYPE html>
<html lang="en">
          <head>
                    <meta charset="UTF-8">
                    <title>Đăng truyện</title>
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
                    <div class = "themtruyen">
                               <h3>Đăng truyện của bạn</h3>
                              <form action=" " method="POST" enctype="multipart/form-data">
                                        <table>
                                                  <tr>
                                                            <td>Tên truyện</td>
                                                            <td><input type="text" name="tentruyen" placeholder="Tên truyện"/></td>
                                                  </tr>
                                                  <tr>
                                                            <td>Loại truyện</td>
                                                            <td>
                                                                      <select name="loaitruyen">
                                                                                <option value="1">Thiếu nhi</option>
                                                                                <option value="2">Trinh thám</option>
                                                                                <option value="3">Tiểu thuyết</option>
                                                                                <option value="4">Kinh dị</option>
                                                                                <option value="5">Viễn tưởng</option>
                                                                                <option value="6">Tình cảm</option>
                                                                                <option value="7">Học đường</option>
                                                                                <option value="8">Hành động</option>
                                                                                <option value="9">Kiếm hiệp</option>
                                                                      </select>
                                                            </td>
                                                  </tr>
                                                  <tr>
                                                            <td>Tác giả</td>
                                                            <td><input type="text" name="tacgia" placeholder="Tác giả"/></td>
                                                  </tr>
                                                  <tr>
                                                            <td>Giới thiệu</td>
                                                            <td><textarea name="gioithieu" placeholder="Mô tả truyện" cols="50" rows="10"></textarea></td>
                                                  </tr>
                                                  <tr>
                                                            <td>Ảnh đại diện</td>
                                                            <td><input name="hinhdaidien" id="hinhdaidien" type="text" placeholder="Paste link ảnh trong gg drive của bạn"/></td>
                                                  </tr>
                                                  <tr>
                                                            <td></td>
                                                            
                                                            <td><input type="submit" name="dangtruyen" value="Đăng truyện"></td>
                                                  </tr>
                                        </table>
                              </form>
                    
                    </div>
          </body>
</html>
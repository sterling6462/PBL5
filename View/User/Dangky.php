<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="CSS/dangky.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/ef8e692f4f.js" crossorigin="anonymous"></script>
    <title>Đăng ký</title>
</head>

<body>
    <div class="container sign-up-mode signup">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-up-form" method="POST">
                    <h2 class="title">ĐĂNG KÝ</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-calendar-days"></i>
                        <input type="date" placeholder="Ngay sinh" name="date" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-location-dot"></i>
                        <input type="text" placeholder="Dia chi" name="diachi" />
                    </div>
                    <div class="select-field">
                        <select name="gioitinh">
                            <option value=0>Nam</option>
                            <option value=1>Nu</option>
                        </select>
                    </div>
                    <div class="select-field">
                        <select name="quyen">
                            <option value="1">Doc gia</option>
                            <option value="2">Tac gia</option>
                            <option value="3">QTV</option>
                        </select>
                    </div>
                    <div>
                        <input type="checkbox" id="checkbox-1-1" class="custom-checkbox" />
                        <label for="checkbox-1-1">Lưu tên đăng nhập</label>
                    </div>
                    <button class="btn" name="signup">ĐĂNG KÝ</button>
                    <p class="social-text">Hoặc đăng ký bằng</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
            <div class="panels-container">
                <div class="panel right-panel">
                    <div class="content">
                        <h3>Bạn đã có tài khoản?</h3>
                        <p>
                            Đăng nhập ngay để lưu lại lịch sử đọc truyện cũng như có thể theo dõi, bình luận truyện yêu
                            thích nhé
                        </p>
                        <button class="btn transparent" id="sign-in-btn">
                            Đăng nhập
                        </button>
                    </div>
                    <img src="Assets/img/register.svg" class="image" alt="" />
                </div>
            </div>
        </div>
    </div>
    <script src="./SignIn_SignUp.js"></script>
</body>



</html>
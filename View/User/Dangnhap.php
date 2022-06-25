<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="CSS/dangnhap.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Đăng nhập</title>
</head>

<body>
    <div class="container signin">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form" method="POST">
                    <h2 class="title">ĐĂNG NHẬP</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" class="text" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" class="text" name="password" />
                    </div>
                    <button value="ĐĂNG NHẬP" class="signup btn solid" name="signin">ĐĂNG NHẬP</button>
                    <a href="#">Quên mật khẩu?</a>
                    <p class="social-text">Hoặc đăng nhập bằng</p>
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
                    </div>
                </form>
            </div>
            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Chưa có tài khoản ?</h3>
                        <p>
                            Đăng nhập ngay để lưu lại lịch sử đọc truyện cũng như có thể theo dõi, bình luận truyện yêu
                            thích nhé
                        </p>
                        <button class="btn transparent" id="sign-up-btn">
                            Đăng kí
                        </button>
                    </div>
                    <img src="Assets/img/log.svg" class="image" alt="" />
                </div>
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
<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="CSS/Dangnhap.css">

</head>
<div class="login">
    <h2 class="active"> sign in </h2>

    <h2 class="nonactive"> sign up </h2>
    <form method="POST">



        <input type="text" class="text" name="username">
        <span>username</span>

        <br>

        <br>

        <input type="password" class="text" name="password">
        <span>password</span>
        <br>

        <input type="checkbox" id="checkbox-1-1" class="custom-checkbox" />
        <label for="checkbox-1-1">Keep me Signed in</label>

        <button class="signin" name="signin">
            Sign In
        </button>
        <button class="signup" name="signup">
            Sign Up
        </button>


        <hr>

        <a href="#">Forgot Password?</a>
    </form>

</div>


</html>

<html>
  <head>
  <title>login</title>
  

<link rel="stylesheet" type="text/css" href="assets/css/login.css"  />
<script src="js/login.js"></script>
</head>

<body>

    <div class="container">
        <div class="card card-container"style="background-color: white;">
           
            <img id="profile-img" class="profile-img-card" src="assets/images/profile-logo.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <p style="color: red; text-align: center;"><?php echo @$_GET['login_error']; ?></p>
            <form class="form-signin" action="login_process.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="userId" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password" >
                <!-- <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> -->
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit" value="submit">Login</button>
            </form>
            <a href="forgetpassword.php" class="forgot-password">
                Forgot the password?
            </a>
            <br>
            <br> 
            <a class="signup-button">
                if you do not have account click 
            </a>
             <a href="signup.php" class="forgot-password">
                Signup
            </a>
        </div>
    </div>
 </body>
</html>
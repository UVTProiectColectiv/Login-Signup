<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <video autoplay muted loop id="myVideo">
      <source src="Blue_Sky_and_Clouds_Timelapse_0892__Videvo.mov" type="video/mp4">
    </video>

    <div class="hero">
      <div class="form-box"> 

          <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Log In</button>
            <button type="button" class="toggle-btn" onclick="signin()">Sign In</button>
          </div>

          <div class="social-icons">
            <a href="https://www.facebook.com/">
            <img src="fb.png"></a>
            <a href="https://twitter.com/twitter">
            <img src="tw.png"></a>
            <a href="https://www.google.com/webhp?hl=ro&sa=X&ved=0ahUKEwjS6uCEgOfvAhWJyKQKHSaIAdIQPAgI">
            <img src="gp.png"></a>
          </div> 

          <form id="login" class="input-group" method="post" action="index.php">
          <?php include('errors2.php'); ?>
            <div>
            <input type="text" name="username" class="input-field"  placeholder="Username" required >
            </div>
            <div>
            <input type="text" name="password" class="input-field" placeholder="Enter password" required>
            </div>
            <div>
            <br>
            <button type="submit" class="submit-btn" name="login_user">Log in</button>
            </div>
          </form>

          <form id="signin" class="input-group" action="index.php" method="post">
          <div id="err_sign">
            <?php include('errors.php'); ?>
          </div>
            <div>
            <input type="text" class="input-field" name="username" placeholder="Username" required >
            </div>
            <div>
            <input type="email" class="input-field" name="email" placeholder="Email" required  value="<?php echo $email; ?>">
            </div>
            <div>
            <input type="password" class="input-field" name="password_1" placeholder="Enter password" required >
            </div>
            <div>
            <input type="password" class="input-field" name="password_2" placeholder="Confirm password" required >
            </div>
            <div>
            <br>
            <button type="submit" class="submit-btn" name="reg_user">Sign In</button>
            </div>
          </form>
      </div>
      
      </div>

      <script>
        var x = document.getElementById("login");
        var y = document.getElementById("signin");
        var z = document.getElementById("btn");
        function signin(){
          x.style.left = "-400px";
          y.style.left = "50px";
          z.style.left = "110px";
        }
        function login(){
          x.style.left = "50px";
          y.style.left = "450px";
          z.style.left = "0px";
        }
      </script>
  </body>
</html>

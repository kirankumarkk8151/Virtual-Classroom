<?php 
require_once ("include/initialize.php");   
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}
?> 
  

<style type="text/css">
  body {
    background-color: #fff;
  }
</style>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet"> 
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">  
 
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/main.css">
<!--===============================================================================================-->
</head>
<body>

  
  <div class="limiter"><h1 style="color:white;text-align:center;background-color:green;border-radius:10px;font-family:times new roman;font-size:50px">UCST VIRTUAL CLASSROOM</h1>
    <div class="container-login100">
           <?php check_message(); ?>
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt >
          <img src="images/logo.png" style="width: 70%;object-fit: center;height: 70%" alt="IMG">
        </div>
         
        <form class="login100-form validate-form" action="" method="POST"> 
          <span class="login100-form-title">
            Student Login 
          </span>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="user_email" placeholder="Username">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="user_pass" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="btnLogin">
              Login
            </button>
          </div>

      <!--     <div class="text-center p-t-12">
            <span class="txt1">
              Forgot
            </span>
            <a class="txt2" href="#">
              Username / Password?
            </a>
          </div> -->

          <div class="text-center p-t-136">
            <a class="txt2" href="register.php">
              Create your Account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a><br>
			<a class="txt2" href="admin/login.php">
              Login as Administrator
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  

  <?php 

if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect (web_root."login.php");
         
    } else {  
      //it creates a new objects of member
        $student = new Student();
        //make use of the static function, and we passed to parameters
        $res = $student::studentAuthentication($email, $h_upass);
        if ($res==true) {  
             redirect(web_root."index.php"); 

          echo $_SESSION['StudentID'];
        }else{
          message("Account does not exist! Please contact Administrator.", "error");
          redirect (web_root."login.php");
        }
   }
 } 
 ?> 

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/jquery.js"></script>
<script src="<?php echo web_root; ?>js/bootstrap.min.js"></script> 
<!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>
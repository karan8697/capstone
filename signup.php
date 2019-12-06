<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<header>

		<nav class="nav  navigbar navbar-fixed-top" data-spy="affix" >
  			<ul class="list-inline" >
			    
			    <div class="col-sm-10"><h1 style="color:#FFFFFF;margin-left: 10px;">IELTS E-Learning</h1></div>
			    <li class="col-sm-1 links"><a class="link-color" href="login.php">Login</a></li>
			    <li class="col-sm-1 links"><a class="link-color" href="signup.php">Sign-Up</a></li>
  			</ul>
		</nav>
	</header>
	<div class="col-sm-12" style="height: 80px;"></div>
</head>
<body style="background: url('images/background.jpg') no-repeat  ; background-size: cover;">

	<div class="col-sm-6 col-sm-offset-3" style="background-color:;height: 900px;" >

		<div class="col-sm-12 container-fluid form-header">
      		<h2 style="margin-left: 25px;margin-top: 20px;">Enter Details To Register</h2>
    	</div>
		

		<form class="form-horizontal myform" method="POST" enctype="multipart/form-data" style="margin-top:150px;height: 630px; border:1px solid #3AAFA9;border-radius:0px 0px 8px 8px;background-color: lightblue;"" >

        <div class="form-group" style="padding-top: 30px;">
          <div class="col-sm-3" style="background-color: #3AAFA9;border:1px solid #3AAFA9;color:#FFFFFF;border-radius: 4px ;margin-left: 45px;"><h4>Enter First Name</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="fname">
          </div>
        </div>

        <div class="form-group" style="padding-top: 30px;">
          <div class="col-sm-3" style="background-color: #3AAFA9;border:1px solid #3AAFA9;color:#FFFFFF;border-radius: 4px ;margin-left: 45px;"><h4>Enter Last Name</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="lname">
          </div>
        </div>


        <div class="form-group" style="padding-top: 30px;">
          <div class="col-sm-3" style="background-color: #3AAFA9;border:1px solid #3AAFA9;color:#FFFFFF;border-radius: 4px ;margin-left: 45px;"><h4>Enter Email</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="email">
          </div>
        </div>

        
        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #3AAFA9;border:1px solid #3AAFA9;color:#FFFFFF;border-radius: 4px ;margin-left: 45px;"><h4>Enter Password</h4>
          </div>
          <div class="col-sm-7">
            <input type="password" class="form-control" name="password">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #3AAFA9;border:1px solid #3AAFA9;color:#FFFFFF;border-radius: 4px ;margin-left: 45px;"><h4>Confirm Password</h4>
          </div>
          <div class="col-sm-7">
            <input type="password" class="form-control" name="cpassword">
          </div>
        </div>
        

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="margin-left: 300px;">
            <button  name="submit" class=" btn-lg btn-block" style="background-color: #3AAFA9;border:1px solid #3AAFA9;color:#FFFFFF;" ><i style= "font-size: 24px;" class="fa fa-user-plus" aria-hidden="true"></i> Sign-Up
            </button>
          </div>
        </div>

        <h1 style="color: #3AAFA9;font-size: 45px;margin-left: 266px;"><i class="fa fa-facebook-official" aria-hidden="true"></i> <i class="fa fa-instagram" aria-hidden="true"></i> <i class="fa fa-twitter-square" aria-hidden="true"></i> <i class="fa fa-linkedin-square" aria-hidden="true"></i></h1>

    </form>
	</div>
  <?php
    if(isset($_POST['submit']))
    {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email=$_POST['email'];
      $password=md5($_POST['password']);
      $cpassword=md5($_POST['cpassword']);
      $type='user';
      $fnameError='';
      $lnameError='';
      $emailError='';
      $passwordError='';
      $passwordMismatchError='';
      if(empty($fname) && !preg_match("/^([a-zA-Z']+)$/","$fname"))
      {
        $fnameError=" Fill First Name or invalid characters ";
      }
      else if(empty($lname) && !preg_match("/^([a-zA-Z']+)$/","$lname"))
      {
        $lnameError=" Fill Last Name or invalid characters ";
      }
      else if(empty($email) && !filter_var($email,FILTER_VALIDATE_EMAIL))
      {
        $emailError=" Incorrect email ";
      }
      else if(empty($password) && !preg_match("/^[a-zA-Z]\w{0,6}$/","$password"))
      {
        $passwordError=" Choose a A-Z,a-z,special characters,0-9 ";
      }
      else if($password!=$cpassword)
      {
        $passwordMismatchError=" Passwords Did Not Match ";
      }

      if($fnameError=='' && $lnameError=='' && $emailError=='' && $passwordError=='' && $passwordMismatchError=='')
      {
        $sql="INSERT INTO users(`fname`,`lname`,`email`,`password`,`type`) values ('$fname','$lname','$email','$password','$type')";
        if(mysqli_query($conn,$sql))
        {
          ?>
          <script >
            alert("Registered, Login To Continue");
            window.location.href="login.php "
          </script>
          <?php
          // header('location:login.php');
        }
        else 
        { 
            echo "Error Adding Data".mysqli_error($conn);
        }
      }
      else
      {
        $message=$fnameError.$lnameError.$emailError.$passwordError.$passwordMismatchError;
        ?>
          <script type="text/javascript">alert("<?php echo "$message" ?>")</script>
        <?php
      }
    }
  ?>
</body>
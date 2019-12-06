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
	<div class="col-sm-6 col-sm-offset-3" style="position: fixed;background-color:; height: 600px;margin-top:80px;">

		<div class="col-sm-12 container-fluid form-header">
      		<h2 style="margin-left: 25px;margin-top: 20px;">Enter Details To Login</h2>
    	</div>


		<form class="form-horizontal myform" method="POST" enctype="multipart/form-data" style="margin-top:150px;border:1px solid #3AAFA9;border-radius:0px 0px 8px 8px;background-color: lightblue;" >
        <div class="form-group" style="padding-top: 30px;">
          <div class="col-sm-3" style="background-color: #3AAFA9;border:1px solid #3AAFA9;color:#FFFFFF;border-radius: 4px ;margin-left: 45px;"><h4>Enter Email</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="email">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #3AAFA9;border:1px solid #3AAFA9;color:#FFFFFF;border-radius: 4px ;margin-left: 45px;"><h4>Enter password</h4>
          </div>
          <div class="col-sm-7">
            <input type="password" class="form-control" name="password">
          </div>
        </div>

        

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="margin-left: 300px;">
            <button  name="submit" class=" btn-lg btn-block" style="background-color: #3AAFA9;border:1px solid #3AAFA9;color:#FFFFFF;" ><i style= "font-size: 24px;" class="fa fa-sign-in" aria-hidden="true"></i> Login
            </button>
          </div>
        </div>

        <h1 style="color: #3AAFA9;font-size: 45px;margin-left: 266px;"><i class="fa fa-facebook-official" aria-hidden="true"></i> <i class="fa fa-instagram" aria-hidden="true"></i> <i class="fa fa-twitter-square" aria-hidden="true"></i> <i class="fa fa-linkedin-square" aria-hidden="true"></i></h1>

    	</form>







	</div>
<?php
  if(isset($_POST['submit']))
    {
      $email=$_POST['email'];
      $password=md5($_POST['password']);
      if(empty($email)&& filter_var($email,FILTER_VALIDATE_EMAIL))
      {
            $emailError ="Email is empty or not  ";
      }
      $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
      $result  = mysqli_query($conn,$query);
      print_r($result);
      if(mysqli_num_rows($result)>0)
      {
        session_start();
        $sql = mysqli_fetch_assoc($result);
          $_SESSION['fname'] = $sql['fname'];
          $_SESSION['lname'] = $sql['lname'];
          $_SESSION['type'] = $sql['type'];
          $_SESSION['id'] = $sql['user_id'];
          if($_SESSION['type']=='admin')
          {
              header('location:admin-dashboard.php');  
          }
          else
          {
              header('location:client-dashboard.php');  
          }
      
      }

      else
      {
          $_SESSION['error'] = $error;
          ?><script>alert("User Does Not Exist")</script><?php
      }
  }
?>
</body>
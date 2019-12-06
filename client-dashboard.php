<?php
	include 'config.php';
	session_start();
	$user_id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<header>
		<div class="col-sm-12 test-header" >
			<div class="col-sm-3"><h2><b>IELTS E-Learning</b></h2></div>
			<div class="col-sm-5"style="font-size: 36px;">
				
			</div>
			<div class="col-sm-4">
				<button type="button" class="btn btn-dark btn-lg" style="background-color: #303030;float: right;margin-top: 17px;color: #3AAFA9;" onclick="window.location.href='/capstone/logout.php'">Logout</button>
			</div>			
		</div>
	</header>
</head>
<body>
	<div class="col-sm-12 container-fluid" style="height: 80px;"></div>
	<div class="col-sm-12 container-fluid" style="height: 577px; background-color: #FFFFFF;">
		<div class="col-sm-2" style="background-color: #FFFFFF;height:577px;border-right:2px solid #3AAFA9;">
			<button class="sidebar-btn btn btn-block" onclick="window.location.href='/capstone/client-dashboard.php'"><b><i class="fa fa-home" aria-hidden="true"></i> Home</b></button>
			<button class="sidebar-btn btn btn-block" onclick="window.location.href='/capstone/tests.php'"><b><i class="fa fa-file-text" aria-hidden="true"></i> Tests</b></button>
			<button class="sidebar-btn btn btn-block" onclick="window.location.href='/capstone/results.php'"><b><i class="fa fa-graduation-cap" aria-hidden="true"></i> Results</b></button>
			<button class="sidebar-btn btn btn-block" onclick="window.location.href='/capstone/tips.php'"><b><i class="fa fa-bullseye" aria-hidden="true"></i> Tips</b></button>
			
		</div>
		<div class="col-sm-10" style="background-color: #FFFFFF;height:577px;overflow-y: scroll;">

		<?php
			$sql="SELECT * FROM users WHERE user_id='$user_id' LIMIT 1";
			if(mysqli_query($conn,$sql))
			{
				echo "";
			}
			else 
			{
				
					echo "Error Adding Data".mysqli_error($conn);
			}
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result);

		?>
		<h1 style="color:#3AAFA9"><b>Welcome, <?php echo $row["fname"] ?></b></h1>	


		<h2>Website Overview</h2>
		<h4><b>1.</b> Left hand side contain your navigation button where you can attempt test, check result and get tips</h4>
		<h4><b>2.</b> On clicking Tests button you will see your unattempted test and by clicking on attempt buuton next to it it will take you to the test</h4>	
		<h4><b>3.</b> Results display the band and feedback of your attempted tests. Remember the writing task may take upto 1 week to evaluate as it is done by invigilator. so keep calm and regularly check your result.</h4>
		<h4><b>4.</b> Tips will help you to attain better score and get an overall good band score. </h4>
		<h4><b>5.</b> On top navigation bar you will see a logout button which will take you back to login page.</h4>


		<h2>Test Instructions</h2>
		<h4><b>1.</b> The test is divided into 3 sections namely, Listening, Reading And Writing</h4>
		<h4><b>2.</b> Listening will provide you with video with question and conversations which you will listen and complete the test to get score. The maximum score is 40.The time allocated will be 40 minutes. The audio will onlu be played once and you have to attempt along with listening. Once completed move to next section by clicking on submit button</h4>	
		<h4><b>3.</b> Reading section has 3 subsection with different kind of question in each. The maximum marks is 40 and time allocated will be 60 minutes. read from each section's passage and try to answer the questions. Move to final section once completed.</h4>
		<h4><b>4.</b> Writing section contains 2 subsections once is a graph of weightage 3 bands and another a essay of 6 bands. The Words acceptance for task 1 is 150-180 and for task 2 is 250-280. try to complete it in desire words. </h4>
		<h4><b>5.</b> Apart form writing module. try to answer in CAPITAL letters. Although care is taken to remove any discrepency but still make sure to attempt wisely</h4>
		<h4><b>6.</b> Just like in actual IELTS exam the test can be attempted only once and result will be given after the writng module is evaluated by the invigilator.</h4>
		<h4><b>7.</b> The reading and Listening module are self evaluated by owr website and is successfully submitted candidate will receive and alert. So sit tight AND GOOD LUCK !!</h4>
		</div>
	</div>
	<div class="col-sm-12 container-fluid the-footer">
		
	</div>
</body>
</html>
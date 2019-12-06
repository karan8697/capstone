<?php
	include 'config.php';
	$test_id=$_GET['test_id'];
	$user_id=$_GET['user_id'];
	// $test_id=10001;
	// $user_id=2;
?>
<?php
	$sql="select * from writingpending where test_id='$test_id' AND user_id='$user_id'";
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
				<button type="button" class="btn btn-dark btn-lg" style="background-color: #303030;float: right;margin-top: 17px;color: #3AAFA9;" onclick="window.location.href='/capstone/login.php'">Logout</button>
			</div>			
		</div>
	</header>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<div class="col-sm-12">
		<div class="col-sm-12 writing-test-background" style="margin-top: 100px;">
			<div class="col-sm-5  writing-test-question container-fluid">
				<h3 style="margin-left: 10px;"><b>Task 1 Question</b></h3>
				<div class="col-sm-11 task-1-picture" style="height: 400px;margin-left: 25px;  background: url('images/<?php echo $row["task1_question"] ?>') no-repeat center center ; background-size: cover;"></div>
			</div>
			<div class="col-sm-6  writing-test-answer container-fluid">
				<div class="col-sm-12 writing-response">
					<h2>Student Response</h2>
					<h5 style="overflow-wrap: break-word;"><?php echo $row["task_1"] ?></h5>
				</div>
				
			</div>
			<div class="col-sm-1  writing-test-question container-fluid">
				<h3 style="margin-left: 10px;"><b>Band</b></h3>
				<select class="form-control" name="band1">
			      	<option>0</option>
			      	<option>0.5</option>
			      	<option>1</option>
			      	<option>1.5</option>
			      	<option>2</option>
			      	<option>2.5</option>
			      	<option>3</option>
			    </select>
			</div>
		</div>
	</div>


	<div class="col-sm-12">
		<div class="col-sm-12 writing-test-background" style="margin-top: 100px;">
			<div class="col-sm-5  writing-test-question container-fluid">
				<h3 style="margin-left: 10px;"><b>Task 2 Question</b></h3>
				<h4 style="overflow-wrap: break-word;margin-left: 20px;"><?php echo $row["task2_question"] ?></h4>
			</div>
			<div class="col-sm-6  writing-test-answer container-fluid">
				<div class="col-sm-12 writing-response">
					<h2>Student Response</h2>
					<h5 style="overflow-wrap: break-word;"><?php echo $row["task_2"] ?></h5>
				</div>
				
			</div>
			<div class="col-sm-1  writing-test-question container-fluid">
				<h3 style="margin-left: 10px;"><b>Band</b></h3>
				<select class="form-control" name="band2">
			      	<option>0</option>
			      	<option>0.5</option>
			      	<option>1</option>
			      	<option>1.5</option>
			      	<option>2</option>
			      	<option>2.5</option>
			      	<option>3</option>
			      	<option>3.5</option>
			      	<option>4</option>
			      	<option>4.5</option>
			      	<option>5</option>
			      	<option>5.5</option>
			      	<option>6</option>
			    </select>
			</div>
		</div>
		
	</div>
	<div class="col-sm-12 " style="margin-top: 20px;">
		<div class="col-sm-6 ">

			<textarea  class="col-sm-12 "name="feedback" style="border: 2px solid #3aafa9;border-radius: 8px;height: 250px;"
			placeholder="Enter Feedback For Student"></textarea>
		</div>
		<div class="col-sm-6">

			<button type="submit" class="btn btn-info  btn-lg upload-submit" style="background-color:  #3AAFA9;
					border:2px solid  #3AAFA9; color:#333;margin-top: 20px; margin-left: 25px;" name="submit"><b>Evaluate</b>
			</button>
		</div>
	</div>
</form>
<?php
	if(isset($_POST['submit']))
	{
		$band1=$_POST['band1'];
		$band2=$_POST['band2'];
		$feedback=$_POST['feedback'];
		$totalband=$band1+$band2;

		$sql="update result set writing_score='$totalband',writing_feedback='$feedback' where test_id='$test_id' AND user_id='$user_id';";
		
		if(mysqli_query($conn,$sql))
		{
			?>
			<script >
				alert("Result Updated");
				window.location.href="remove-pending.php?test_id=<?php echo $row["test_id"] ?>&user_id=<?php echo $row["user_id"] ?> "
			</script>
			<?php
		}
		else 
		{	
				echo "Error Adding Data".mysqli_error($conn);
		}
	}
?>
</body>
</html>
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
				<button type="button" class="btn btn-dark btn-lg" style="background-color: #303030;float: right;margin-top: 17px;color: #3AAFA9;" onclick="window.location.href='/capstone/login.php'">Logout</button>
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

			<table class="table table-striped" style="font-size: 20px;">
			    <thead>
			      	<tr>
			        	<th>Test Id</th>
			        	<th>Listening Score</th>
			        	<th>Reading Score</th>
			        	<th>Writing Score</th>
			        	<th>FeedBack</th>
			      	</tr>
			    </thead>
			    <tbody>
			      	<?php
					$sql="select * from result WHERE user_id='$user_id' AND listening_score!=0 AND writing_score!=0 AND reading_score!=0";
					if(mysqli_query($conn,$sql))
					{
						echo "";
					}
					else 
					{
						
							echo "Error Adding Data".mysqli_error($conn);
					}
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($result))
					{
						?>


			      	<tr>
			        	<td><?php echo $row["test_id"] ?></td>
			        	<td><?php echo $row["listening_score"] ?></td>
			        	<td><?php echo $row["reading_score"] ?></td>
			        	<td><?php echo $row["writing_score"] ?></td>
			        	<td style="overflow-y: scroll;"><?php echo $row["writing_feedback"] ?></td>
			      	</tr>
			      	<?php
					}
					?>




			   	</tbody>
			</table>
			
			


		</div>
	</div>
	<div class="col-sm-12 container-fluid the-footer">
		
	</div>
</body>
</html>
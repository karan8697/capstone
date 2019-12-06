<?php
	include 'config.php';
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
			<button class="sidebar-btn btn btn-block" onclick="window.location.href='/capstone/admin-dashboard.php'"><b><i class="fa fa-home" aria-hidden="true"></i> Home</b></button>
			<button class="sidebar-btn btn btn-block" onclick="window.location.href='/capstone/upload-test.php'"><b><i class="fa fa-pencil" aria-hidden="true"></i> Upload Test</b></button>
			<button class="sidebar-btn btn btn-block" onclick="window.location.href='/capstone/pending-result.php'"><b><i class="fa fa-book" aria-hidden="true"></i> Give Result</b></button>
			
		</div>
		<div class="col-sm-10" style="background-color: #FFFFFF;height:577px;overflow-y: scroll;">

			<table class="table table-striped" style="font-size: 20px;">
			    <thead>
			      	<tr>
			        	<th>Test Id</th>
			        	<th>User Id</th>
			        	<th>Action</th>
			      	</tr>
			    </thead>
			    <tbody>
			      	<?php
					$sql="select * from writingpending";
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
			        	<td><?php echo $row["user_id"] ?></td>
			        	<td><button class="btn btn-primary" onclick="window.location.href='/capstone/give-result.php?test_id=<?php echo $row["test_id"] ?>&user_id=<?php echo $row["user_id"] ?> '">Evaluate</button></td>
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
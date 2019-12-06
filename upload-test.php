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



			<form class="form-horizontal myform" method="POST" enctype="multipart/form-data" style="border:1px solid #3AAFA9;border-radius:8px;margin-top: 20px;" >

		        <div class="form-group" style="padding-top: 30px;">
		          <div class="col-sm-3" style="background-color: #3AAFA9;border:1px solid #3AAFA9;color:#FFFFFF;border-radius: 4px ;margin-left: 45px;"><h4>Enter Test Id</h4>
		          </div>
		          <div class="col-sm-3">
		            <input type="text" class="form-control" name="testid">
		          </div>
		          <div class="col-sm-3">
		        		<button type="submit" class="btn btn-info  btn-lg upload-submit" style="background-color:  #3AAFA9;
  					border:2px solid  #3AAFA9; color:#333; " name="submit"><b>Next</b>
  				</button>  	
		          </div>
		        </div>

		        
    		</form>



			<table class="table table-striped" style="font-size: 20px;">
			    <thead>
			      	<tr>
			        	<th>Existing Test Id</th>
			        	<th>Update </th>
			        	<th>Update </th>
			        	<th>Update </th>
			      	</tr>
			    </thead>
			    <tbody>
		    	<?php
					$sql="select * from tests";
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
			        	<td><button class="btn btn-primary" style="background-color: #3AAFA9;" onclick="window.location.href='/capstone/update-listening.php?test_id=<?php echo $row["test_id"] ?>'">Listening</button></td></td>
			        	<td><button class="btn btn-primary" style="background-color: #3AAFA9;" onclick="window.location.href='/capstone/update-reading.php?test_id=<?php echo $row["test_id"] ?>'">Reading</button></td></td>
			        	<td><button class="btn btn-primary" style="background-color: #3AAFA9;" onclick="window.location.href='/capstone/update-writing.php?test_id=<?php echo $row["test_id"] ?>'">Writing</button></td></td>
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
<?php
	if(isset($_POST['submit']))
    {
    	$test_id=$_POST['testid'];    
		$sql="select * from tests";
		if(mysqli_query($conn,$sql))
		{
			echo "";
		}
		else 
		{
			
				echo "Error Adding Data".mysqli_error($conn);
		}
		$result=mysqli_query($conn,$sql);
		$flag=0;
		while($row=mysqli_fetch_array($result))
		{
			if($row["test_id"]==$test_id)
			{
				$flag=$flag+1;
			}
		}
		if($flag==0)
		{
			$sql="insert into tests values ('$test_id')";
			if(mysqli_query($conn,$sql))
			{
				?>
				<script >
					alert("Test Id Generated");
					window.location.href="upload-listening.php?test_id=<?php echo $test_id ?>"
				</script>
				<?php
			}
			else 
			{	
					echo "Error Adding Data".mysqli_error($conn);
			}


		}
		else
		{
			?>
			<script >
				alert("Test Id Already Exist");
			</script>
			<?php
		}
    }
?>
</body>
</html>
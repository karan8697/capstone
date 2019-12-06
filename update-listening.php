<?php
	include 'config.php';
	$test_id=$_GET['test_id'];

	$sql="select * from listening where test_id='$test_id'";
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
	$uploaded_video=$row["video"];
	$uploaded_answer=$row["answer_listening"];
	$uploaded_answer=unserialize($uploaded_answer);


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
		<div class="col-sm-12 upload-header" >
			<div class="col-sm-4"><h2><b>IELTS E-Learning</b></h2></div>
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<button type="button" class="btn btn-dark btn-primary btn-lg" style="margin-top: 17px; float:right;margin-left: 20px;background-color: #3AAFA9;border:1px solid #3AAFA9;" onclick="window.location.href='/capstone/admin-dashboard.php'">Dashboard</button>
			</div>			
		</div>
	</header>
</head>
<body>
	<div style="height:100px"></div>
	<form method="post" enctype="multipart/form-data">


		<div class="col-sm-10 col-sm-offset-1 upload-listening-background-header">
		<h2>Listening Section</h2>
	</div>
	<div class="upload-listening-background col-sm-10 col-sm-offset-1" style="height: 2600px;">


		<div class="col-sm-10 col-sm-offset-1  container-fluid" style="height: 200px;overflow-y:none ;">
			<div class="col-sm-12 listening-passage-header container-fluid">
				<h3 style="margin-left: 10px;">Upload Video</h3>
			</div>
			<div class="col-sm-12 listening-question-box">
				<h3></h3>
				<!-- Blanks -->
				<div class="form-group ">
					<div class="col-sm-12">
 						<h3>Original Video: <b><?php echo $uploaded_video ?></b></h3>
 					</div>
 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;">Video</p>
 					</div>
 					<div class="col-sm-10">
 						<h2>Update Listening Key</h2>
 					</div>
				</div>

			</div>

		</div>
		<!-- Enter Video End -->


		<!-- Enter Answers SECTION 1-->
		<div class="col-sm-10 col-sm-offset-1  container-fluid">
			<div class="col-sm-12 listening-passage-header container-fluid">
				<h3 style="margin-left: 10px;">Section 1</h3>
			</div>
			<div class="col-sm-12 listening-question-box">
				<h3></h3>
				<!-- Blanks -->
				<?php
					$j=0;
					for($i=1;$i<=10;$i++)
					{
						?>
						<div class="col-sm-12" >
						<div class="form-group ">
	   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
	   	 					</div>
	   	 					<div class="col-sm-10">
	   	 						<input type="text" class="form-control" value="<?php echo $uploaded_answer[$j]?>" name= "listening_answer_<?php echo "$i"?>" >
	   	 					</div>
	  					</div>
						</div>
						<?php $j++;
					}
				?>

			</div>

		</div>
		<!-- Enter Answers End -->



		<!-- Enter Answers SECTION 2-->
		<div class="col-sm-10 col-sm-offset-1  container-fluid">
			<div class="col-sm-12 listening-passage-header container-fluid">
				<h3 style="margin-left: 10px;">Section 2</h3>
			</div>
			<div class="col-sm-12 listening-question-box">
				<h3></h3>
				<!-- Blanks -->
				<?php
					$j=10;
					for($i=11;$i<=20;$i++)
					{
						?>
						<div class="col-sm-12" >
						<div class="form-group ">
	   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
	   	 					</div>
	   	 					<div class="col-sm-10">
	   	 						<input type="text" class="form-control" value="<?php echo $uploaded_answer[$j]?>" name= "listening_answer_<?php echo "$i"?>" >
	   	 					</div>
	  					</div>
						</div>
						<?php $j++;
					}
				?>

			</div>

		</div>
		<!-- Enter Answers End -->


		<!-- Enter Answers SECTION 3-->
		<div class="col-sm-10 col-sm-offset-1  container-fluid">
			<div class="col-sm-12 listening-passage-header container-fluid">
				<h3 style="margin-left: 10px;">Section 3</h3>
			</div>
			<div class="col-sm-12 listening-question-box">
				<h3></h3>
				<!-- Blanks -->
				<?php
					$j=20;
					for($i=21;$i<=30;$i++)
					{
						?>
						<div class="col-sm-12" >
						<div class="form-group ">
	   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
	   	 					</div>
	   	 					<div class="col-sm-10">
	   	 						<input type="text" class="form-control" value="<?php echo $uploaded_answer[$j]?>" name= "listening_answer_<?php echo "$i"?>" >
	   	 					</div>
	  					</div>
						</div>
						<?php $j++;
					}
				?>

			</div>

		</div>
		<!-- Enter Answers End -->




		<!-- Enter Answers SECTION 4-->
		<div class="col-sm-10 col-sm-offset-1  container-fluid">
			<div class="col-sm-12 listening-passage-header container-fluid">
				<h3 style="margin-left: 10px;">Section 4</h3>
			</div>
			<div class="col-sm-12 listening-question-box">
				<h3></h3>
				<!-- Blanks -->
				<?php
					$j=30;
					for($i=31;$i<=40;$i++)
					{
						?>
						<div class="col-sm-12" >
						<div class="form-group ">
	   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
	   	 					</div>
	   	 					<div class="col-sm-10">
	   	 						<input type="text" class="form-control" value="<?php echo $uploaded_answer[$j]?>" name= "listening_answer_<?php echo "$i"?>" >
	   	 					</div>
	  					</div>
						</div>
						<?php $j++;
					}
				?>

			</div>

		</div>
		<!-- Enter Answers End -->
		<div class="col-sm-12">
			<button type="submit" class="btn btn-info  btn-lg upload-submit" style="background-color:  #3AAFA9;
  		border:2px solid  #3AAFA9; color:#333;margin-top: 20px; " name="submit"><b>Update</b></button>
	</div>
		
	</div>



	</form>
</body>
<?php
    if(isset($_POST['submit']))
    {
            $answer_listening=array($_POST['listening_answer_1'],$_POST['listening_answer_2'],$_POST['listening_answer_3'],$_POST['listening_answer_4'],$_POST['listening_answer_5'],$_POST['listening_answer_6'],$_POST['listening_answer_7'],$_POST['listening_answer_8'],$_POST['listening_answer_9'],$_POST['listening_answer_10'],$_POST['listening_answer_11'],$_POST['listening_answer_12'],$_POST['listening_answer_13'],$_POST['listening_answer_14'],$_POST['listening_answer_15'],$_POST['listening_answer_16'],$_POST['listening_answer_17'],$_POST['listening_answer_18'],$_POST['listening_answer_19'],$_POST['listening_answer_20'],$_POST['listening_answer_21'],$_POST['listening_answer_22'],$_POST['listening_answer_23'],$_POST['listening_answer_24'],$_POST['listening_answer_25'],$_POST['listening_answer_26'],$_POST['listening_answer_27'],$_POST['listening_answer_28'],$_POST['listening_answer_29'],$_POST['listening_answer_30'],$_POST['listening_answer_31'],$_POST['listening_answer_32'],$_POST['listening_answer_33'],$_POST['listening_answer_34'],$_POST['listening_answer_35'],$_POST['listening_answer_36'],$_POST['listening_answer_37'],$_POST['listening_answer_38'],$_POST['listening_answer_39'],$_POST['listening_answer_40']);

        $answer_listening=serialize($answer_listening);

        {
        	$sql="update listening set answer_listening='$answer_listening' where test_id='$test_id'";
			if(mysqli_query($conn,$sql))
			{
				?>
				<script >
					alert("Listening Module Updated");
					window.location.href="admin-dashboard.php "
				</script>
				<?php

			}
			else 
			{	
					echo "Error Adding Data".mysqli_error($conn);
			}
        	//move_uploaded_file($_FILES["image"]["tmp_name"],  $target_dir.''.$image);

        }

    }
?>
</html>

<!--  -->
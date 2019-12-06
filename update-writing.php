<?php
	include 'config.php';
  $test_id=$_GET['test_id'];

  $sql="select * from writing where test_id='$test_id'";
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
  $uploaded_task_1=$row["task_1"];
  $uploaded_task_2=$row["task_2"];
  $uploaded_image=$row["image"];
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
		<div class="col-sm-10 col-sm-offset-1 upload-writing-background-header">
			<h2>Questions</h2>
		</div>
		<div class="col-sm-offset-1 upload-writing-background col-sm-10">
			
			<div class="form-group col-sm-12" style="margin-top: 20px;">
   	 			<div class="col-sm-3" style="background-color: #3AAFA9;border:1px solid #3AAFA9;color:#222;border-radius: 4px ;margin-left: 25px;"><h4><b>Enter task 1 question</b></h4>
   	 			</div>
   	 			<div class="col-sm-7">
   	 				<textarea style="height:100px;" class="form-control txtarea" name="writing_task_1"><?php echo $uploaded_task_1 ?></textarea>
   	 			</div>
  			</div>


  			<div class="form-group col-sm-12">
   	 			<div class="col-sm-3" style="background-color:#3AAFA9 ;border:1px solid #3AAFA9;color:#222;border-radius: 4px ;margin-left: 25px;"><h4><b>Upload task 1 image</b></h4></div>
   	 			<div class="col-sm-7">
            <div><b>Current Image</b>
              <img style="height: 100px;width:200px;border-radius: 8px;margin: 10px 0px" 
              src="images/<?php echo $uploaded_image?>">  
          </div>
   	 				<input type="file" class="form-control" name="image" value="<?php echo $uploaded_image ?>">
   	 			</div>
  			</div>


  			<div class="form-group col-sm-12">
   	 			<div class="col-sm-3" style="background-color: #3AAFA9;border:1px solid #3AAFA9;color:#222;border-radius: 4px ;margin-left: 25px;"><h4><b>Enter task 2 question</b></h4>
   	 			</div>
   	 			<div class="col-sm-7">
   	 				<textarea style="height:100px;" class="form-control txtarea" name="writing_task_2"><?php echo $uploaded_task_2 ?></textarea>
   	 			</div>
  			</div>


  			<div class="col-sm-11 col-sm-offset-1">
				<button type="submit" class="btn btn-info  btn-lg upload-submit" style="background-color:  #3AAFA9;
  				border:2px solid  #3AAFA9; color:#333;margin-top: 20px; " name="submit"><b>Update</b></button>
			</div>

		
		</div>
	</form>
<?php
	if(isset($_POST['submit']))
    {
    	$question_1=$_POST['writing_task_1'];
    	$question_2=$_POST['writing_task_2'];
	   	$image=$_FILES['image']['name'];
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
        $target_dir = "images/";
         if ($_FILES["image"]["size"] > 2000000) 
        {
            ?>
            <script>
                alert( "Sorry, your file is too large.")
            </script>
            <?php
            $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) 
        {
            ?>
            <script>
                alert( "Sorry, only JPG, JPEG, PNG & GIF files are allowed.")
            </script>
            <?php
            $uploadOk = 0;
        }
        if ($uploadOk == 0) 
        {
             ?>
            <script>
                alert( "Sorry, your file was not uploaded.")
            </script>
            <?php
        }
        else
        {
        	$sql="update writing set task_1='$question_1',task_2='$question_2',image='$image' where test_id='$test_id'";
			if(mysqli_query($conn,$sql))
			{
				?>
				<script >
					alert("Writing Module Updated");
          window.location.href="admin-dashboard.php "
				</script>
				<?php
        // header('location:admin-dashboard.php');
			}
			else 
			{	
					echo "Error Adding Data".mysqli_error($conn);
			}
        	move_uploaded_file($_FILES["image"]["tmp_name"],  $target_dir.''.$image);

        }




    }
?>
</body>
</html>
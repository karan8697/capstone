<?php
	include 'config.php';
	session_start();
	$test_id=$_GET['test_id'];
	// $test_id=10001;
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
				<div class="col-sm-6" style="text-align: right; margin-top: 15px;"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
				<div class="col-sm-6" style="margin-top: 15px;"><b><p id="timer"></p><b></div>
			</div>
			<div class="col-sm-4">
				<button type="button" class="btn btn-dark btn-danger btn-lg" style="margin-top: 17px; float:right;margin-left: 20px;" onclick="window.location.href='/capstone/client-dashboard.php'">Submit</button>
				<button type="button" class="btn btn-dark btn-primary" style="margin-top: 24px; float:right;background-color: #202020 ;color: #FFFFFF;border-radius: 0px 8px 8px 0px;" onclick="func1()">Dark</button>
				<button type="button" class="btn btn-dark btn-primary" style="margin-top: 24px; float:right;background-color: #FFFFFF;border:1px solid black;color:black;border-radius: 8px 0px 0px 8px;" onclick="func2()">Light</button>

			</div>				
		</div>
	</header>
</head>
<body id="div-background">
	<div class="col-sm-12" style="height: 100px;"></div>
	<div class="col-sm-12 reading-test-background" style="margin-top: 0px;height:600px; border-radius: 8px 8px 8px 8px">
		
		<div class="col-sm-8 reading-test-question container-fluid" style="height:500px;margin-top: 20px;">
			<!-- Question -->
			<div class="col-sm-12" style="overflow:scroll;height: 576px;">
				<div class="col-sm-12" style=";height:70px; background-color: #3AAFA9;border-radius: 8px 8px 0px 0px;border:2px solid #3AAFA9">
					<h2>Section 1</h2>
				</div>
				<div class="col-sm-12" style=";height:490px;border-radius: 0px 0px 8px 8px;border:2px solid #3AAFA9;overflow-y: scroll; overflow-x: hidden;">
					
					<h3><b>Read the passage and provide answer in the adjacent box</b></h3>

					<?php
					$sql="select * from reading where test_id='$test_id' LIMIT 1;";
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
					<textarea class="reading-passage-question" style="margin-top: 10px; border:1px solid white;" readonly><?php echo $row["passage_1"] ;?></textarea>
					<?php 
						 $question=unserialize($row["reading_questions"]);
						 ?><h3><b>Fill in the blanks</b></h3>
						 <?php
						 for($i=0,$j=1;$i<8;$i++)
						 {
						 	?>
								<h4><?php echo " <b>$j</b> "."$question[$i]"."<br>";$j=$j+1;?></h4>
							<?php 
						 	
						 }
						 ?>
						 	<h3><b>Multiple Choice Questions</b></h3>
						 	<h4><?php echo " <b>9</b> "."$question[8]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>A</b> "."$question[9]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>B</b> "."$question[10]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>C</b> "."$question[11]"."<br>";?></h4>

						 	<h4><?php echo " <b>10</b> "."$question[8]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>A</b> "."$question[12]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>B</b> "."$question[13]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>C</b> "."$question[14]"."<br>";?></h4>

						 	<h4><?php echo " <b>11</b> "."$question[8]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>A</b> "."$question[15]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>B</b> "."$question[16]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>C</b> "."$question[17]"."<br>";?></h4>

						 	<h4><?php echo " <b>12</b> "."$question[8]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>A</b> "."$question[18]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>B</b> "."$question[19]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>C</b> "."$question[20]"."<br>";?></h4>

						 	<h4><?php echo " <b>13</b> "."$question[8]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>A</b> "."$question[21]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>B</b> "."$question[22]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>C</b> "."$question[23]"."<br>";?></h4>

						 <?php
					?>

				</div>

							





				<div class="col-sm-12" style=";height:70px; background-color: #3AAFA9;border-radius: 8px 8px 0px 0px;border:2px solid #3AAFA9; margin-top: 20px;">
					<h2>Section 2</h2>
				</div>
				<div class="col-sm-12" style=";height:490px;border-radius: 0px 0px 8px 8px;border:2px solid #3AAFA9;overflow-y: scroll;overflow-x: hidden;">
					


					<h3><b>Read the passage and provide answer in the adjacent box</b></h3>

					<?php
					$sql="select * from reading where test_id='$test_id' LIMIT 1;";
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
					<textarea style="margin-top: 10px; border:1px solid white;" class="reading-passage-question" style="margin-top: 10px; border:1px solid white;" readonly><?php echo $row["passage_2"] ;?></textarea>
					<?php 
						 $question=unserialize($row["reading_questions"]);
						 ?>
						 	<h3><b>True, Flase Or Not Given</b></h3>
						 <?php
						 for($i=24,$j=14;$i<31;$i++)
						 {
						 	?>
								<h4><?php echo " <b>$j</b> "."$question[$i]"."<br>";$j=$j+1;?></h4>
							<?php 
						 	
						 }

						 ?>
						 <h3><b>Fill in the blanks</b></h3>
						 <?php
						 for($i=31,$j=21;$i<37;$i++)
						 {
						 	?>
								<h4><?php echo " <b>$j</b> "."$question[$i]"."<br>";$j=$j+1;?></h4>
							<?php 
						 	
						 }
					?>

				</div>
				


				<div class="col-sm-12" style=";height:70px; background-color: #3AAFA9;border-radius: 8px 8px 0px 0px;border:2px solid #3AAFA9; margin-top: 20px;">
					<h2>Section 3</h2>
				</div>
				<div class="col-sm-12" style=";height:490px;border-radius: 0px 0px 8px 8px;border:2px solid #3AAFA9;overflow-y: scroll;overflow-x: hidden;">
					




					<h3><b>Read the passage and provide answer in the adjacent box</b></h3>

					<?php
					$sql="select * from reading where test_id='$test_id' LIMIT 1;";
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
					<textarea class="reading-passage-question" style="margin-top: 10px; border:1px solid white;" readonly><?php echo $row["passage_3"] ;?></textarea>
					<?php 
						 $question=unserialize($row["reading_questions"]);
						 ?>
						 	<h3><b>For 27-32 match the headings for each paragraph</b></h3>
						 <?php
						 ?>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>I</b> "."$question[37]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>II</b> "."$question[38]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>III</b> "."$question[39]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>IV</b> "."$question[40]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>V</b> "."$question[41]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>VI</b> "."$question[42]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>VII</b> "."$question[43]"."<br>";?></h4>
						 	<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo " <b>VIII</b> "."$question[44]"."<br>";?></h4>



						 <?php
						 ?>
						 <h3><b>Fill in the blanks</b></h3>
						 <?php
						 for($i=45,$j=33;$i<49;$i++)
						 {
						 	?>
								<h4><?php echo " <b>$j</b> "."$question[$i]"."<br>";$j=$j+1;?></h4>
							<?php 
						 	
						 }
						 ?>
						 <h3><b>Yes, No Or Not Given</b></h3>
						 <?php
						 for($i=49,$j=37;$i<=52;$i++)
						 {
						 	?>
								<h4><?php echo " <b>$j</b> "."$question[$i]"."<br>";$j=$j+1;?></h4>
							<?php 
						 	
						 }
					?>

				</div>
			</div>
		</div>
		<div class="col-sm-4  reading-test-answer container-fluid">
			<!-- Answer -->

			<form method="post" enctype="multipart/form-data" >









			<div class="col-sm-12 reading-passage-header container-fluid" style="margin-top: 18px;height: 75px;">
				<h2 style="margin-left: 10px;">Answers</h2>
			</div>
			<div class="col-sm-12 reading-question-box">
				<h3>Fill in the blanks</h3>
				<!-- Blanks -->
				<?php
					$i=0;
					for($i=1;$i<=8;$i++)
					{
						?>
						<div class="col-sm-12" >
						<div class="form-group ">
	   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
	   	 					</div>
	   	 					<div class="col-sm-10">
	   	 						<input type="text" class="form-control" placeholder="Enter answer <?php echo "$i"?>" name= "user_reading_answer_<?php echo "$i"?>" onkeyup="this.value = this.value.toUpperCase();">
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>

				<!-- MCQ -->
				<h3 style="margin-top: 5px;">Multiple choice question</h3>
				<?php
					$i=0;
					for($i=9;$i<=13;$i++)
					{
						?>
						<div class="col-sm-12" >
						<div class="form-group ">
	   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
	   	 					</div>
	   	 					<div class="col-sm-10">
	   	 						<select class="form-control" placeholder="Select answer <?php echo "$i"?>" name= "user_reading_answer_<?php echo "$i"?>">
	   	 							<option >Select</option>
	   	 							<option >A</option>
	   	 							<option >B</option>
	   	 							<option >C</option>
	   	 						</select>
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>
				<h3>True, False Or Not Given</h3>
				<!-- Blanks -->
				<?php
					$i=0;
					for($i=14;$i<=20;$i++)
					{
						?>
						<div class="col-sm-12" >
						<div class="form-group ">
	   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
	   	 					</div>
	   	 					<div class="col-sm-10">
	   	 						<select class="form-control" placeholder="Select answer <?php echo "$i"?>" name= "user_reading_answer_<?php echo "$i"?>">
	   	 							<option >Select</option>
	   	 							<option >True</option>
	   	 							<option >False</option>
	   	 							<option >Not Given</option>
	   	 						</select>
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>

				<!-- MCQ -->
				<h3 style="margin-top: 5px;">Fill in the blanks</h3>
				<?php
					$i=0;
					for($i=21;$i<=26;$i++)
					{
						?>
						<div class="col-sm-12" >
						<div class="form-group ">
	   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
	   	 					</div>
	   	 					<div class="col-sm-10">
	   	 						<input type="text" class="form-control" placeholder="Enter answer <?php echo "$i"?>" name= "user_reading_answer_<?php echo "$i"?>" onkeyup="this.value = this.value.toUpperCase();">
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>
				<h3>Match the headings</h3>
				<!-- Blanks -->
				<?php
					$i=0;
					for($i=27;$i<=32;$i++)
					{
						?>
						<div class="col-sm-12" >
						<div class="form-group ">
	   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
	   	 					</div>
	   	 					<div class="col-sm-10">
	   	 						<select class="form-control" placeholder="Select answer <?php echo "$i"?>" name= "user_reading_answer_<?php echo "$i"?>">
	   	 							<option >Select</option>
	   	 							<option >I</option>
	   	 							<option >II</option>
	   	 							<option >III</option>
	   	 							<option >IV</option>
	   	 							<option >V</option>
	   	 							<option >VI</option>
	   	 							<option >VII</option>
	   	 							<option >VIII</option>
	   	 						</select>
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>

				<!-- MCQ -->
				<h3 style="margin-top: 5px;">Fill in the blanks</h3>
				<?php
					$i=0;
					for($i=33;$i<=36;$i++)
					{
						?>
						<div class="col-sm-12" >
						<div class="form-group ">
	   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
	   	 					</div>
	   	 					<div class="col-sm-10">
	   	 						<input type="text" class="form-control" placeholder="Enter answer <?php echo "$i"?>" name= "user_reading_answer_<?php echo "$i"?>" onkeyup="this.value = this.value.toUpperCase();">
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>

				<h3>Yes, No Or Not Given</h3>
				<!-- Yes, No OR Not Given -->
				<?php
					$i=0;
					for($i=37;$i<=40;$i++)
					{
						?>
						<div class="col-sm-12" >
						<div class="form-group ">
	   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
	   	 					</div>
	   	 					<div class="col-sm-10">
	   	 						<select class="form-control" placeholder="Select answer <?php echo "$i"?>" name= "user_reading_answer_<?php echo "$i"?>">
	   	 							<option >Select</option>
	   	 							<option >Yes</option>
	   	 							<option >No</option>
	   	 							<option >Not Given</option>
	   	 						</select>
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>


				<div class="col-sm-12">
					<button type="submit" class="btn btn-info  btn-lg upload-submit" style="background-color:  #3AAFA9;
  					border:2px solid  #3AAFA9; color:#333;margin-top: 20px; " name="submit"><b>Submit</b></button>
				</div>


			</div>

		</form>
		</div>
			
	</div>

	

	<div class="col-sm-12" style="height:50px;">	</div>

<?php
	if(isset($_POST['submit']))
	{
		$user_answer_reading=array($_POST['user_reading_answer_1'],$_POST['user_reading_answer_2'],$_POST['user_reading_answer_3'],$_POST['user_reading_answer_4'],$_POST['user_reading_answer_5'],$_POST['user_reading_answer_6'],$_POST['user_reading_answer_7'],$_POST['user_reading_answer_8'],$_POST['user_reading_answer_9'],$_POST['user_reading_answer_10'],$_POST['user_reading_answer_11'],$_POST['user_reading_answer_12'],$_POST['user_reading_answer_13'],$_POST['user_reading_answer_14'],$_POST['user_reading_answer_15'],$_POST['user_reading_answer_16'],$_POST['user_reading_answer_17'],$_POST['user_reading_answer_18'],$_POST['user_reading_answer_19'],$_POST['user_reading_answer_20'],$_POST['user_reading_answer_21'],$_POST['user_reading_answer_22'],$_POST['user_reading_answer_23'],$_POST['user_reading_answer_24'],$_POST['user_reading_answer_25'],$_POST['user_reading_answer_26'],$_POST['user_reading_answer_27'],$_POST['user_reading_answer_28'],$_POST['user_reading_answer_29'],$_POST['user_reading_answer_30'],$_POST['user_reading_answer_31'],$_POST['user_reading_answer_32'],$_POST['user_reading_answer_33'],$_POST['user_reading_answer_34'],$_POST['user_reading_answer_35'],$_POST['user_reading_answer_36'],$_POST['user_reading_answer_37'],$_POST['user_reading_answer_38'],$_POST['user_reading_answer_39'],$_POST['user_reading_answer_40']);
		$sql="select * from reading where test_id=$test_id LIMIT 1;";
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
		$actual_answer=unserialize($row["reading_answers"]);
		$count=0;
		 for($i=0,$j=1;$i<40;$i++)
		 {
		 	if($actual_answer[$i]==$user_answer_reading[$i])
		 	{
		 		$count=$count+1;
		 		// echo "Sahi h "."<br>";
		 	}
		 }
		 if($count<=40 && $count >=39)
		 {
		 	$band=9;
		 }
		 else if($count<=38 && $count >=37)
		 {
		 	$band=8.5;
		 }
		 else if($count<=36 && $count >=35)
		 {
		 	$band=8;
		 }
		 else if($count<=34 && $count >=33)
		 {
		 	$band=7.5;
		 }
		 else if($count<=32 && $count >=30)
		 {
		 	$band=7;
		 }
		 else if($count<=29 && $count >=27)
		 {
		 	$band=6.5;
		 }
		 else if($count<=26 && $count >=23)
		 {
		 	$band=6;
		 }
		 else if($count<=22 && $count >=19)
		 {
		 	$band=5.5;
		 }
		 else if($count<=18 && $count >=15)
		 {
		 	$band=5;
		 }
		 else if($count<=14 && $count >=13)
		 {
		 	$band=4.5;
		 }
		 else if($count<=12 && $count >=10)
		 {
		 	$band=4;
		 }
		 else if($count<=9 && $count >=8)
		 {
		 	$band=3.5;
		 }
		 else if($count<=7 && $count >=6)
		 {
		 	$band=3;
		 }
		 else if($count<=5 && $count >=4)
		 {
		 	$band=2.5;
		 }
		 else if($count<=3)
		 {
		 	$band=2;
		 }
		 echo "$band";
		 $sql="update result set reading_score='$band' where test_id='$test_id' AND user_id='$user_id';";
			if(mysqli_query($conn,$sql))
			{
				?>
				<script >
					alert("Reading Result Updated");
					window.location.href="writing.php?test_id=<?php echo $row["test_id"] ?>"
				</script>
				<?php
			}
			else 
			{	
					echo "Error Adding Data".mysqli_error($conn);
			}


	}
?>





	<script >
		function func1()
		{
			document.getElementById("div-background").style.backgroundColor="#404040";
			document.getElementById("div-background").style.color="#FFFFFF";
			document.getElementBytagName("input").style.color="#FFFFFF";
			document.getElementBytagName("input").style.backgroundcolor="#606060";
		}
		function nextquestion()
		{
			window.scrollBy(0, 670);
		}
		function func2()
		{
			document.getElementById("div-background").style.backgroundColor="#FFFFFF";
			document.getElementById("div-background").style.color="#000000";
			document.getElementBytagName("input").style.color="#000000";
			document.getElementBytagName("input").style.backgroundcolor="#FFFFFF";
		}
	</script>
	<script>
		var count = 3600;//timer in seconds
		var counter = setInterval(timer, 1000);

	    function timer() {
	        count = count - 1;
	        if (count == -1) {
	            clearInterval(counter);
	            return;
	        }

	        var seconds = count % 60;
	        var minutes = Math.floor(count / 60);
	        minutes %= 60;

	        document.getElementById("timer").innerHTML =minutes + ":" + seconds;
	    }
	</script>
</body>
</html>
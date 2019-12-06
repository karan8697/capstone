<?php
	include 'config.php';
	session_start();
	$test_id=$_GET['id'];
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
		<div class="col-sm-12 test-header" style="margin-top: -10px;">
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
	<div class="col-sm-12 reading-test-background" style="margin-top: 100px;border-radius: 8px;">
		<div class="col-sm-8  reading-test-question container-fluid" style="height: 560px;margin-top: 20px; background-color: ;">


			<?php
			$sql="select * from listening where test_id='$test_id' LIMIT 1;";
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

			<video style="max-width: 100%;height: auto;border:2px solid #3AAFA9;border-radius: 8px;" autoplay ><source src="videos/<?php echo $row["video"] ?>" type="video/mp4"></video>
			
		</div>
		




		<div class="col-sm-4  reading-test-answer container-fluid">
			<!-- Answer -->

			<form method="post" enctype="multipart/form-data" name="autosubmit" >
			<div class="col-sm-12 reading-passage-header container-fluid" style="margin-top: 18px;height: 75px;">
				<h2 style="margin-left: 10px;">Answers</h2>
			</div>
			<div class="col-sm-12 reading-question-box">
				<h3>Section 1</h3>

				<?php
					$i=0;
					for($i=1;$i<=10;$i++)
					{
						?>
						<div class="col-sm-12" >
						<div class="form-group ">
	   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
	   	 					</div>
	   	 					<div class="col-sm-10">
	   	 						<input type="text" class="form-control" placeholder="Enter answer <?php echo "$i"?>" name= "user_listening_answer_<?php echo "$i"?>" onkeyup="this.value = this.value.toUpperCase();">
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>


				<h3>Section 2</h3>

				<?php
					$i=0;
					for($i=11;$i<=20;$i++)
					{
						?>
						<div class="col-sm-12" >
						<div class="form-group ">
	   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
	   	 					</div>
	   	 					<div class="col-sm-10">
	   	 						<input type="text" class="form-control" placeholder="Enter answer <?php echo "$i"?>" name= "user_listening_answer_<?php echo "$i"?>" onkeyup="this.value = this.value.toUpperCase();">
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>
				

				<h3>Section 3</h3>

				<?php
					$i=0;
					for($i=21;$i<=30;$i++)
					{
						?>
						<div class="col-sm-12" >
						<div class="form-group ">
	   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
	   	 					</div>
	   	 					<div class="col-sm-10">
	   	 						<input type="text" class="form-control" placeholder="Enter answer <?php echo "$i"?>" name= "user_listening_answer_<?php echo "$i"?>" onkeyup="this.value = this.value.toUpperCase();">
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>
				

				<h3>Section 4</h3>

				<?php
					$i=0;
					for($i=31;$i<=40;$i++)
					{
						?>
						<div class="col-sm-12" >
						<div class="form-group ">
	   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
	   	 					</div>
	   	 					<div class="col-sm-10">
	   	 						<input type="text" class="form-control" placeholder="Enter answer <?php echo "$i"?>" name= "user_listening_answer_<?php echo "$i"?>" onkeyup="this.value = this.value.toUpperCase();">
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

	<div class="col-sm-12" style="height:200px;">	</div>


	<script >
    	
		function func1()
		{
			document.getElementById("div-background").style.backgroundColor="#404040";
			document.getElementById("div-background").style.color="#FFFFFF";
			document.getElementBytagName("input").style.color="#FFFFFF";
			document.getElementBytagName("input").style.backgroundcolor="#606060";
		}
		function func2()
		{
			document.getElementById("div-background").style.backgroundColor="#FFFFFF";
			document.getElementById("div-background").style.color="#000000";
			document.getElementBytagName("input").style.color="#000000";
			document.getElementBytagName("input").style.backgroundcolor="#FFFFFF";
		}
		function nextquestion()
		{
			window.scrollBy(0, 670);
		}
	</script>
	<p id="timer"></p>
	<script>
		var count = 2400;//timer in seconds
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
	<!-- <script type='text/javascript'>setInterval( "autosubmit()", 20000 );function autosubmit(){ document.autosubmit.submit();}</script> -->

<?php
	if(isset($_POST['submit']))
	{
		$user_answer_listening=array($_POST['user_listening_answer_1'],$_POST['user_listening_answer_2'],$_POST['user_listening_answer_3'],$_POST['user_listening_answer_4'],$_POST['user_listening_answer_5'],$_POST['user_listening_answer_6'],$_POST['user_listening_answer_7'],$_POST['user_listening_answer_8'],$_POST['user_listening_answer_9'],$_POST['user_listening_answer_10'],$_POST['user_listening_answer_11'],$_POST['user_listening_answer_12'],$_POST['user_listening_answer_13'],$_POST['user_listening_answer_14'],$_POST['user_listening_answer_15'],$_POST['user_listening_answer_16'],$_POST['user_listening_answer_17'],$_POST['user_listening_answer_18'],$_POST['user_listening_answer_19'],$_POST['user_listening_answer_20'],$_POST['user_listening_answer_21'],$_POST['user_listening_answer_22'],$_POST['user_listening_answer_23'],$_POST['user_listening_answer_24'],$_POST['user_listening_answer_25'],$_POST['user_listening_answer_26'],$_POST['user_listening_answer_27'],$_POST['user_listening_answer_28'],$_POST['user_listening_answer_29'],$_POST['user_listening_answer_30'],$_POST['user_listening_answer_31'],$_POST['user_listening_answer_32'],$_POST['user_listening_answer_33'],$_POST['user_listening_answer_34'],$_POST['user_listening_answer_35'],$_POST['user_listening_answer_36'],$_POST['user_listening_answer_37'],$_POST['user_listening_answer_38'],$_POST['user_listening_answer_39'],$_POST['user_listening_answer_40']);
		$sql="select * from listening where test_id='$test_id' LIMIT 1;";
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
		$actual_answer=unserialize($row["answer_listening"]);
		$count=0;
		$band=0;
		 for($i=0,$j=1;$i<40;$i++)
		 {
		 	if($actual_answer[$i]==$user_answer_listening[$i])
		 	{
		 		$count=$count+1;
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
		 // echo "$band";
		 $sql="INSERT INTO `result`(`user_id`, `test_id`, `listening_score`) VALUES ('$user_id','$test_id','$band')";
			if(mysqli_query($conn,$sql))
			{
				?>
				<script >
					alert("Listening Result Updated");
					window.location.href="reading.php?test_id=<?php echo $row["test_id"] ?>"
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
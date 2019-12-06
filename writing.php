<?php
	include 'config.php';
	session_start();
	$test_id=$_GET['test_id'];
	$user_id=$_SESSION['id'];
	// $test_id=10001;
?>
<?php
	$sql="select * from writing where test_id='$test_id' LIMIT 1;";
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
	<form method="post" enctype="multipart/form-data" name="autosubmit" >
	<div class="col-sm-12 writing-test-background" style="margin-top: 100px;">
		<div class="col-sm-6  writing-test-question container-fluid">
			<h3 style="margin-left: 10px;"><b>Study the given graph and provide your answer in the adjacent box in not more than 150-180 words</b></h3>
			<div class="col-sm-11 task-1-picture" style="height: 400px;margin-left: 25px;  background: url('images/<?php echo $row["image"] ?>') no-repeat center center ; background-size: cover;"></div>
		</div>
		<div class="col-sm-6  writing-test-answer container-fluid">
			<textarea id="task-response-1" class="writing-response" placeholder="Write Your Response Here" style="border:1px solid #3AAFA9;" name="task_1"></textarea>
			<div class="col-sm-12" >
				<h4 style="color:#3AAFA9;"> Total words: <span id="display_count1">0</span><h4>
			</div>
		</div>
	</div>

	<div class="col-sm-12 writing-test-background" >
		<div class="col-sm-6  writing-test-question container-fluid">
			<h3 style="margin-left: 10px;"><b>Study the given statement and provide your answer in the adjacent box in not more than 250-275 words</b></h3>
			<h4 style="margin-left: 20px;margin-right: 20px;"><?php echo $row["task_2"] ?></h4>
		</div>
		<div class="col-sm-6  writing-test-answer container-fluid">
			<textarea id="task-response-2" class="writing-response" placeholder="Write Your Response Here" style="border:1px solid #3AAFA9;" name="task_2"></textarea>
			<div class="col-sm-12">
				<div class="col-sm-6">
					<h4 style="color:#3AAFA9;"> Total words: <span id="display_count2">0</span><h4>
				</div>
				<div class="col-sm-6">
					<button type="submit" class="btn btn-info  btn-lg upload-submit" style="background-color:  #3AAFA9;
  					border:2px solid  #3AAFA9; color:#333;margin-top: -6px; " name="submit"><b>Submit</b></button>
				</div>

					
			</div>
		</div>
	</div>
	</form>
	<div class="col-sm-12" style="height:200px;">	</div>


	<script >
		function func1()
		{
			document.getElementById("div-background").style.backgroundColor="#404040";
			document.getElementById("div-background").style.color="#FFFFFF";
			document.getElementById("task-response-1").style.backgroundColor="#808080";
			document.getElementById("task-response-1").style.color="#FFFFFF";
			document.getElementById("task-response-2").style.backgroundColor="#808080";
			document.getElementById("task-response-2").style.color="#FFFFFF";
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

	    $(document).ready(function() {
    		$("#task-response-1").on('keydown', function(e) {
        		var words = $.trim(this.value).length ? this.value.match(/\S+/g).length : 0;
        			if (words <= 150) 
        			{
            			$('#display_count1').text(words);
        			}
        			else
        			{
            			if (e.which !== 8) e.preventDefault();
        			}
    		});
    	});
    	$(document).ready(function() {
    		$("#task-response-2").on('keydown', function(e) {
        		var words = $.trim(this.value).length ? this.value.match(/\S+/g).length : 0;
        		if (words <= 280) 
        		{
            		$('#display_count2').text(words);
        		}
        		else
        		{
            		if (e.which !== 8) e.preventDefault();
        		}
    		});
 		}); 
  
	</script>

<?php
	if(isset($_POST['submit']))
	{
		$task_1=$_POST['task_1'];
		$task_2=$_POST['task_2'];
		$image=$row["image"];
		$ques_2=$row["task_2"];
		$sql="insert into writingpending(`test_id`, `user_id`, `task_1`, `task_2`, `task1_question`, `task2_question`) values ('$test_id','$user_id','$task_1','$task_2','$image','$ques_2')";
		if(mysqli_query($conn,$sql))
		{
			?>
			<script >
				alert("Test Completed");
				window.location.href="client-dashboard.php"
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
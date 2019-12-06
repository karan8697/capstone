<?php
	include 'config.php';
	$test_id=$_GET['test_id'];
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
	
<form method="post" enctype="multipart/form-data" >
	<!-- Section 1 Starts !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->


	<div class="col-sm-12 upload-reading-background-header">
		<h2>Section 1</h2>
	</div>
	<div class="upload-reading-background col-sm-12">
		<!-- Enter Passage -->
		<div class="col-sm-5  container-fluid">
			<div class="col-sm-12 reading-passage-header container-fluid">
				<h3 style="margin-left: 10px;">Passage</h3>
			</div>
			<div class="col-sm-12">
				<textarea class="reading-passage-question" name= "passage_1" placeholder="Enter the passage here" required></textarea>
			</div>

		</div>
		<!-- Enter Passage Ends -->
		<!-- Enter Questions -->
		<div class="col-sm-4 container-fluid">
			<div class="col-sm-12 reading-passage-header container-fluid">
				<h3 style="margin-left: 10px;">Questions</h3>
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
	   	 						<input type="text" class="form-control" placeholder="Enter question <?php echo "$i"?>" name= "reading_question_<?php echo "$i"?>" required>
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>

				<!-- Blanks End -->
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
			   	 						<input type="text" class="form-control" placeholder="Enter question <?php echo "$i"?>" name= "reading_question_<?php echo "$i"?>" required>
			   	 					</div>
			  					</div>
						</div>
						<!-- Option -->
						<div class="col-sm-12" >
								<div class="form-group ">
			   	 					<div class="col-sm-2 col-sm-offset-1" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;">A</p>
			   	 					</div>
			   	 					<div class="col-sm-9">
			   	 						<input type="text" class="form-control" placeholder="Enter option A"name= "reading_question_<?php echo "$i"?>_a" required>
			   	 					</div>
			  					</div>
						</div>
						<div class="col-sm-12" >
								<div class="form-group ">
			   	 					<div class="col-sm-2 col-sm-offset-1" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;">B</p>
			   	 					</div>
			   	 					<div class="col-sm-9">
			   	 						<input type="text" class="form-control" placeholder="Enter option B" name= "reading_question_<?php echo "$i"?>_b"required>
			   	 					</div>
			  					</div>
						</div>
						<div class="col-sm-12" >
								<div class="form-group ">
			   	 					<div class="col-sm-2 col-sm-offset-1" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;">C</p>
			   	 					</div>
			   	 					<div class="col-sm-9">
			   	 						<input type="text" class="form-control" placeholder="Enter option C" name= "reading_question_<?php echo "$i"?>_c"required>
			   	 					</div>
			  					</div>
						</div>


						<?php
					}
				?>

			</div>
		</div>
		<!-- Enter Questions Ends -->
		<!-- Enter Answers -->
		<div class="col-sm-3  container-fluid">
			<div class="col-sm-12 reading-passage-header container-fluid">
				<h3 style="margin-left: 10px;">Correct answers</h3>
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
	   	 						<input type="text" class="form-control" placeholder="Enter answer <?php echo "$i"?>" name= "reading_answer_<?php echo "$i"?>" required onkeyup="this.value = this.value.toUpperCase();">
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
	   	 						<select class="form-control" placeholder="Select answer <?php echo "$i"?>" name= "reading_answer_<?php echo "$i"?>">
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
			</div>

		</div>
		<!-- Enter Answers End -->
		
	</div>
	<!-- Section 1 Ends !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->










	<!-- Section 2 Starts !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
	<div class="col-sm-12 upload-reading-background-header" style="margin-top: 20px;">
		<h2>Section 2</h2>
	</div>
	<div class="upload-reading-background col-sm-12">
		<!-- Enter Passage -->
		<div class="col-sm-5  container-fluid">
			<div class="col-sm-12 reading-passage-header container-fluid">
				<h3 style="margin-left: 10px;">Passage</h3>
			</div>
			<div class="col-sm-12">
				<textarea class="reading-passage-question" name= "passage_2" placeholder="Enter the passage here" required></textarea>
			</div>

		</div>
		<!-- Enter Passage Ends -->
		<!-- Enter Questions -->
		<div class="col-sm-4 container-fluid">
			<div class="col-sm-12 reading-passage-header container-fluid">
				<h3 style="margin-left: 10px;">Questions</h3>
			</div>


			<div class="col-sm-12 reading-question-box">
				<h3>True, Flase Or Not Given</h3>
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
	   	 						<input type="text" class="form-control" placeholder="Enter question <?php echo "$i"?>" name= "reading_question_<?php echo "$i"?>" required>
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>

				<!-- Blanks End -->
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
	   	 						<input type="text" class="form-control" placeholder="Enter question <?php echo "$i"?>" name= "reading_question_<?php echo "$i"?>" required>
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>

			</div>
		</div>
		<!-- Enter Questions Ends -->
		<!-- Enter Answers -->
		<div class="col-sm-3  container-fluid">
			<div class="col-sm-12 reading-passage-header container-fluid">
				<h3 style="margin-left: 10px;">Correct answers</h3>
			</div>
			<div class="col-sm-12 reading-question-box">
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
	   	 						<select class="form-control" placeholder="Select answer <?php echo "$i"?>" name= "reading_answer_<?php echo "$i"?>">
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
	   	 						<input type="text" class="form-control" placeholder="Enter answer <?php echo "$i"?>" name= "reading_answer_<?php echo "$i"?>" required onkeyup="this.value = this.value.toUpperCase();">
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>
			</div>

		</div>
		<!-- Enter Answers End -->
		
	</div>
	<!-- Section 2 Ends !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->








	<!-- Section 3 starts !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->










	<div class="col-sm-12 upload-reading-background-header" style="margin-top: 20px;">
		<h2>Section 3</h2>
	</div>
	<div class="upload-reading-background col-sm-12">
		<!-- Enter Passage -->
		<div class="col-sm-5  container-fluid">
			<div class="col-sm-12 reading-passage-header container-fluid">
				<h3 style="margin-left: 10px;">Passage</h3>
			</div>
			<div class="col-sm-12">
				<textarea class="reading-passage-question" name= "passage_3" placeholder="Enter the passage here" required></textarea>
			</div>

		</div>
		<!-- Enter Passage Ends -->
		<!-- Enter Questions -->
		<div class="col-sm-4 container-fluid">
			<div class="col-sm-12 reading-passage-header container-fluid">
				<h3 style="margin-left: 10px;">Questions</h3>
			</div>


			<div class="col-sm-12 reading-question-box">
				<h3>Match the headings</h3>
				<!-- Blanks -->
					<div class="col-sm-12" >
							<div class="form-group ">
		   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;"><?php echo "$i"?></p>
		   	 					</div>
		   	 					<div class="col-sm-10">
		   	 						<h4>Enter 8 Headings for ques 27-32</h4>
		   	 					</div>
		  					</div>
					</div>
					<!-- Option -->
					<div class="col-sm-12" >
							<div class="form-group ">
		   	 					<div class="col-sm-2 col-sm-offset-1" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;">I</p>
		   	 					</div>
		   	 					<div class="col-sm-9">
		   	 						<input type="text" class="form-control" placeholder="Enter heading I"name= "reading_question_27_1" required>
		   	 					</div>
		  					</div>
					</div>
					<div class="col-sm-12" >
							<div class="form-group ">
		   	 					<div class="col-sm-2 col-sm-offset-1" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;">II</p>
		   	 					</div>
		   	 					<div class="col-sm-9">
		   	 						<input type="text" class="form-control" placeholder="Enter heading II"name= "reading_question_27_2" required>
		   	 					</div>
		  					</div>
					</div>
					<div class="col-sm-12" >
							<div class="form-group ">
		   	 					<div class="col-sm-2 col-sm-offset-1" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;">III</p>
		   	 					</div>
		   	 					<div class="col-sm-9">
		   	 						<input type="text" class="form-control" placeholder="Enter heading III"name= "reading_question_27_3" required>
		   	 					</div>
		  					</div>
					</div>
					<div class="col-sm-12" >
							<div class="form-group ">
		   	 					<div class="col-sm-2 col-sm-offset-1" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;">IV</p>
		   	 					</div>
		   	 					<div class="col-sm-9">
		   	 						<input type="text" class="form-control" placeholder="Enter heading IV"name= "reading_question_27_4" required>
		   	 					</div>
		  					</div>
					</div>
					<div class="col-sm-12" >
							<div class="form-group ">
		   	 					<div class="col-sm-2 col-sm-offset-1" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;">V</p>
		   	 					</div>
		   	 					<div class="col-sm-9">
		   	 						<input type="text" class="form-control" placeholder="Enter heading V"name= "reading_question_27_5" required>
		   	 					</div>
		  					</div>
					</div>
					<div class="col-sm-12" >
							<div class="form-group ">
		   	 					<div class="col-sm-2 col-sm-offset-1" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;">VI</p>
		   	 					</div>
		   	 					<div class="col-sm-9">
		   	 						<input type="text" class="form-control" placeholder="Enter heading VI"name= "reading_question_27_6" required>
		   	 					</div>
		  					</div>
					</div>
					<div class="col-sm-12" >
							<div class="form-group ">
		   	 					<div class="col-sm-2 col-sm-offset-1" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;">VII</p>
		   	 					</div>
		   	 					<div class="col-sm-9">
		   	 						<input type="text" class="form-control" placeholder="Enter heading VII"name= "reading_question_27_7" required>
		   	 					</div>
		  					</div>
					</div>
					<div class="col-sm-12" >
							<div class="form-group ">
		   	 					<div class="col-sm-2 col-sm-offset-1" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;">VIII</p>
		   	 					</div>
		   	 					<div class="col-sm-9">
		   	 						<input type="text" class="form-control" placeholder="Enter heading VIII"name= "reading_question_27_8" required>
		   	 					</div>
		  					</div>
					</div>

					<div class="col-sm-12" >
							<div class="form-group ">
		   	 					<div class="col-sm-2" style="background-color: #3AAFA9;border:1px solid #FFFFFF;color:#222;border-radius: 4px ;height: 35px;"><p style="font-size: 24px;text-align: center;">32</p>
		   	 					</div>
		   	 					<div class="col-sm-10">
		   	 						<!-- Options End  -->
		   	 					</div>
		  					</div>
					</div>


				<!-- Blanks End -->
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
	   	 						<input type="text" class="form-control" placeholder="Enter answer <?php echo "$i"?>" name= "reading_question_<?php echo "$i"?>" required >
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>

				<h3>Yes, No Or Not Given</h3>
				<!-- Blanks -->
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
	   	 						<input type="text" class="form-control" placeholder="Enter question <?php echo "$i"?>" name= "reading_question_<?php echo "$i"?>" required>
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>

			</div>
		</div>
		<!-- Enter Questions Ends -->
		<!-- Enter Answers -->
		<div class="col-sm-3  container-fluid">
			<div class="col-sm-12 reading-passage-header container-fluid">
				<h3 style="margin-left: 10px;">Correct answers</h3>
			</div>
			<div class="col-sm-12 reading-question-box">
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
	   	 						<select class="form-control" placeholder="Select answer <?php echo "$i"?>" name= "reading_answer_<?php echo "$i"?>">
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
				<h3>Fill in the blanks</h3>
				<!-- Blanks -->
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
	   	 						<input type="text" class="form-control" placeholder="Enter question <?php echo "$i"?>" name= "reading_answer_<?php echo "$i"?>" onkeyup="this.value = this.value.toUpperCase();" required>
	   	 					</div>
	  					</div>
						</div>
						<?php
					}
				?>

				<h3>Yes, No Or Not Given</h3>
				<!-- Blanks -->
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
	   	 						<select class="form-control" placeholder="Select answer <?php echo "$i"?>" name= "reading_answer_<?php echo "$i"?>">
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

			</div>

		</div>
		<!-- Enter Answers End -->
		
	</div>












	<!-- Section 3 Ends !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->









	<div class="col-sm-12">
			<button type="submit" class="btn btn-info  btn-lg upload-submit" style="background-color:  #3AAFA9;
  		border:2px solid  #3AAFA9; color:#333;margin-top: 20px; " name="submit"><b>Upload</b></button>
	</div>

	<div class="col-sm-12" style="height: 20px;"></div>

	
</form>

<?php
	if(isset($_POST['submit']))
    {
    	$passage_1=$_POST['passage_1'];
    	$passage_2=$_POST['passage_2'];
    	$passage_3=$_POST['passage_3'];

    	$answer_reading=array($_POST['reading_answer_1'],$_POST['reading_answer_2'],$_POST['reading_answer_3'],$_POST['reading_answer_4'],$_POST['reading_answer_5'],$_POST['reading_answer_6'],$_POST['reading_answer_7'],$_POST['reading_answer_8'],$_POST['reading_answer_9'],$_POST['reading_answer_10'],$_POST['reading_answer_11'],$_POST['reading_answer_12'],$_POST['reading_answer_13'],$_POST['reading_answer_14'],$_POST['reading_answer_15'],$_POST['reading_answer_16'],$_POST['reading_answer_17'],$_POST['reading_answer_18'],$_POST['reading_answer_19'],$_POST['reading_answer_20'],$_POST['reading_answer_21'],$_POST['reading_answer_22'],$_POST['reading_answer_23'],$_POST['reading_answer_24'],$_POST['reading_answer_25'],$_POST['reading_answer_26'],$_POST['reading_answer_27'],$_POST['reading_answer_28'],$_POST['reading_answer_29'],$_POST['reading_answer_30'],$_POST['reading_answer_31'],$_POST['reading_answer_32'],$_POST['reading_answer_33'],$_POST['reading_answer_34'],$_POST['reading_answer_35'],$_POST['reading_answer_36'],$_POST['reading_answer_37'],$_POST['reading_answer_38'],$_POST['reading_answer_39'],$_POST['reading_answer_40']);

    	$answer_reading=serialize($answer_reading);

    	$question_reading=array($_POST['reading_question_1'],$_POST['reading_question_2'],$_POST['reading_question_3'],$_POST['reading_question_4'],$_POST['reading_question_5'],$_POST['reading_question_6'],$_POST['reading_question_7'],$_POST['reading_question_8'],$_POST['reading_question_9'],$_POST['reading_question_9_a'],$_POST['reading_question_9_b'],$_POST['reading_question_9_c'],$_POST['reading_question_10'],$_POST['reading_question_10_a'],$_POST['reading_question_10_b'],$_POST['reading_question_10_c'],$_POST['reading_question_11'],$_POST['reading_question_11_a'],$_POST['reading_question_11_b'],$_POST['reading_question_11_c'],$_POST['reading_question_12'],$_POST['reading_question_12_a'],$_POST['reading_question_12_b'],$_POST['reading_question_12_c'],$_POST['reading_question_13'],$_POST['reading_question_13_a'],$_POST['reading_question_13_b'],$_POST['reading_question_13_c'],$_POST['reading_question_14'],$_POST['reading_question_15'],$_POST['reading_question_16'],$_POST['reading_question_17'],$_POST['reading_question_18'],$_POST['reading_question_19'],$_POST['reading_question_20'],$_POST['reading_question_21'],$_POST['reading_question_22'],$_POST['reading_question_23'],$_POST['reading_question_24'],$_POST['reading_question_25'],$_POST['reading_question_26'],$_POST['reading_question_27_1'],$_POST['reading_question_27_2'],$_POST['reading_question_27_3'],$_POST['reading_question_27_4'],$_POST['reading_question_27_5'],$_POST['reading_question_27_6'],$_POST['reading_question_27_7'],$_POST['reading_question_27_8'],$_POST['reading_question_33'],$_POST['reading_question_34'],$_POST['reading_question_35'],$_POST['reading_question_36'],$_POST['reading_question_37'],$_POST['reading_question_38'],$_POST['reading_question_39'],$_POST['reading_question_40']);

    	$question_reading=serialize($question_reading);



    	$sql="insert into reading values ('$test_id','$passage_1','$passage_2','$passage_3','$question_reading','$answer_reading')";
		if(mysqli_query($conn,$sql))
		{
			?>
			<script >
				alert("Reading Module Added");
				window.location.href="upload-writing.php?test_id=<?php echo "$test_id" ?>"
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
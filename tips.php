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
				<button type="button" class="btn btn-dark btn-lg" style="background-color: #303030;float: right;margin-top: 17px;color: #3AAFA9;" onclick="window.location.href='/capstone/logout.php'">Logout</button>
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
			<h2 style="color: #3AAFA9"> Click On Button To View Tips</h2>
			<button type="button" class="collapsible">Listening</button>
				<div class="content">
  					<h4>1. The goal of IELTS Listening section is to test your listening skills. Don't use practice tests to improve your score: it's not enough! They will help you to become familiar with the test, but won't much improve your listening abilities.</h4>
  					<h4>2. Section 3 is almost always about education. For example, students and a tutor talking about an assignment. Learn all the vocabulary you can about studying at university. This way you will understand this section better.</h4>
  					<h4>3. Skip over the questions and decide which type of word fits in each gap. Is it a noun, verb, adverb or adjective? Write 'N' for noun, 'V' for verb and so on. This will help you to focus on the specific word forms while listening.</h4>
  					<h4>4. Try to get an idea of the situation. Before each part you will be given a short introduction: 'Now, you will hear a dialogue between…' or 'you will hear a lecture on…' This information is not written on the question paper, so be attentive. Note: who are the speakers, why are they speaking and where are they. This will make understanding the rest of the recording much easier.</h4>
  					<h4>5. Remember, you will only hear the audio once. So if you didn't hear some words and passed over some questions, don't worry! Leave them blank and focus on the actual part. Review those questions at the end of the section, otherwise, you will only miss more questions and tangle in the recording. You will need to read, write and listen all at the same time. </h4>
  					<h4>6. At the end of the listening test you will have 10 minutes for transferring your answers into the answer sheet. And quite often students get confused in the numeration! As you write down your answers, check that they fit into the correct numbered space. In other words, make sure that answer for question 7 goes into space number </h4>
				</div>
			<button type="button" class="collapsible">Reading</button>
				<div class="content">
  					<h4>1. It is important to familiarise yourself with the IELTS reading test, IELTS reading tips and gain an understanding of the various questions.</h4>
  					<h4>2. So many easy marks are lost by good IELTS candidates because they fail to read the instructions properly. This is especially true in the reading and listening tests because they give very specific instructions. If you don’t follow these instructions exactly, you will get the question wrong.</h4>
  					<h4>3. Some of the questions will be easy and some will be extremely difficult. The key is not to panic when trying to answer a difficult one. Nearly all of the IELTS teachers I know have to check the answers to some questions because they are so difficult.</h4>
  					<h4>4. In many ways, the reading test is more of a vocabulary test than a reading test. They will use synonyms and paraphrase sentences to test how wide your vocabulary is. To prepare for this I advise my students to do three things: read, note, and review.</h4>
  					<h4>5. I advise my students to try and get each section finished in 20 minutes. This breaks down to 16-17 minutes to read and answer the questions and 3-4 minutes transferring and checking your answers.</h4>
  					<h4>6. The higher the level the more this problem affects people. Please remember that you are being tested on your understanding of the text only; your own knowledge of the topic should not influence your answers.</h4>
  					<h4>7. Many teachers advise students to practice for the IELTS reading test ‘under exam conditions’. This means you do the practice test in one hour without any help, just like in the exam. This is poor advice for a few reasons.</h4>
  					<h4>8. Many of my students have been taught to look up every word in a dictionary they don’t understand in a dictionary. The theory behind this is good, a wide vocabulary is key to getting a good score in the IELTS test, but worrying about all the words you don’t understand in the reading exam is one of the worst things you can do.</h4>
				</div>
			<button type="button" class="collapsible">Writing</button>
				<div class="content">
  					<h4>1. You must first understand the question to know exactly what the examiner is looking for. One of the biggest mistakes students make is not answering the question properly. If you do not answer the question fully, you can’t score higher than a Band 5.</h4>
  					<h4>2. The students who get the highest marks plan before they write and they often plan for up to 10 minutes. Planning helps you organise your ideas and structure before you write, saving you time and helping you write a clear essay.</h4>
  					<h4>3. The introduction should tell the examiner what the rest of the essay is about and also answer the question directly. This tells the examiner that you know what you are doing straight away and helps you write your main body paragraphs.</h4>
  					<h4>4. This is where you give the examiner more detail. You do this by stating your main points and supporting these with explanations and relevant examples.</h4>
  					<h4>5. Here you provide a summary of what you have already said in the rest of the essay.</h4>
				</div>
			<button type="button" class="collapsible"><b>Speaking AND Cue Cards</b></button>
				<div class="content">
  					<h4>1. Speak as much as you can when answering questions – give full, complete answers</h4>
  					<h4>2. Speak fluently and be spontaneous – spontaneity will make you sound more natural</h4>
  					<h4>3. Speak more than the examiner – if you can dominate the conversation, you will thrive. But, be sure to watch the examiner and give him or her an opportunity to ask you questions – all part of good communication</h4>
  					<h4>4. If you did not hear the question, or you think you might have misunderstood something, simply ask for clarification i.e., “Excuse me, could you repeat that, please? I didn’t quite hear you.”</h4>
  					<h4>5. Examiners are trained to spot rehearsed/memorized answers, so do not become a robot. </h4>
  					<h4>6. Remember, the examiner’s questions are pretty predictable. The best thing you can do is ask someone you trust to ask you the questions you can expect on the day of your test. With enough time and rehearsal, you will absolutely ace your IELTS speaking test, master the IELTS, and achieve your Dream!</h4>
  					<h2 style="color: #3AAFA9">Cue Cards</h2>
  					<h4 style="margin-left: 20px;">Describe a good law in your country</h4>
					<h4 style="margin-left: 20px;">Talk about your favorite place for shopping</h4>
					<h4 style="margin-left: 20px;">Talk about a place where you would like to study</h4>
					<h4 style="margin-left: 20px;">Talk about a thing you complained about something</h4>
					<h4 style="margin-left: 20px;">Talk about a beautiful city</h4>
					<h4 style="margin-left: 20px;">Talk about a skill that takes a long time to learn</h4>
					<h4 style="margin-left: 20px;">Describe something that is made with your hand for your friend</h4>
					<h4 style="margin-left: 20px;">Talk about the happiest situation in your life</h4>
					<h4 style="margin-left: 20px;">Describe a time when you searched for information from the internet</h4>
					<h4 style="margin-left: 20px;">Describe a time when you someone gave you something you really wanted</h4>
					<h4 style="margin-left: 20px;">Talk about a recent activity that made you happy</h4>
					<h4 style="margin-left: 20px;">Describe something that helps you in concentration</h4>
					<h4 style="margin-left: 20px;">Describe a time when you had to change your plan</h4>
					<h4 style="margin-left: 20px;">Describe a memorable story told by someone</h4>
					<h4 style="margin-left: 20px;">Describe something you did to help others</h4>
					<h4 style="margin-left: 20px;">Talk about an exciting book you read</h4>
					<h4 style="margin-left: 20px;">Talk about a situation where you had to be polite</h4>
					<h4 style="margin-left: 20px;">Describe a time when you were cheated</h4>
					<h4 style="margin-left: 20px;">Talk about an old person you met</h4>
					<h4 style="margin-left: 20px;">Describe a country in which you would like to work for a short time</h4>
					<h4 style="margin-left: 20px;">Describe a recent news you heard recently</h4>
					<h4 style="margin-left: 20px;">Talk about a public facility that improves local life quality</h4>
					<h4 style="margin-left: 20px;">Describe a time when you found something someone lost</h4>
					<h4 style="margin-left: 20px;">Describe a time when you got up extremely early</h4>
					<h4 style="margin-left: 20px;">Talk about a time when you gave advice to someone</h4>

				</div>
		</div>
	</div>
	<div class="col-sm-12 container-fluid the-footer">
		
	</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</body>
</html>
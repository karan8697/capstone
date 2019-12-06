<?php
	include 'config.php';
	$test_id=$_GET['test_id'];
	$user_id=$_GET['user_id'];
	$sql="delete from writingpending where test_id='$test_id' AND user_id='$user_id'";
	if(mysqli_query($conn,$sql))
	{
		?>
		<script >
			alert("Record is Removed from Pending");
			window.location.href="admin-dashboard.php "
		</script>
		<?php
	}
	else 
	{
		
			echo "Error Adding Data".mysqli_error($conn);
	}
?>
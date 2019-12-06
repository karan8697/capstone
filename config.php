<?php
		$servername="localhost";
		$username="root";
		$pass="password";
		$dbname="DB_CAPSTONE";
		$conn=mysqli_connect($servername,$username,$pass,$dbname);
		$sql="CREATE DATABASE IF NOT EXISTS DB_CAPSTONE";
		if(mysqli_query($conn,$sql))
		{
			echo "";
		}
		else
		{
			echo "Error Creating Database".mysqli_error($conn);
		}
?>
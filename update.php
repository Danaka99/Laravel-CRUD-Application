<?php
require_once 'db.php';
//Get Data
if(isset($_POST['updateid'])){
	
	$id=$_POST['updateid'];
	$sql="SELECT * FROM Users WHERE id='$id'";
	$result=mysqli_query($conn,$sql);
	
	$response=array();
	while($row=mysqli_fetch_assoc($result)){
		$response=$row;
	}
	echo json_encode($response);
	
}

//Update Data
if(isset($_POST['hiddendata'])){
	
	$id=$_POST['hiddendata'];
	$fname=$_POST['updatefname'];
	$lname=$_POST['updatelname'];
	$email=$_POST['updatemail'];
	$mobile=$_POST['updatemobile'];
	
	$sql="UPDATE Users SET
			firstname='$fname',
			lastname='$lname',
			email='$email',
			mobile='$mobile'
			WHERE id='$id'";
			
	$result=mysqli_query($conn,$sql);
	
}

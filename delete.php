<?php
require_once 'db.php';

if(isset($_POST['deletesend'])){
	
	$id=$_POST['deletesend'];
	
	$sql="DELETE FROM Users WHERE id='$id'";
	$result=mysqli_query($conn,$sql);
}

?>
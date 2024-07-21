<?php
require_once 'db.php';

if(isset($_POST['displaysend'])){
	$table='<table class="table">
			<thead class="thead-dark">
			<tr>	
				<th scope="col">Id</th>
				<th scope="col">First Name</th>
				<th scope="col">Last Name</th>
				<th scope="col">Email</th>
				<th scope="col">Mobile</th>
				<th scope="col" colspan="2">Operations</th>
			</tr>
			</thead>';
	$sql ="SELECT * FROM Users";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result)){
		
		$table.='
				<tr>
					<td>'.$row['id'].'</td>
					<td>'.$row['firstname'].'</td>
					<td>'.$row['lastname'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['mobile'].'</td>
					<td><button type="button" onclick="getDetails('.$row['id'].')" class="btn btn-primary">Edit</button></td>
					<td><button type="button" onclick="deleteUser('.$row['id'].')" class="btn btn-danger">Delete</button></td>
				</tr>
		';
		
	}
	$table.='</table>';
	echo $table;
}


?>
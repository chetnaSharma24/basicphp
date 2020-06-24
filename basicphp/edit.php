<?php
require_once('database.php');


if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$update=true;
	$sql="SELECT * FROM user WHERE ID='".$id."'";
	$result=mysqli_query($con,$sql);
    
	 
		 while($row=mysqli_fetch_assoc($result)){
		 $name=$row['name'];
		 $email=$row['email'];
		 $id = $row['ID'];
		 
	 }
	
	 	//header("location: user_form.php");

}


?>


<?php
require_once('database.php');



if(isset($_POST['save'])){
	
	 $name= $_POST['name'];
	 $email =$_POST['email'];
	
	
	$sql="INSERT INTO user(name,email) VALUES('$name','$email')";
	$result=mysqli_query($con,$sql)
	or die($con->error);
	$_SESSION['message']="record saved";
	$_SESSION['msg_type']="success";
	
	header("location: user_form.php");
	     
	
}
?>

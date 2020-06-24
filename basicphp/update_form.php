
<?php
require_once('database.php'); 
//require_once('edit.php');
if(isset($_POST['update'])){
	
     $name= $_POST['name'];
     $email =$_POST['email'];
	 $id= $_POST['update_id'];
	
	
	$con->query("UPDATE user SET name='$name',email='$email' WHERE ID=$id")
	or die($con->error);
	$_SESSION['message']="record updated";
	$_SESSION['msg_type']="warning";
	
	header("location: user_form.php");
	     
	
}
?>

    
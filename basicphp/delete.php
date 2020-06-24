
<?php 
require_once('database.php');


if(isset($_GET['delete'])){

	$id=$_GET['delete'];
	$sql="DELETE FROM user WHERE ID = $id";
	$result=mysqli_query($con,$sql)
	or die($con->error);
	
	$_SESSION['message']="record deleted";
	$_SESSION['msg_type']="danger";
	//header("location: user_form.php");
}
?>
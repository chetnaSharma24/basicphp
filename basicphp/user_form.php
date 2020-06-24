

<?php 
require_once('database.php');
require_once('insertion.php');
require_once('delete.php');
require_once('edit.php');
require_once('update_form.php');



if(isset($_SESSION['message'])){ ?>
<div class="alert alert <?=$_SESSION['msg_type'] ?> ">
<?php 
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div>
<?php } ?>

<!doctype html>
<html lang="en">
    <head>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <h1 style="margin-top:10px">add/delete </h1>
					<p>required fields are in *</p>
					
	<form id="contact-form" method="post" action="user_form.php" role="form">
			<div class="messages"></div>
				<div class="controls">   

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
     
								<label for="form_lastname"><b>name</b></label>
								<input type="text" id="form_lastname" class="form-control " value="<?php echo $name ?>" required="required" data-error="first name is required" placeholder="Enter name" name="name" required>
								<div class="help-block with-errors">
							    </div>
						     </div>
					    </div>
					</div>
					<div class="row">
						<div class="col-md-6">
								<div class="form-group">
                                 	<input type="hidden"  name="update_id" value="<?php echo $id?>"/>

     
									<label for="form_email"><b>email</b></label>
									<input type="text" id="form_email" class="form-control " name="email" value="<?php echo $email ?>" required="required" data-error="email  is required" placeholder="email" required>
									<div class="help-block with-errors"></div>
								</div>
						</div>
					</div>

					
			    <div class="col-md-12">
				  <?php if($update){ ?>
				  <button type='submit' class="btn btn-info" name="update">update</button>  <?php } else { ?>
                
				   <button type='submit' class="btn btn-info" name="save">save</button>
                    <?php } ?>
			    </div>
		   </div>
				 </form>
				 </div>
				 </div>
		
<div class="container">
<div class="row justify-content-center">
<table class="table">
<tr>

<th>id</th>
<th>name</th>
<th>email</th>
</tr>

<?php

$sql = "SELECT * from user";
$result=mysqli_query($con,$sql);

$i=1;
if($result->num_rows > 0){
	while($row = $result-> fetch_assoc()){
		?>
		<tr>
		<td class="m-2"> 
		<?php echo $i; ?>
		</td>
		<td> 
		<?php print($row['name']); ?>
		</td>
		<td> 
		<?php print($row['email']); ?>
		</td>
		<td>
		<a href=user_form.php?edit=<?php echo $row["ID"] ?> class="btn btn-info">edit </a> 
		</td>
		<td>
		<a href=user_form.php?delete=<?php echo $row["ID"] ?> class="btn btn-danger" name="delete">delete</a> 
		</td>
		
		</tr>
<?php $i++; }} ?>

		</table>
				</div>
		</div>
		
		
	</body>	
</html>
		
	
		


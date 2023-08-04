<?php include_once('database/config.php'); ?>

<?php 
if(isset($_POST['insert'])){
	extract($_POST);
	$sql = mysqli_query($con,"insert into `user_table` (`first_name`,`Last_name`,`email`,`password`,`phone_numner`) values ('$fname','$lname','$email','$txtpassword','$phonenumber') ");
	if($sql){
		$_SESSION['successreg'] = "Signup Success";
		header('location:login.php#tologin');
	}else{
		echo "error";
	}

}else{
	header('location:index.php');
}


?>
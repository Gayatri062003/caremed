<?php include_once('database/config.php'); ?>
<?php 
if(isset($_POST['login'])){
	extract($_POST);
	$sql = mysqli_query($con,"select * from `user_table` where `email` = '$email' and `password` = '$password' ");
	$count = mysqli_num_rows($sql);
	if($count > 0){
		$row = mysqli_fetch_array($sql);
		$_SESSION['id'] = $row['User_id'];
		$_SESSION['fname'] = $row['first_name'];
		header('location:myaccount/index.php');
	}else{
		header('location:login.php#tologin');
		$_SESSION['err'] = "Invalid Username Or Password";
	}
}else{

}

?>
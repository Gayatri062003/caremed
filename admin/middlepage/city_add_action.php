<?php 
if(isset($_POST['signup'])){
	extract($_POST);
	$sql = "insert into `services` (`category_name`,`status`) values ('$fname','$lname')";
	$result = mysqli_query($con,$sql);
	if($result){
		$_SESSION['suucess'] = "Your Data Has Been Saved";
		header('location:index.php?page=view_services');	
	}else{

	}
}
else if(isset($_GET['id']))
{
	$sql = mysqli_query($con,"delete from `services` where `id` = '".$_GET['id']."' ");
	if($sql){
		$_SESSION['deldata'] = "Your Data Has Been Deleted";
		header('location:index.php?page=view_services');
	}
}

?>
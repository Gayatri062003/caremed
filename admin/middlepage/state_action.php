<?php 
if(isset($_POST['signup'])){
	extract($_POST);
	$sql = mysqli_query($con,"insert into `state` (`State_Name`,`IsActive`) values ('$state','$status') ");
	if($sql){
		$_SESSION['successtate']="Data Insert Success";
		header('location:index.php?page=view_state');
	}else{
		echo "Error";
	}

}else if($_GET['id']){

	$id = $_GET['id'];
	
	$sql = mysqli_query($con,"delete from `state` where `State_ID` = '".$id."'");
	
	if($sql){
		$_SESSION['delmsg'] = "Your Data Has Been Deleted";
		header('location:index.php?page=view_state');
	}

}


?>
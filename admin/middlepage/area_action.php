<?php 
if(isset($_POST['signup'])){
	extract($_POST);
	$sql = mysqli_query($con,"insert into `area` (`City_ID`,`State_ID`,`Area_Name`,`IsActive`) values ('$State','$City','$area_name','$status') ");
	if($sql){
		$_SESSION['successtate']="Data Insert Success";
		header('location:index.php?page=view_area');
	}else{
		echo "Error";
	}

}else if($_GET['id']){

	$id = $_GET['id'];
	
	$sql = mysqli_query($con,"delete from `area` where `Area_ID` = '".$id."'");
	
	if($sql){
		$_SESSION['delmsg'] = "Your Data Has Been Deleted";
		header('location:index.php?page=view_area');
	}

}


?>
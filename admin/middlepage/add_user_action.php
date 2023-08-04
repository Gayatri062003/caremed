<?php 
if(isset($_POST['signup'])){
	extract($_POST);
	
	$dir = EMPPIC;
	$target_file = $_FILES["addressProof"]["name"];
	$tmp = $_FILES["addressProof"]["tmp_name"];
	$move = move_uploaded_file($tmp, $dir.$target_file);
	if($move){ echo "Your File Has Been Uploaded"; exit(); }	
	echo $sql = "insert into `employee_registration` (`Emp_FName`,`Emp_LName`,`Email`,`Contact_No`,`Gender`,`DOB`,`Password`,`Address`,`address_proof`,`Area_ID`,`City_ID`,`State_ID`,`Photo`,`Experience`,`Joining_Date`,`Resign_Date`,`emp_type`,`IsActive`) values ('$fname','$lname','$uemail','$contactnumber','$gender','$dob','$password','$address','$addressProof','$State','$City','$Area','$profile','$Experience','$Joining','$Resign','$type','$Status')";
	$result = mysqli_query($con,$sql);
	if($result){
		$_SESSION['suucess'] = "Your Data Has Been Saved";
		header('location:index.php?page=view_user');	
	}else{

	}
}else if(isset($_POST['update'])){
	extract($_POST);
	echo $sql = "update `employee_registration` set `Emp_FName` = '$fname',`Emp_LName` = '$lname',`Email`='$uemail',`Contact_No`='$contactnumber',`Gender`='$gender',`DOB`='$dob',`Password`='$password',`Address`='$address',`address_proof`='$addressProof',`Area_ID`='$Area',`City_ID`='$City',`State_ID`='$State',`Photo`='$profile'
	,`Experience`='$Experience',`Joining_Date`='$Joining',`Resign_Date`='$Resign',`emp_type`='$type',`IsActive`='$Status' where `Emp_ID` = '$id' ";
	
	$result = mysqli_query($sql);
	if($result){
		$_SESSION['updatesuccess'] = "Your Profile Has Been Updated";
		header('location:index.php?page=view_user');
	}else{
		echo "update query";
	}

}else if($_GET['id']){
	$id = $_GET['id'];
	$sql = mysqli_query($con,"delete from `employee_registration` where `Emp_ID` = '".$id."' ");
	if($sql){
		$_SESSION['delmsg'] = "Data Deleted";
		header('location:index.php?page=view_user');
	}else{
		echo "Error";
	}
}

?>
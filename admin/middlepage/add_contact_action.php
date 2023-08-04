<?php 
if(isset($_POST['signup'])){
	extract($_POST);
	echo $sql = "insert into `employee_registration` (`Emp_FName`,`Emp_LName`,`Email`,`Contact_No`,`Gender`,`DOB`,`Password`,`Address`,`address_proof`,`Area_ID`,`City_ID`,`State_ID`,`Photo`,`Experience`,`Joining_Date`,`Resign_Date`,`emp_type`,`IsActive`) values ('$fname','$lname','$uemail','$contactnumber','$gender','$dob','$password','$address','$addressProof','$state','$city','$area','$profile','$Experience','$Joining','$Resign','$type','$Status')";
	$result = mysqli_query($con,$sql);
	if($result){
		$_SESSION['suucess'] = "Your Data Has Been Saved";
		header('location:index.php?page=view_user');	
	}else{

	}
}

?>
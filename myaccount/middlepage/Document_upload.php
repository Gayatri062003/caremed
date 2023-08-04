<?php 
if(isset($_POST['signup'])){
	extract($_POST);
	$target_dir = "UserDocument/";
	$name = $_FILES["adharcard"]["name"];
	$tmp = $_FILES["adharcard"]["tmp_name"];
	$move =	move_uploaded_file($tmp, $target_dir.$name);


	$target_dir1 = "UserDocument/";
	$name1 = $_FILES["pancard"]["name"];
	$tmp1 = $_FILES["pancard"]["tmp_name"];
	$move1 =	move_uploaded_file($tmp1, $target_dir1.$name1);


	$target_dir2 = "UserDocument/";
	$name2 = $_FILES["bankaccount"]["name"];
	$tmp2 = $_FILES["bankaccount"]["tmp_name"];
	$move2 = move_uploaded_file($tmp2, $target_dir2.$name2);


	$target_dir3 = "UserDocument/";
	$name3 = $_FILES["Registered"]["name"];
	$tmp3 = $_FILES["Registered"]["tmp_name"];
	$move3 =	move_uploaded_file($tmp3, $target_dir3.$name3);
	
	$result = $_POST['services'];
	$result_explode = explode('|', $result);
	$result_explode[0];
	$result_explode[1];


	$sql = mysqli_query($con,"insert into `apply_service` (`User_ID`,`Service_ID`,`Description`,`amount`,`Upload_Doc1`,`Upload_Doc2`,`Upload_Doc3`,`Upload_Doc4`) values ('".$_SESSION['id']."','".$result_explode[0]."','$Description','".$result_explode[1]."','$name','$name1','$name2','$name3') ");
	if($sql){

		echo "YOur Data Has Been Saved";
		header('location:./Payment');
	}
}else{
	header('location:index.php?page=User_document');
}

?>
<?php  
if(isset($_GET['User_id'])){
	$id = $_GET['User_id'];
	$emp = $_GET['emid'];
echo "insert into `task_detail` (`User_ID`,`Apply_ID`) values ('$id','$emp') ";
	$sql = mysqli_query($con,"insert into `task_detail` (`User_ID`,`Apply_ID`) values ('$id','$emp') ");
	if($sql){
		header('location:index.php?page=view_emp_to_user');

	}else{
		echo "error";
	}
}

?>
<?php 
ob_start();
session_start();
//error_reporting(0);
$con = mysqli_connect("localhost","root","","ca_project");
if(!$con){
	echo "Your Database is not connected";
}
define("EMPPIC","http://localhost/ca/emppic/");
?>
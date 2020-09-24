<?php
    
	$server="localhost";
	$username="root";
	$password="";
	$db="gym";


	$conn = mysqli_connect($server,$username,$password,$db) or die ("connection failed");


	session_start();
	

	$username = $_POST['email'];
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$gender = $_POST['gender'];
	$weight = $_POST['weight'];
	$dob = $_POST['dob'];
	$training = $_POST['training'];

	$sql="INSERT INTO membership (`email`, `name`,  `phone`, `weight`,	`gender`, `dob`, `training`) VALUES ( '$username', '$name', '$mobile', '$weight', '$gender', '$dob', '$training')";

	
if(mysqli_query($conn,$sql)){
//echo"sucess"
	//echo "<scrtip>alert"We Will Contact You Soon"</script>";
	header("Location:http://localhost/PBL/home.html");
;
	}else{
		//echo "fail";

	header("Location:http://localhost/PBL/Contact.html");
;
}

?>